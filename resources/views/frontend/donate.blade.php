@extends('frontend.layouts.app')

@section('title', 'Donation')

@push('header')
    <!-- extra header -->
@endpush

@section('section')
    <div class="container p-5" style="background-color: antiquewhite;">
        <div class="row">
            <div class="col-lg-12 mx-auto text-center">
                <!-- Logo -->
                <img src="{{ asset('frontend/assets/img/logo.webp') }}" alt="Logo" class="img-fluid mb-2"
                    style="max-height: 100px;">
                <h5 class="card-title">Al Khair Educational & Charitable Trust</h5>
                <!-- Paragraph -->
                <p class="mb-4"> Your generous donation helps us to bring change and provide support to those in need.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 mx-auto">
            <form id="donation-form" method="post" action="{{ route('payment.process') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="donation_for" class="form-label">Donation For:</label>
                            <input type="text" id="donation_for" name="donation_for" class="form-control"
                                value="{{ request('for') }}" required minlength="3"
                                title="Please enter at least 3 characters.">
                        </div>
                        <div class="mb-3">
                            <label for="donor-name" class="form-label">Name:</label>
                            <input type="text" id="donor-name" name="donor_name" class="form-control" 
                                required pattern="^[A-Za-z\s]{2,50}$"
                                title="Name should only contain alphabets and spaces, and be at least 2 characters long.">
                        </div>
                        <div class="mb-3">
                            <label for="donor-email" class="form-label">Email:</label>
                            <input type="email" id="donor-email" name="donor_email" class="form-control"
                                 required>
                        </div>
                        <div class="mb-3">
                            <label for="donor-number" class="form-label">Mobile Number:</label>
                            <input type="tel" id="donor-number" name="donor_number" class="form-control"
                                pattern="^[6-9]\d{9}$" title="Please enter a valid 10-digit Indian mobile number starting with 6-9."
                                 required>
                        </div>
                        <div class="mb-3">
                            <label for="donation-amount" class="form-label">Donation Amount (₹):</label>
                            <input type="number" id="donation-amount" name="donation_amount" class="form-control"
                                min="1" required title="Please enter a valid donation amount (minimum ₹1)."
                                value="{{ request('donation-amount') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" placeholder="Enter Address" class="form-control" name="address">
                        </div>
                        <h5 class="my-2">If You Want To Claim The Tax Deduction, Then Fill Below Fields Or Leave Blank</h5>
                        <div class="mb-3">
                            <label class="form-label">PAN Number</label>
                            <input type="text" placeholder="Enter PAN Number" class="form-control" name="pan_no"
                                pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}"
                                title="Please enter a valid PAN number (e.g., ABCDE1234F).">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bank Name</label>
                            <input type="text" placeholder="Enter Bank Name" class="form-control" name="bank_name"
                                pattern="^[A-Za-z\s]{3,50}$" title="Bank name should only contain letters and spaces.">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Branch Name</label>
                            <input type="text" placeholder="Enter Bank Branch Name" class="form-control" name="branch_name"
                                pattern="^[A-Za-z\s]{3,50}$" title="Branch name should only contain letters and spaces.">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" id="donate-button" class="btn btn-success btn-rounded">Donate Now</button>
                </div>
            </form>

            </div>
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
@endsection
@push('js')

@endpush