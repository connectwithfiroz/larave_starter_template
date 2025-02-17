@extends('frontend.layouts.app')

@section('title', 'Home Page')

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
                <h1 class="breadcumb-title">Our Project</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/index">Home</a></li>
                    <li>Our Project</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
    Contact Area   
    ==============================-->
    <div class="container mt-5">
        <div class="project-container">
            <!-- Cards will be generated here -->
        </div>
    </div>

    <!-- Modals Will be Generated Here -->
    <div id="modals-container"></div>

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