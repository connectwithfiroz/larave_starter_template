<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
class RazorpayController extends Controller
{
    //
    public function createOrder(Request $request)
    {
        $api = new Api(env('RAZORPAY_KEY_ID'), env('RAZORPAY_KEY_SECRET'));

        $order = $api->order->create([
            'receipt' => 'order_rcptid_11',
            'amount' => 500, // Amount in paise (50000 = ₹500)
            'currency' => 'INR',
        ]);

        return view('razorpay.payment-page', ['order' => $order]);
    }

    public function paymentCallback(Request $request)
    {
        $signatureStatus = $this->verifySignature(
            $request->razorpay_order_id,
            $request->razorpay_payment_id,
            $request->razorpay_signature
        );

        if ($signatureStatus) {
            // Payment successful
            return response()->json(['status' => 'Payment Successful']);
        } else {
            // Payment failed
            return response()->json(['status' => 'Payment Verification Failed']);
        }
    }

    private function verifySignature($orderId, $paymentId, $signature)
    {
        $api = new Api(env('RAZORPAY_KEY_ID'), env('RAZORPAY_KEY_SECRET'));
        $generatedSignature = hash_hmac(
            'sha256',
            $orderId . '|' . $paymentId,
            env('RAZORPAY_KEY_SECRET')
        );

        return $generatedSignature === $signature;
    }


}
