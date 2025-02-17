@extends('frontend.layouts.app')

@section('title', 'Management Body')

@push('header')
<!-- extra header -->
@endpush

@section('section')



    <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.webp" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Our Management Body</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Our Management Body</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Contact Area   
==============================-->
   
<section class="space" id="team-sec" data-bg-src="assets/img/bg/gray-bg2.png">
    <div class="shape-mockup team-bg-shape3-1 d-xxl-block d-none" data-top="0%" data-left="0%" data-bottom="0"><img src="assets/img/shape/team_bg_shape3_1.png" alt="img"></div>
    <div class="shape-mockup team-bg-shape3-2 d-xxl-block d-none" data-top="0%" data-right="0%" data-bottom="0"><img src="assets/img/shape/team_bg_shape3_2.png" alt="img"></div>
    <div class="shape-mockup team-bg-shape3-3 spin d-xxl-block d-none" data-top="15%" data-left="20%">
        <div class="color-masking2">
            <div class="masking-src" data-mask-src="assets/img/shape/team_bg_shape3_3.png"></div>
            <img src="assets/img/shape/team_bg_shape3_3.png" alt="img">
        </div>
    </div>
    <div class="shape-mockup team-bg-shape3-4 jump d-xxl-block d-none" data-top="18%" data-right="10%">
        <img src="assets/img/shape/team_bg_shape3_4.png" alt="img">
    </div>
    <div class="shape-mockup team-bg-shape3-5 spin d-xxl-block d-none" data-bottom="18%" data-left="10%">
        <img src="assets/img/shape/team_bg_shape3_5.png" alt="img">
    </div>
    <div class="shape-mockup team-bg-shape3-6 spin d-xxl-block d-none" data-bottom="10%" data-right="10%">
        <div class="color-masking">
            <div class="masking-src" data-mask-src="assets/img/shape/team_bg_shape3_6.png"></div>
            <img src="assets/img/shape/team_bg_shape3_6.png" alt="img">
        </div>
    </div>
    <div class="container">
        <div class="title-area text-center">
          
            <h2 class="sec-title">Our Management Body</h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="teamSlider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card3">
                            <div class="team-img">
                                <img src="assets/img/volentior/1.1.webp" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Parvej Akhtar</a></h3>
                                <span class="team-desig">(Founder)</span>
                                <p>Al Khair Educational & Charitable Trust</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card3">
                            <div class="team-img">
                                <img src="assets/img/volentior/3.webp" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Mohammad Sazid</a></h3>
                                <span class="team-desig">(Secretary)</span>
                                <p>Al Khair Educational & Charitable Trust</p>
                            
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card3">
                            <div class="team-img">
                                <img src="assets/img/volentior/1.webp" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Zakir Hussain</a></h3>
                                <span class="team-desig">(Joint Secretary)</span>
                                <p>Al Khair Educational & Charitable Trust</p>
                         
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card3">
                            <div class="team-img">
                                <img src="assets/img/volentior/4.webp" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Arshad Hussain</a></h3>
                                <span class="team-desig">(Treasurer)</span>
                                <p>Al Khair Educational & Charitable Trust</p>
                           
                            </div>
                        </div>
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
            <a href="contact.html" class="contact-btn">Contact Us Now <i class="fas fa-arrow-right"></i></a>
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