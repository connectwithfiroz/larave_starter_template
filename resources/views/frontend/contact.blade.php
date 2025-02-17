@extends('frontend.layouts.app')

@section('title', 'Contact Us')

@push('header')
<!-- extra header -->
@endpush

@section('section')

    <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend/assets/img/bg/breadcumb-bg.webp') }}" data-overlay="theme">
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
                            <iframe src="{{ asset('frontend/https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d225807.442511373!2d76.84426140963349!3d27.833115754676694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3972c52d5b396c53%3A0x6a7c01d4188b8649!2sFirozpur%20Jhirka%2C%20Haryana!5e0!3m2!1sen!2sin!4v1739298434854!5m2!1sen!2sin') }}" allowfullscreen="" loading="lazy"></iframe>
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
                            <form action="mail.php" method="POST" class="contact-form style-border ajax-contact">
                                <div class="row">
                                    <div class="form-group style-border col-12">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                    </div>
                                    <div class="form-group style-border col-12">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                                    </div>
                                    <div class="form-group style-border col-12">
                                        <input type="number" class="form-control" name="number" id="number" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group style-border col-12">
                                        <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Type Your Message"></textarea>
                                    </div>
                                    <div class="form-btn col-12">
                                        <button class="th-btn">Send a Message</button>
                                    </div>
                                </div>
                                <p class="form-messages mb-0 mt-3"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush