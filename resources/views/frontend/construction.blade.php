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
                            <h3 class="box-title"><a href="{{ route('donate.form') }}">Housing Development</a></h3>

                            <a href="{{ route('donate.form') }}" class="th-btn donate_btn">Donate Now<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-card style2">
                        <div class="box-thumb-cons">
                            <img src="{{ asset('frontend/assets/img/cunstruction/2.jpg') }}" alt="img">
                        </div>

                        <div class="box-content">
                            <h3 class="box-title"><a href="{{ route('donate.form') }}">Infrastructure for Villages</a></h3>

                            <a href="{{ route('donate.form') }}" class="th-btn donate_btn">Donate Now<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-card style2">
                        <div class="box-thumb-cons">
                            <img src="{{ asset('frontend/assets/img/cunstruction/3.jpg') }}" alt="img">
                        </div>

                        <div class="box-content">
                            <h3 class="box-title"><a href="{{ route('donate.form') }}">School Construction</a></h3>

                            <a href="{{ route('donate.form') }}" class="th-btn donate_btn">Donate Now<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-card style2">
                        <div class="box-thumb-cons">
                            <img src="{{ asset('frontend/assets/img/cunstruction/4.jpg') }}" alt="img">
                        </div>

                        <div class="box-content">
                            <h3 class="box-title"><a href="{{ route('donate.form') }}">Sanitation & Clean Water</a></h3>

                            <a href="{{ route('donate.form') }}" class="th-btn donate_btn">Donate Now<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-card style2">
                        <div class="box-thumb-cons">
                            <img src="{{ asset('frontend/assets/img/cunstruction/5.jpg') }}" alt="img">
                        </div>

                        <div class="box-content">
                            <h3 class="box-title"><a href="{{ route('donate.form') }}">Healthcare Centers</a></h3>

                            <a href="{{ route('donate.form') }}" class="th-btn donate_btn">Donate Now<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-card style2">
                        <div class="box-thumb-cons">
                            <img src="https://fmswelfaretrust.org/img/img-42.jpg" alt="img">
                        </div>

                        <div class="box-content">
                            <h3 class="box-title"><a href="{{ route('donate.form') }}">Emergency Shelter Relief</a></h3>

                            <a href="{{ route('donate.form') }}" class="th-btn donate_btn">Donate Now<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-card style2">
                        <div class="box-thumb-cons">
                            <img src="https://fmswelfaretrust.org/img/img-40.jpg" alt="img">
                        </div>

                        <div class="box-content">
                            <h3 class="box-title"><a href="{{ route('donate.form') }}">Community Halls</a></h3>

                            <a href="{{ route('donate.form') }}" class="th-btn donate_btn">Donate Now<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-card style2">
                        <div class="box-thumb-cons">
                            <img src="https://fmswelfaretrust.org/img/img-44.jpg" alt="img">
                        </div>

                        <div class="box-content">
                            <h3 class="box-title"><a href="{{ route('donate.form') }}">Road & Bridge Construction</a></h3>

                            <a href="{{ route('donate.form') }}" class="th-btn donate_btn">Donate Now<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

@endsection
@push('js')
@endpush