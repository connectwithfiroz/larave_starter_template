@extends('frontend.layouts.app')

@section('title', 'Home Page')

@push('header')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<!-- extra css -->
@endpush

@section('section')
<!-- popup-form -->
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
          value="Test"
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
          value="Firoz"
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
          value="contacttofiroz@gmail.com"
          required
        >
      </div>
      <div class="mb-3">
        <label for="donor-number" class="form-label">Mobile Number:</label>
        <input
          type="text"
          id="donor-number"
          name="donor_number"
          class="form-control"
          value="8789701916"
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
          value="test"
          required
        >
      </div>
      <div class="form-group">
        <label class="control-label">Address </label>
        <input type="text" placeholder="Enter Address" class="form-control input-lg" name="address" required="">
      </div>
      <h5 class="my-2 text-center">If You Want To Claim The Tax Deduction, Then Fill Below Fields Or Left Blank</h5>
      <div class="form-group">
        <label class="control-label">PAN Number </label>
        <input type="text" placeholder="Enter PAN Number" class="form-control input-lg" name="pan_no">
      </div>
      <div class="form-group">
        <label class="control-label">Bank Name </label>
        <input type="text" placeholder="Enter Bank Name" class="form-control input-lg" name="bank_name">
      </div>
      <div class="form-group">
        <label class="control-label">Branch Name </label>
        <input type="text" placeholder="Enter Bank Branch Name " class="form-control input-lg" name="branch_name">
      </div>
      <div class="text-center">
        <button type="submit" id="donate-button" class="btn btn-primary">Donate Now</button>
      </div>
    </form>
  </div>
</div>

@endsection

@push('js')
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
@endpush
