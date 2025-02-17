<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Al Khair Educational &amp; Charitable Trust &#8211; Lets Empower Society</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->

	<link rel="icon" href="{{ asset('frontend/fev.jpg') }}"type="image/jpg">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

</head>
<body>
<div class="card my-5 mx-auto" style="max-width: 600px;">
  <div class="card-header text-center">
    <img src="{{ asset('frontend/img/logo.jpg') }}" alt="Logo" class="img-fluid mb-2" style="max-height: 100px;">
    <h5 class="card-title">Al Khair Educational & Charitable Trust</h5>
  </div>
  <div class="card-body">
    <p class="card-text text-center">
      Your generous donation helps us to bring change and provide support to those in need.
    </p>

    <form id="donation-form" method="post" action="{{ route('payment.process') }}">
      @csrf
      <div class="mb-3">
        <label for="donation_for" class="form-label">Donation For:</label>
        <input
          type="text"
          id="donation_for"
          name="donation_for"
          class="form-control"
          value="{{ request('for') }}"
          required
        >
      </div>
      <div class="mb-3">
        <label for="donor-name" class="form-label">Name:</label>
        <input
          type="text"
          id="donor-name"
          name="donor_name"
          class="form-control"
          value="{{ request('donor-name') }}"
          required
        >
      </div>
      <div class="mb-3">
        <label for="donor-email" class="form-label">Email:</label>
        <input
          type="email"
          id="donor-email"
          name="donor_email"
          class="form-control"
          value="{{ request('donor-email') }}"
          required
        >
      </div>
      <div class="mb-3">
        <label for="donor-number" class="form-label">Mobile Number:</label>
        <input
          type="tel"
          id="donor-number"
          name="donor_number"
          class="form-control"
          pattern="[0-9]{10}"
          title="Please enter a valid 10-digit mobile number."
          value="{{ request('donor-number') }}"
          required
        >
      </div>
      <div class="mb-3">
        <label for="donation-amount" class="form-label">Donation Amount:</label>
        <input
          type="number"
          id="donation-amount"
          name="donation_amount"
          class="form-control"
          min="1"
          value="{{ request('donation-amount') }}"
          required
        >
      </div>
      <div class="form-group">
        <label class="control-label">Address</label>
        <input
          type="text"
          placeholder="Enter Address"
          class="form-control input-lg"
          name="address"
          
        >
      </div>
      <h5 class="my-2 text-center">If You Want To Claim The Tax Deduction, Then Fill Below Fields Or Leave Blank</h5>
      <div class="form-group">
        <label class="control-label">PAN Number</label>
        <input
          type="text"
          placeholder="Enter PAN Number"
          class="form-control input-lg"
          name="pan_no"
          pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}"
          title="Please enter a valid PAN number (e.g., ABCDE1234F)."
        >
      </div>
      <div class="form-group">
        <label class="control-label">Bank Name</label>
        <input
          type="text"
          placeholder="Enter Bank Name"
          class="form-control input-lg"
          name="bank_name"
        >
      </div>
      <div class="form-group">
        <label class="control-label">Branch Name</label>
        <input
          type="text"
          placeholder="Enter Bank Branch Name"
          class="form-control input-lg"
          name="branch_name"
        >
      </div>
      <div class="text-center">
        <button type="submit" id="donate-button" class="btn btn-success btn-rounded">Donate Now 
          
        </button>
      </div>
    </form>


  </div>
</div>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    document.getElementById('donation-form').addEventListener('submit', function (e) {
        e.preventDefault();
        //show loader and disable button
        document.getElementById("donate-button").innerHTML = `Donate Now <div class="spinner-border" role="status"></div>`;
        document.getElementById("donate-button").disabled = true;//disable


        const form = document.getElementById('donation-form');
        const formData = new FormData(form);
        let action = this.getAttribute('action');

        fetch(action, {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
          //after response
          //remove disabled attr and loader
          document.getElementById("donate-button").innerHTML = `Donate Now`;
          document.getElementById("donate-button").disabled = false;
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
                        // Show a success alert
                        alert('Payment successful! Redirecting to your donation receipt...');

                        // Redirect the user to the donation receipt URL
                        if (verification.donation_url) {
                            window.location.href = verification.donation_url;
                        }
                    } else {
                        // Show an error alert for failed verification
                        console.error('Payment verification failed:', verification.message || 'Unknown error');
                        alert('Payment verification failed. Please try again or contact support.');
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
            console.error('Init Error:', error)
            } 
        );
    });
</script>
</body>


</html>

