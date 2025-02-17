@extends('frontend.layouts.app')

@section('title', 'Construction')

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
                <h1 class="breadcumb-title">Our Construction Projects</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Our Construction Projects</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
    Contact Area   
    ==============================-->


    <section class="overflow-hidden space" id="service-sec" data-bg-src="{{ asset('frontend/assets/img/bg/gray-bg1.png') }}" data-overlay="gray"
        data-opacity="6">


        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="title-area text-center">
                        <span class="sub-title after-none before-none">Charity Services</span>
                        <h2 class="sec-title">Building a Better Future
                            Through Construction & Development</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30 gx-30 justify-content-center">
                <div class="col-xl-3 col-md-6">
                    <div class="service-card style2">
                        <div class="box-thumb-cons">
                            <img src="{{ asset('frontend/assets/img/cunstruction/1.jpg') }}" alt="img">
                        </div>

                        <div class="box-content">
                            <h3 class="box-title"><a href="dontaion.html">Housing Development</a></h3>

                            <a href="dontaion.html" class="th-btn">Donate Now<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-card style2">
                        <div class="box-thumb-cons">
                            <img src="{{ asset('frontend/assets/img/cunstruction/2.jpg') }}" alt="img">
                        </div>

                        <div class="box-content">
                            <h3 class="box-title"><a href="dontaion.html">Infrastructure for Villages</a></h3>

                            <a href="dontaion.html" class="th-btn">Donate Now<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-card style2">
                        <div class="box-thumb-cons">
                            <img src="{{ asset('frontend/assets/img/cunstruction/3.jpg') }}" alt="img">
                        </div>

                        <div class="box-content">
                            <h3 class="box-title"><a href="dontaion.html">School Construction</a></h3>

                            <a href="dontaion.html" class="th-btn">Donate Now<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-card style2">
                        <div class="box-thumb-cons">
                            <img src="{{ asset('frontend/assets/img/cunstruction/4.jpg') }}" alt="img">
                        </div>

                        <div class="box-content">
                            <h3 class="box-title"><a href="dontaion.html">Sanitation & Clean Water</a></h3>

                            <a href="dontaion.html" class="th-btn">Donate Now<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-card style2">
                        <div class="box-thumb-cons">
                            <img src="{{ asset('frontend/assets/img/cunstruction/5.jpg') }}" alt="img">
                        </div>

                        <div class="box-content">
                            <h3 class="box-title"><a href="dontaion.html">Healthcare Centers</a></h3>

                            <a href="dontaion.html" class="th-btn">Donate Now<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-card style2">
                        <div class="box-thumb-cons">
                            <img src="{{ asset('frontend/https://fmswelfaretrust.org/img/img-42.jpg') }}" alt="img">
                        </div>

                        <div class="box-content">
                            <h3 class="box-title"><a href="dontaion.html">Emergency Shelter Relief</a></h3>

                            <a href="dontaion.html" class="th-btn">Donate Now<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-card style2">
                        <div class="box-thumb-cons">
                            <img src="{{ asset('frontend/https://fmswelfaretrust.org/img/img-40.jpg') }}" alt="img">
                        </div>

                        <div class="box-content">
                            <h3 class="box-title"><a href="dontaion.html">Community Halls</a></h3>

                            <a href="dontaion.html" class="th-btn">Donate Now<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-card style2">
                        <div class="box-thumb-cons">
                            <img src="{{ asset('frontend/https://fmswelfaretrust.org/img/img-44.jpg') }}" alt="img">
                        </div>

                        <div class="box-content">
                            <h3 class="box-title"><a href="dontaion.html">Road & Bridge Construction</a></h3>

                            <a href="dontaion.html" class="th-btn">Donate Now<i class="fas fa-arrow-up-right ms-2"></i></a>
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
                <a href="#" class="contact-btn">Contact Us Now <i class="fas fa-arrow-right"></i></a>
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