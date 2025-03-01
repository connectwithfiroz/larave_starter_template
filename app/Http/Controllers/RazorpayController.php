<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Log;
use App\Models\Donation;

use Illuminate\Support\Facades\Mail;
use App\Mail\DonationSuccessMail;

class RazorpayController extends Controller
{
    public function donationForm()
    {
        return view('frontend.donate');
    }

    public function processPayment(Request $request)
    {
        $request->validate([
            'donation_for' => 'required|string',
            'donor_name' => 'required|string',
            'donor_email' => 'required|email',
            'donor_number' => 'required|string',
            'donation_amount' => 'required|numeric|min:1',
            'address' => 'nullable|string|max:255',
            'pan_no' => 'nullable|string|max:10',
            'bank_name' => 'nullable|string|max:255',
            'branch_name' => 'nullable|string|max:255',
        ]);


        $api = new Api(config('app.razorpay_key'), config('app.razorpay_secret'));

        $order = $api->order->create([
            'amount' => $request->donation_amount * 100, // Amount in paise
            'currency' => 'INR',
            'receipt' => 'receipt_' . time(),
        ]);
        $order_id = $order->id;

        // Save donation record
        //combile donar mobile number with phone coutnry code which in $request->country_code
        $mobile_number =( $request->country_code ?? '') . $request->donor_number;
        Donation::create([
            'donation_for' => $request->donation_for, // You can customize this or pass it from the form
            'name' => $request->donor_name,
            'email' => $request->donor_email,
            'mobile_number' => $mobile_number,
            'amount' => $request->donation_amount,
            'razorpay_order_id' => $order_id,
            'status' => "Pending",
            'address' => $request->address,
            'pan_no' => $request->pan_no,
            'bank_name' => $request->bank_name,
            'branch_name' => $request->branch_name,
            'donation_id' => mt_rand(1000, 9999) . time(),
        ]);
        //SET USER EMAIL IN SESSION
        session(['user_email' => $request->donor_email]);

        return response()->json([
            'order_id' => $order_id,
            'razorpay_key' => config('app.razorpay_key'),
            'donor_name' => $request->donor_name,
            'donor_email' => $request->donor_email,
            'donor_number' => $mobile_number,
            'donation_amount' => $request->donation_amount,
            'donation_for' => $request->donation_for,
        ]);
    }


    //verify payment

    public function verifyPayment(Request $request)
    {
        try {
            $signature = trim($request->razorpay_signature);
            $paymentId = trim($request->razorpay_payment_id);
            $orderId = trim($request->razorpay_order_id);

            // Generate the signature using your Razorpay secret key
            $generatedSignature = hash_hmac('sha256', $orderId . '|' . $paymentId, config('app.razorpay_secret'));

            if ($generatedSignature === $signature) {
                // Retrieve the matching donation record based on the razorpay_order_id
                $donation = Donation::where('razorpay_order_id', $orderId)->first();

                if ($donation) {
                    // Update the donation record
                    $donation->update([
                        'razorpay_payment_id' => $paymentId,
                        'razorpay_signature' => $signature,
                        'status' => "Success",
                    ]);

                    // Generate the donation success URL
                    $donation_success_url = route('donate.success', [base64_encode($donation->id)]);

                    // Attempt to send the success email
                    try {
                        Mail::to($donation->email)
                            ->cc(config('app.MAIL_TO_ADDRESS'))
                            ->cc(config('app.CC_MAIL_ADDRESS'))
                            ->send(new DonationSuccessMail($donation_success_url));
                    } catch (\Exception $mailException) {
                        Log::error("Failed to send donation success mail for order id {$orderId}: " . $mailException->getMessage());

                        return response()->json([
                            'success' => false,
                            'message' => "Payment verified and donation recorded, but failed to send mail. Please contact us with order-id = {$orderId}",
                        ]);
                    }

                    return response()->json([
                        'success' => true,
                        'message' => 'Payment verified and donation recorded!',
                        'donation_url' => $donation_success_url,
                    ]);
                } else {
                    // Handle the case where the donation record is not found
                    Log::error("Donation record not found for order id {$orderId}");
                    return response()->json([
                        'success' => false,
                        'message' => 'Donation record not found.',
                    ]);
                }
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Payment verification failed!'
                ]);
            }
        } catch (\Exception $e) {
            Log::error("Error verifying payment for order id {$request->razorpay_order_id}: " . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => "Payment verification failed, contact us with order-id = {$request->razorpay_order_id}"
            ]);
        }
    }


    public function donationSuccess($id)
    {
        $id = base64_decode($id);
        // Retrieve the email from the session
        // $user_email = session('user_email');

        // // Check if the session email is null
        // if (!$user_email) {
        //     return redirect()->back()->with('error', 'Unauthorized access: No user email found in session.');
        // }

        // Retrieve the donation record by ID and email
        // $donation = Donation::where('id', $id)->where('email', $user_email)->first();
        $donation = Donation::where('id', $id)->first();

        // Check if the donation exists
        if (!$donation) {
            return redirect()->back()->with('error', 'Unauthorized access: Donation record not found.');
        }

        // Pass the donation data to the view
        // return view('frontend.donate.receipt', compact('donation'));
        return view('frontend.donate.donation_receipt', compact('donation'));
        // return view('frontend.donate.donation_receipt', compact('donation'));
    }
}
