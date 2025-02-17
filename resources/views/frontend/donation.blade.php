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
                                    value="{{ request('for') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="donor-name" class="form-label">Name:</label>
                                <input type="text" id="donor-name" name="donor_name" class="form-control" value="Firoz"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="donor-email" class="form-label">Email:</label>
                                <input type="email" id="donor-email" name="donor_email" class="form-control"
                                    value="contacttofiroz@gmail.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="donor-number" class="form-label">Mobile Number:</label>
                                <input type="tel" id="donor-number" name="donor_number" class="form-control"
                                    pattern="[0-9]{10}" title="Please enter a valid 10-digit mobile number."
                                    value="8789701916" required>
                            </div>
                            <div class="mb-3">
                                <label for="donation-amount" class="form-label">Donation Amount:</label>
                                <input type="number" id="donation-amount" name="donation_amount" class="form-control"
                                    min="1" required>
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
                                <input type="text" placeholder="Enter Bank Name" class="form-control" name="bank_name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Branch Name</label>
                                <input type="text" placeholder="Enter Bank Branch Name" class="form-control"
                                    name="branch_name">
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


    <div class="container my-4 priceing">
        <div class="heading-essse">
            <p>DONATION AMOUNT</p>
        </div>
        <div class="row">
            <!-- Amount Buttons -->
            <div class="col-6 col-md-3 mb-3">
                <button class="amount-btn">Rs. 500</button>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <button class="amount-btn">Rs. 1000</button>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <button class="amount-btn">Rs. 2000</button>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <button class="amount-btn">Rs. 5000</button>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <button class="amount-btn">Rs. 10000</button>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <button class="amount-btn">Rs. 15000</button>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <button class="amount-btn">Rs. 20000</button>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <button class="amount-btn">Rs. 25000</button>
            </div>
            <div class="col-12 col-md-3 mb-3">
                <input type="text" class="custom-amount-input" placeholder="Custom Amount">
            </div>
        </div>

    </div>




    <div class="container my-4 eccomerce-card">
        <div class="heading-essse">
            <p>DONATE ESSENTIALS</p>
        </div>
        <div class="row">
            <!-- Product Item -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-3">
                <div class="product-card">
                    <img src="{{ asset('frontend/https://t4.ftcdn.net/jpg/02/76/80/31/360_F_276803150_yUZGcTLjJErZdmLw0GhDzARQY91S6yrv.jpg') }}"
                        alt="Medical Kit">
                    <h6>Medical Kit</h6>
                    <p>Rs. 1000 / Unit</p>
                    <div class="quantity-control">
                        <button class="qty-btn decrement">-</button>
                        <input type="text" class="qty-input2" value="0" readonly>
                        <button class="qty-btn increment">+</button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-3">
                <div class="product-card">
                    <img src="{{ asset('frontend/https://cdn.shopify.com/s/files/1/0064/8049/4659/files/IMG_9302_large.jpg?v=1549507915') }}"
                        alt="Bedsheets">
                    <h6>Bedsheets, Pillow & Mattress</h6>
                    <p>Rs. 400 / Unit</p>
                    <div class="quantity-control">
                        <button class="qty-btn decrement">-</button>
                        <input type="text" class="qty-input2" value="0" readonly>
                        <button class="qty-btn increment">+</button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-3">
                <div class="product-card">
                    <img src="{{ asset('frontend/https://www.playagainstallodds.ca/wp-content/uploads/2023/05/homeless-shelter.jpg') }}"
                        alt="Bed">
                    <h6>Bed</h6>
                    <p>Rs. 15000 / Unit</p>
                    <div class="quantity-control">
                        <button class="qty-btn decrement">-</button>
                        <input type="text" class="qty-input2" value="0" readonly>
                        <button class="qty-btn increment">+</button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-3">
                <div class="product-card">
                    <img src="{{ asset('frontend/https://www.shutterstock.com/image-illustration/empty-wood-cupboard-600nw-376839637.jpg') }}"
                        alt="Cupboard">
                    <h6>Cupboard</h6>
                    <p>Rs. 10000 / Unit</p>
                    <div class="quantity-control">
                        <button class="qty-btn decrement">-</button>
                        <input type="text" class="qty-input2" value="0" readonly>
                        <button class="qty-btn increment">+</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
@endpush