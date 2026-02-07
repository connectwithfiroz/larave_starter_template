@extends('frontend.layouts.app')

@section('title', 'Construction')

@push('header')
    <!-- extra header -->
@endpush

@section('section')


   <!-- new sections -->
 <div class="breadcumb-wrapper position-relative">

    <!-- Desktop / Tablet Image -->
    <div class="d-none d-md-block">
        <img src="{{ asset('frontend/assets/img/banner-26-jan/Our_Constructions_Projects.png') }}"
             class="img-fluid w-100"
             alt="About Banner Desktop">
    </div>

    <!-- Mobile Image -->
    <div class="d-block d-md-none">
        <img src="{{ asset('frontend/assets/img/mobile-imag/construction.png') }}"
             class="img-fluid w-100"
             alt="About Banner Mobile">
    </div>

    <!-- Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

    <!-- Content -->
    <div class="container position-absolute top-50 start-50 translate-middle text-center text-white">
        <h1 class="breadcumb-title">Our Construction</h1>
        <ul class="breadcumb-menu list-inline mb-0">
            <li class="list-inline-item"><a href="/index" class="text-white">Home</a></li>
            <li class="list-inline-item">Our Construction</li>
        </ul>
    </div>

</div>


      <!-- new sections -->
 <div class="breadcumb-wrapper position-relative">

    <!-- Desktop / Tablet Image -->
    <div class="d-none d-md-block">
        <img src="{{ asset('frontend/assets/img/banner-26-jan/Our_Constructions_Projects.png') }}"
             class="img-fluid w-100"
             alt="About Banner Desktop">
    </div>

    <!-- Mobile Image -->
    <div class="d-block d-md-none">
        <img src="{{ asset('frontend/assets/img/mobile-imag/constrution.png') }}"
             class="img-fluid w-100"
             alt="About Banner Mobile">
    </div>

    <!-- Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

    <!-- Content -->
    <div class="container position-absolute top-50 start-50 translate-middle text-center"
     style="color: #c70c52;">
        <h1 class="breadcumb-title">Bload Donation</h1>
        <ul class="breadcumb-menu list-inline mb-0">
            <li class="list-inline-item"><a href="/index" class="text-white">Home</a></li>
            <li class="list-inline-item">Bload Donation</li>
        </ul>
    </div>

</div>
<!-- New section -->

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