@extends('frontend.layouts.app')

@section('title', 'Contact Us')

@push('header')
    <!-- extra header -->
@endpush

@section('section')

    <!--==============================
            Breadcumb
        ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend/assets/img/bg/breadcumb-bg.webp') }}"
        data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact us</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
        Contact Area   
        ==============================-->
    <div class="space overflow-hidden contact-area-1 position-relative z-index-common">
        <div class="container">
            <div class="contact-wrap1">
                <div class="row gx-60 gy-40">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-feature">
                            <div class="box-icon">
                                <i class="fas fa-map-location-dot"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Address</h3>
                                <p class="box-text">
                                    Village Chak Rangala Tehsil.
                                    Ferozepur Jhirka District.
                                    Nuh State. Haryana
                                </p>
                            </div>
                        </div>
                        <div class="contact-feature">
                            <div class="box-icon" data-theme-color="#FFAC00">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Phone</h3>
                                <p class="box-text"><a href="tel:16363599852">+91 82210 00658</a></p>
                                <p class="box-text"><a href="tel:16363599852">+91 82210 00658</a></p>
                            </div>
                        </div>
                        <div class="contact-feature">
                            <div class="box-icon" data-theme-color="#122F2A">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Email</h3>
                                <p class="box-text"><a href="mailto:info@donet.com">alkhairtrust658@gmail.com</a></p>

                            </div>
                        </div>
                        <div class="contact-feature" data-theme-color="#FF5528">
                            <div class="box-icon">
                                <i class="fas fa-comment-question"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Have Questions?</h3>
                                <p class="box-text">Discover more by visiting us or joining our community</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d225807.442511373!2d76.84426140963349!3d27.833115754676694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3972c52d5b396c53%3A0x6a7c01d4188b8649!2sFirozpur%20Jhirka%2C%20Haryana!5e0!3m2!1sen!2sin!4v1739298434854!5m2!1sen!2sin'"
                                allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-page-form-wrap space-top">
                <div class="row gy-40">
                    <div class="col-xl-6 align-self-end">
                        <div class="contact-thumb1-1">
                            <img src="{{ asset('frontend/assets/img/donatie-contact.webp') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <!--==============================
        Contact Area  
        ==============================-->
                        <div class="contact-form-v1 contact-page-form">
                            <form action="{{ route('contact.send') }}" method="POST" class="contact-form style-border ">
                                @csrf
                                <div class="row">
                                    {{-- Name Field --}}
                                    <div class="form-group style-border col-12">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" id="name" placeholder="Enter your full name"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    {{-- Email Field --}}
                                    <div class="form-group style-border col-12">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" id="email" placeholder="Enter your email"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    {{-- Phone Number Field --}}
                                    <div class="form-group style-border col-12">
                                        <label for="number">Phone Number</label>
                                        <input type="text" class="form-control @error('number') is-invalid @enderror"
                                            name="number" id="number" placeholder="Enter your phone number"
                                            value="{{ old('number') }}">
                                        @error('number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    {{-- Message Field --}}
                                    <div class="form-group style-border col-12">
                                        <label for="message">Your Message</label>
                                        <textarea name="message" id="message" cols="30" rows="3"
                                            class="form-control @error('message') is-invalid @enderror"
                                            placeholder="Type your message here">{{ old('message') }}</textarea>
                                        @error('message')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    {{-- Submit Button --}}
                                    <div class="form-btn col-12">
                                        <button type="submit" class="th-btn">Send a Message</button>
                                    </div>
                                </div>
                            </form>

                            {{-- Display Success Message --}}
                            @if(session('success'))
                                <p class="text-success mt-3">{{ session('success') }}</p>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush