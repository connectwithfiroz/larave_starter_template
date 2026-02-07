@extends('frontend.layouts.app')

@section('title', 'Our Team')

@push('header')
<!-- extra header -->
@endpush

@section('section')

    
    <!-- new sections -->
 <div class="breadcumb-wrapper position-relative">

    <!-- Desktop / Tablet Image -->
    <div class="d-none d-md-block">
        <img src="{{ asset('frontend/assets/img/new_2026/Our_Team_Member.png') }}"
             class="img-fluid w-100"
             alt="About Banner Desktop">
    </div>

    <!-- Mobile Image -->
    <div class="d-block d-md-none">
        <img src="{{ asset('frontend/assets/img/mobile-imag/team.png') }}"
             class="img-fluid w-100"
             alt="About Banner Mobile">
    </div>

    <!-- Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

    <!-- Content -->
    <div class="container position-absolute top-50 start-50 translate-middle text-center"
     style="color: #c70c52;">
        <h1 class="breadcumb-title">Our Team</h1>
        <ul class="breadcumb-menu list-inline mb-0">
            <li class="list-inline-item"><a href="/index" class="text-white">Home</a></li>
            <li class="list-inline-item">Our Team</li>
        </ul>
    </div>
</div>
<!-- main section -->
<section class="space" id="team-sec">
 <div class="overflow-hidden space py-3">
    <div class="container mt-4">
        <div class="row gy-3 gx-3 justify-content-center">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 filter-item">
                <div class="Volentior-card">
                    <div class="Volentior-img">
                    <img src="{{ asset('frontend/assets/img/team/laxmi.jpeg') }}" alt="Team" class="img-fluid w-100 responsive-img">
                    </div>
                    <div class=text-center>
                    <h6>Laxmi Kumari</h6>
                    <h6>(Team Leader)</h6>
                    <h6>Al Khair Educational & Charitable Trust</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 filter-item">
                <div class="Volentior-card">
                    <div class="Volentior-img">
                    <img src="{{ asset('frontend/assets/img/team/tarif-khan.jpeg') }}" alt="Team" alt="Volentior image" class="img-fluid w-100 responsive-img">
                    </div>
                    <div class=text-center>
                    <h6>Tarif Khan</h6>
                    <h6>(Associate)</h6>
                    <h6>Al Khair Educational & Charitable Trust</h6>
                    </div>
                </div>
            </div>
            <!-- <div class="col-12 col-sm-6 col-md-6 col-lg-3 filter-item">
                <div class="Volentior-card">
                    <div class="Volentior-img">
                    <img src="{{ asset('frontend/assets/img/volentior/youraj-img.jpeg') }}" alt="Team" alt="Volentior image" class="img-fluid w-100 responsive-img">
                    </div>
                    <div class=text-center>
                    <h6>Youraj Chauhan </h6>
                    <h6>(IT Team Support)</h6>
                    <h6>Al Khair Educational & Charitable Trust</h6>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-12 col-sm-6 col-md-6 col-lg-3 filter-item">
                <div class="Volentior-card">
                    <div class="Volentior-img">
                    <img src="{{ asset('frontend/assets/img/volentior/hemant.jpeg') }}" alt="Team" alt="Volentior image" class="img-fluid w-100 responsive-img">
                    </div>
                    <div class=text-center>
                    <h6>Hemant Jangid </h6>
                    <h6>(IT Team Support)</h6>
                    <h6>Al Khair Educational & Charitable Trust</h6>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>

@endsection
@push('js')
@endpush 