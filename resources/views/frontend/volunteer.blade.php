@extends('frontend.layouts.app')

@section('title', 'volunteer')

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
                    redirected to Registration receipt page.</h6>
                <p class="mb-4"> For Register yourself as volunteer you have to pay Rs. 300. After payment success Volunteer
                    Receipt will be sent on you mail</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mx-auto">
                <div id="errorMessages"></div>
                <form id="volunteerForm" method="post" action="{{ route('volunteer.payment.process') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="full_name">Full Name</label>
                            <input type="text" id="full_name" name="full_name" placeholder="Enter Full Name" required
                                pattern="^[a-zA-Z\s]+$" title="Only letters and spaces allowed"
                                value="{{ old('full_name') }}">
                            @error('full_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter Email" required
                                value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone" placeholder="Enter Phone Number" required
                                pattern="[6-9]\d{9}" title="Enter a valid 10-digit phone number starting with 6-9"
                                value="{{ old('phone') }}">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label for="gender">Gender</label>
                            <select id="gender" name="gender" required>
                                <option value="" disabled {{ old('gender') ? '' : 'selected' }}>Select Gender</option>
                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('gender')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="aadhar">Aadhar Number</label>
                            <input type="text" id="aadhar" name="aadhar" placeholder="Enter Aadhar Number" required
                                pattern="\d{12}" title="Enter a valid 12-digit Aadhar Number"
                                value="{{ old('aadhar') }}">
                            @error('aadhar')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label for="category">Category</label>
                            <select id="category" name="category" required>
                                <option value="" disabled {{ old('category') ? '' : 'selected' }}>Select Category</option>
                                <option value="General" {{ old('category') == 'General' ? 'selected' : '' }}>General</option>
                                <option value="OBC" {{ old('category') == 'OBC' ? 'selected' : '' }}>OBC</option>
                                <option value="SC" {{ old('category') == 'SC' ? 'selected' : '' }}>SC</option>
                                <option value="ST" {{ old('category') == 'ST' ? 'selected' : '' }}>ST</option>
                            </select>
                            @error('category')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="dob">Date of Birth</label>
                            <input type="date" id="dob" name="dob" required value="{{ old('dob') }}" placeholder="e.g 2000-01-01">
                            @error('dob')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label for="district">District</label>
                            <input type="text" id="district" name="district" placeholder="Enter District" required
                                value="{{ old('district') }}">
                            @error('district')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="state">State</label>
                            <input type="text" id="state" name="state" placeholder="Enter State" required
                                value="{{ old('state') }}">
                            @error('state')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label for="pincode">Pin Code</label>
                            <input type="text" id="pincode" name="pincode" placeholder="Enter Pin Code" required
                                pattern="\d{6}" title="Enter a valid 6-digit Pin Code"
                                value="{{ old('pincode') }}">
                            @error('pincode')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="project_name">Project Name</label>
                            <input type="text" id="project_name" name="project_name" placeholder="Enter Project Name"
                                required value="{{ old('project_name') }}">
                            @error('project_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label for="registration_date">Registration Date</label>
                            <input type="date" id="registration_date" name="registration_date" required
                                value="{{ old('registration_date') }}">
                            @error('registration_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6-msj">
                            <label for="address">Full Address</label>
                            <textarea id="address" name="address" placeholder="Enter Full Address"
                                required>{{ old('address') }}</textarea>
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label for="message">Message</label>
                            <textarea id="message" name="message" placeholder="Enter Your Message"
                                required>{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" id="submitBtn" class="btn btn-success btn-rounded">Register Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        // Function to display errors
        function displayErrors(errors) {
            let errorContainer = document.getElementById("errorMessages");
            errorContainer.innerHTML = ""; // Clear previous errors

            for (let field in errors) {
                let errorMessage = document.createElement("p");
                errorMessage.style.color = "red";
                errorMessage.textContent = errors[field][0]; // Display first error for each field
                errorContainer.appendChild(errorMessage);
            }
        }
        

        document.getElementById('volunteerForm').addEventListener('submit', function (e) {
            e.preventDefault();
            // Show loader and disable button
            document.getElementById("submitBtn").innerHTML = `Register Now <div class="spinner-border" role="status"></div>`;
            document.getElementById("submitBtn").disabled = true;

            const form = document.getElementById('volunteerForm');
            const formData = new FormData(form);
            let action = this.getAttribute('action');

            fetch(action, {
                method: 'POST',
                body: formData,
            })
            .then(response => {
                if (!response.ok) {
                    // If the response status is not OK, parse the JSON to get the errors.
                    return response.json().then(errorResponse => {
                        if (errorResponse.errors) {
                            displayErrors(errorResponse.errors);
                        }
                        alert('Invalid Form Data, Please check the validation errors at the top and try again.');
                        // Throw an error to exit the promise chain.
                        throw new Error('Validation failed');
                    });
                }
                return response.json();
            })
            .then(data => {
                // Remove disabled attribute and loader
                document.getElementById("submitBtn").innerHTML = `Register Now`;
                document.getElementById("submitBtn").disabled = false;

                const options = {
                    key: data.razorpay_key,
                    amount: data.donation_amount * 100,
                    currency: "INR",
                    name: "Volunteer Registration",
                    description: "Donation for a volunteer Registration",
                    order_id: data.order_id,
                    prefill: {
                        // name: data.donor_name,
                    },
                    handler: function (response) {
                        // Verify payment
                        fetch("{{ route('volunteer.payment.verify') }}", {
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
                                alert('Payment successful! Redirecting to your donation receipt...');
                                if (verification.volunteer_url) {
                                    window.location.href = verification.volunteer_url;
                                }
                            } else {
                                console.error('Payment verification failed:', verification.message || 'Unknown error');
                                alert('Payment verification failed. Please try again or contact support.');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('There is some error.');
                        });
                    },
                    theme: {
                        color: "#528FF0",
                    },
                };

                const rzp = new Razorpay(options);
                rzp.open();
            })
            .catch((error) => {
                // Remove disabled attribute and loader
                document.getElementById("submitBtn").innerHTML = `Register Now`;
                document.getElementById("submitBtn").disabled = false;
                console.error('Submission error:', error);
            });
        });

    </script>
@endsection
@push('js')

@endpush