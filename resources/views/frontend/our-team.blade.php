@extends('frontend.layouts.app')

@section('title', 'Our Team')

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
                <h1 class="breadcumb-title">Our Team Member</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/index">Home</a></li>
                    <li>Our Team Member</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Contact Area   
==============================-->
<section class="space" id="team-sec">
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title">Meet The Team Member</h2>
        </div>
        <div class="row gy-40">
            <!-- Single Item -->
            <div class="col-lg-3 col-md-6">
                <div class="th-team team-card3">
                    <div class="team-img">
                        <img src="{{ asset('frontend/assets/img/team/team_3_1.png') }}" alt="Team">
                    </div>
                    <div class="team-card-content">
                        <h3 class="box-title"><a href="team-details">Habib</a></h3>
                                <span class="team-desig">(Member)</span>
                                <p>Al Khair Educational & Charitable Trust</p>
                    </div>
                </div>
            </div>

            <!-- Single Item -->
            <div class="col-lg-3 col-md-6">
                <div class="th-team team-card3">
                    <div class="team-img">
                        <img src="{{ asset('frontend/assets/img/team/team_3_2.png') }}" alt="Team">
                    </div>
                    <div class="team-card-content">
                        <h3 class="box-title"><a href="team-details">Ataullah Khan</a></h3>
                        <span class="team-desig">(Member)</span>
                        <p>Al Khair Educational & Charitable Trust</p>
                    </div>
                </div>
            </div>

            <!-- Single Item -->
            <div class="col-lg-3 col-md-6">
                <div class="th-team team-card3">
                    <div class="team-img">
                        <img src="{{ asset('frontend/assets/img/team/team_3_3.png') }}" alt="Team">
                    </div>
                    <div class="team-card-content">
                        <h3 class="box-title"><a href="team-details">Shokat Ali</a></h3>
                                <span class="team-desig">(Member)</span>
                                <p>Al Khair Educational & Charitable Trust</p>
                    </div>
                </div>
            </div>

            <!-- Single Item -->
            <div class="col-lg-3 col-md-6">
                <div class="th-team team-card3">
                    <div class="team-img">
                        <img src="{{ asset('frontend/assets/img/team/team_3_4.png') }}" alt="Team">
                    </div>
                    <div class="team-card-content">
                        <h3 class="box-title"><a href="team-details">Harbir Gujjar</a></h3>
                                <span class="team-desig">(Member)</span>
                                <p>Al Khair Educational & Charitable Trust</p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<div class="container mt-4 footer-mission">
    <div class="row align-items-center text-center">
        <!-- Contact Button -->
        <div class="col-md-4">
            <a href="/contact" class="contact-btn">Contact Us Now <i class="fas fa-arrow-right"></i></a>
        </div>

        <!-- Social Media Text -->
        <div class="col-md-4">
            <p class="social-text">Follow Us On Social Media</p>
        </div>

        <!-- Social Media Icons -->
        <div class="col-md-4">
            <div class="social-icons">
                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
@endpush