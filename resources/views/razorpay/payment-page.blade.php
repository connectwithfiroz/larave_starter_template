<!DOCTYPE html>
<html>
<head>
    <title>Razorpay Payment</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
    <button id="payBtn">Pay Now</button>
    <script>
        var options = {
            "key": "{{ env('RAZORPAY_KEY_ID') }}",
            "amount": "{{ $order->amount }}", // in paise
            "currency": "{{ $order->currency }}",
            "name": "Your App Name",
            "description": "Payment Description",
            "order_id": "{{ $order->id }}",
            "handler": function (response) {
                // Submit the response to your server
                fetch('/payment-callback', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    body: JSON.stringify(response)
                })
                .then(res => res.json())
                .then(data => alert(data.status))
                .catch(err => console.error(err));
            }
        };
        var rzp1 = new Razorpay(options);
        document.getElementById('payBtn').onclick = function (e) {
            rzp1.open();
            e.preventDefault();
        };
    </script>
</body>
</html>
