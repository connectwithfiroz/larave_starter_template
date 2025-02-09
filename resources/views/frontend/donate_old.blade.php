<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
    <form id="donation-form" method="post" action="{{ route('payment.process') }}">
        @csrf
        <label for="donation_for">Donation For:</label>
        <input type="text" id="donation_for" name="donation_for" value="Test" required>
        <label for="donor-name">Name:</label>
        <input type="text" id="donor-name" name="donor_name" value="Firoz" required>

        <label for="donor-email">Email:</label>
        <input type="email" id="donor-email" name="donor_email" value="contacttofiroz@gmail.com" required>

        <label for="donor-number">Mobile Number:</label>
        <input type="text" id="donor-number" name="donor_number" value="8789701916" required>

        <label for="donation-amount">Donation Amount:</label>
        <input type="number" id="donation-amount" name="donation_amount" value="test" required>

        <button type="submit" id="donate-button">Donate Now</button>
    </form>

    <script>
        document.getElementById('donation-form').addEventListener('submit', function (e) {
            e.preventDefault();

            const form = document.getElementById('donation-form');
            const formData = new FormData(form);
            let action = this.getAttribute('action');

            fetch(action, {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                const options = {
                    key: data.razorpay_key,
                    amount: data.donation_amount * 100,
                    currency: "INR",
                    name: "NGO Donation",
                    description: "Donation for a cause",
                    order_id: data.order_id,
                    prefill: {
                        name: data.donor_name,
                        email: data.donor_email,
                        contact: data.donor_number,
                    },
                    handler: function (response) {
                        // Verify payment
                        fetch("{{ route('payment.verify') }}", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': "{{ csrf_token() }}",
                            },
                            body: JSON.stringify({
                                razorpay_order_id: response.razorpay_order_id,
                                razorpay_payment_id: response.razorpay_payment_id,
                                razorpay_signature: response.razorpay_signature,
                            }),
                        })
                        .then(res => res.json())
                        .then(verification => {
                            if (verification.success) {
                                alert('Payment successful!');
                            } else {
                                alert('Payment verification failed.');
                            }
                        }).catch((error) => {
                            alert('There is some error.');
                            console.error('Error:', error)
                            } 
                        );;

                    },
                    theme: {
                        color: "#528FF0",
                    },
                };

                const rzp = new Razorpay(options);
                rzp.open();
            })
            .catch((error) => {
                alert('there is some error');
                console.error('Error:', error)
                } 
            );
        });
    </script>
</body>
</html>
