<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Log;
use App\Models\Volunteer;

use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationSuccessMail;
use Illuminate\Support\Facades\Validator;

class VolunteerController extends Controller
{
    public function volunteerForm()
    {
        return view('frontend.volunteer');
    }

    public function processPayment(Request $request)
    {

        $rules = [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:volunteers,email',
            'phone' => 'required|digits:10|regex:/^[6-9]\d{9}$/',
            'gender' => 'required|in:Male,Female,Other',
            'aadhar' => 'required|digits:12|unique:volunteers,aadhar',
            // 'category'            => 'required|in:General,OBC,SC,ST',
            'category' => 'required|required',
            'dob' => 'required|date',
            'district' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'pincode' => 'required|digits:6',
            'project_name' => 'required|string|max:255',
            'registration_date' => 'required|date',
            'address' => 'required|string',
            'message' => 'required|string',
        ];

        // $validatedData = $request->validate($rules);

        // Create the validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check if validation fails and return JSON errors
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }
        // Retrieve the validated data
        $validatedData = $validator->validated();

        $api = new Api(config('app.razorpay_key'), config('app.razorpay_secret'));

        $amount = 300;
        $order = $api->order->create([
            'amount' => $amount * 100, // Amount in paise
            'currency' => 'INR',
            'receipt' => 'receipt_' . time(),
        ]);
        $order_id = $order->id;

        // Save donation record
        // Create a new Volunteer instance
        $volunteer = new Volunteer();

        $volunteer->regisration_id = mt_rand(1000, 9999) . time();
        // Assign user-provided fields
        $volunteer->full_name = $validatedData['full_name'];
        $volunteer->email = $validatedData['email'];
        $volunteer->phone = $validatedData['phone'];
        $volunteer->gender = $validatedData['gender'];
        $volunteer->aadhar = $validatedData['aadhar'];
        $volunteer->category = $validatedData['category'];
        $volunteer->dob = $validatedData['dob'];
        $volunteer->district = $validatedData['district'];
        $volunteer->state = $validatedData['state'];
        $volunteer->pincode = $validatedData['pincode'];
        $volunteer->project_name = $validatedData['project_name'];
        $volunteer->registration_date = $validatedData['registration_date'];
        $volunteer->address = $validatedData['address'];
        $volunteer->message = $validatedData['message'];

        // dd($amount);
        // Programmatically set the payment fields
        $volunteer->amount = $amount;
        $volunteer->razorpay_order_id = $order_id; // your logic here

        $volunteer->save();

        //SET USER EMAIL IN SESSION
        session(['user_email' => $request->email]);

        return response()->json([
            'order_id' => $order_id,
            'razorpay_key' => config('app.razorpay_key'),
        ]);

    }


    //verify payment


    public function verifyPayment(Request $request)
    {
        try {
            // Retrieve and trim the payment parameters
            $signature = trim($request->razorpay_signature);
            $paymentId = trim($request->razorpay_payment_id);
            $orderId = trim($request->razorpay_order_id);

            // Generate the signature using your Razorpay secret key
            $generatedSignature = hash_hmac('sha256', $orderId . '|' . $paymentId, config('app.razorpay_secret'));

            if ($generatedSignature === $signature) {
                // Log the verification attempt
                Log::info("Verifying payment for order ID: {$orderId}");

                // Retrieve the matching volunteer record
                $volunteer = Volunteer::where('razorpay_order_id', $orderId)->first();

                if ($volunteer) {
                    // Update the record with payment details
                    $volunteer->razorpay_payment_id = $paymentId;
                    $volunteer->razorpay_signature = $signature;
                    $volunteer->status = "Success";
                    $volunteer->save();

                    // Generate the URL for the success page
                    $volunteer_success_url = route('volunteer.success', [$volunteer->regisration_id]);

                    // Send success email
                    Mail::to($volunteer->email)
                        ->cc(config('app.MAIL_TO_ADDRESS'))
                        ->cc(config('app.CC_MAIL_ADDRESS'))
                        ->queue(new RegistrationSuccessMail([
                            'receipt_url' => $volunteer_success_url
                        ]));

                    return response()->json([
                        'success' => true,
                        'message' => 'Payment verified and registration recorded!',
                        'volunteer_url' => $volunteer_success_url,
                    ]);
                } else {
                    // Log an error if no record is found
                    Log::error("Volunteer record not found for Order ID: {$orderId}");

                    return response()->json([
                        'success' => false,
                        'message' => "Payment verification failed! Contact us with Order ID: {$orderId}",
                    ], 404);
                }
            } else {
                return response()->json([
                    'success' => false,
                    'message' => "Payment verification failed! Contact us with Order ID: {$orderId}",
                ], 400);
            }
        } catch (\Exception $e) {
            // Log the exception message
            Log::error("Payment verification error for Order ID: {$orderId}. Error: " . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => "Payment verification failed! Contact us with Order ID: {$orderId}",
            ], 500);
        }
    }



    public function success($id)
    {
        // Retrieve the email from the session
        $user_email = session('user_email');

        // Check if the session email is null
        if (!$user_email) {
            $error = 'Unauthorized access: No user email found in session.';
            return view('frontend.volunteer_receipt', compact('error'));
            // return redirect()->back()->with('error', 'Unauthorized access: No user email found in session.');
        }

        // Retrieve the volunteer record by ID and email
        $volunteer = Volunteer::where('regisration_id', $id)->where('email', $user_email)->first();

        // Check if the volunteer exists
        if (!$volunteer) {
            $error = 'Unauthorized access: Record not found.';
            return view('frontend.volunteer_receipt', compact('error'));
            // return redirect()->back()->with('error', 'Unauthorized access: Record not found.');
        }

        // Pass the volunteer data to the view
        // return view('frontend.donate.receipt', compact('volunteer'));
        return view('frontend.volunteer_receipt', compact('volunteer'));
        // return view('frontend.donate.volunteer_receipt', compact('volunteer'));
    }
}
