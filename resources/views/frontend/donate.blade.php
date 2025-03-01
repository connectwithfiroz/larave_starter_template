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
                <h6 class="text-danger">Dont' close browser during payment, Once payment success automatically you'll be
                    redirected to Donation receipt page.</h6>
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
                                <label for="donation_for" class="form-label">Donation For: <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="donation_for" name="donation_for" class="form-control"
                                    value="{{ request('for') }}" required minlength="3"
                                    title="Please enter at least 3 characters." placeholder="Enter purpose of donation">
                            </div>
                            <div class="mb-3">
                                <label for="donor-name" class="form-label">Name: <span class="text-danger">*</span></label>
                                <input type="text" id="donor-name" name="donor_name" class="form-control" required
                                    pattern="^[A-Za-z\s]{2,50}$"
                                    title="Name should only contain alphabets and spaces, and be at least 2 characters long."
                                    placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                                <label for="donor-email" class="form-label">Email: <span
                                        class="text-danger">*</span></label>
                                <input type="email" id="donor-email" name="donor_email" class="form-control" required
                                    placeholder="Enter your email">
                                <div class="form-text">Please type proper email as donation receipt will be shared on it.
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-auto">
                                        <label for="country_code" class="form-label">Contry Code: <span
                                                class="text-danger">*</span></label>
                                        <select id="country-code" name="country_code" class="form-control" required>
                                            <option value="+91" selected>🇮🇳 +91 (India)</option>
                                            <option value="+1">🇺🇸 +1 (USA)</option>
                                            <option value="+44">🇬🇧 +44 (UK)</option>
                                            <option value="+61">🇦🇺 +61 (Australia)</option>
                                            <option value="+971">🇦🇪 +971 (UAE)</option>
                                            <option value="+92">🇵🇰 +92 (Pakistan)</option>
                                            <option value="+880">🇧🇩 +880 (Bangladesh)</option>
                                            <option value="+86">🇨🇳 +86 (China)</option>
                                            <option value="+81">🇯🇵 +81 (Japan)</option>
                                            <option value="+33">🇫🇷 +33 (France)</option>
                                            <option value="+49">🇩🇪 +49 (Germany)</option>
                                            <option value="+39">🇮🇹 +39 (Italy)</option>
                                            <option value="+7">🇷🇺 +7 (Russia)</option>
                                            <option value="+55">🇧🇷 +55 (Brazil)</option>
                                            <option value="+27">🇿🇦 +27 (South Africa)</option>
                                            <option value="+82">🇰🇷 +82 (South Korea)</option>
                                            <option value="+34">🇪🇸 +34 (Spain)</option>
                                            <option value="+966">🇸🇦 +966 (Saudi Arabia)</option>
                                            <option value="+20">🇪🇬 +20 (Egypt)</option>
                                            <option value="+52">🇲🇽 +52 (Mexico)</option>
                                            <option value="+234">🇳🇬 +234 (Nigeria)</option>
                                        </select>

                                    </div>
                                    <div class="col">
                                        <label for="donor-number" class="form-label">Mobile Number: <span
                                                class="text-danger">*</span></label>
                                        <input type="tel" id="donor-number" name="donor_number" class="form-control"
                                            pattern="^[6-9]\d{9}$"
                                            title="Please enter a valid 10-digit Indian mobile number starting with 6-9."
                                            required placeholder="Enter your 10-digit mobile number" maxlength="10">
                                    </div>
                                </div>

                            </div>

                            <div class="mb-3">
                                <label for="donation_amount" class="form-label">Donation Amount (₹): <span
                                        class="text-danger">*</span></label>
                                <input type="number" id="donation_amount" name="donation_amount" class="form-control"
                                    min="1" max="1000000" step="1" required
                                    title="Please enter a valid donation amount (minimum ₹1, maximum ₹10,00,000)."
                                    placeholder="Enter donation amount">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" placeholder="Enter Address" class="form-control" name="address">
                            </div>
                            <h5 class="my-2">If You Want To Claim The Tax Deduction, Then Fill Below Fields Or Leave Blank
                            </h5>
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
                                <input type="text" placeholder="Enter Bank Branch Name" class="form-control"
                                    name="branch_name" pattern="^[A-Za-z\s]{3,50}$"
                                    title="Branch name should only contain letters and spaces.">
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
    <script>
            const donationInput = document.getElementById("donation_amount");

            donationInput.addEventListener("input", function () {
                if (this.value < 1) {
                    this.value = ""; // Clear input if negative or zero
                }
                if (this.value > 1000000) {
                    this.value = 1000000; // Max limit ₹10,00,000
                }
            });
    </script>
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
                                    //remove disabled attr and loader
                                    document.getElementById("donate-button").innerHTML = `Donate Now`;
                                    document.getElementById("donate-button").disabled = false;
                                    console.error('Error:', error)
                                }
                                );

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