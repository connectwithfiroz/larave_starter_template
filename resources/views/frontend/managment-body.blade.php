@extends('frontend.layouts.app')

@section('title', 'Management Body')

@push('header')
<!-- extra header -->
@endpush

@section('section')

  <!-- new sections -->
 <div class="breadcumb-wrapper position-relative">

    <!-- Desktop / Tablet Image -->
    <div class="d-none d-md-block">
        <img src="{{ asset('frontend/assets/img/new_2026/Our_Management.png') }}"
             class="img-fluid w-100"
             alt="About Banner Desktop">
    </div>

    <!-- Mobile Image -->
    <div class="d-block d-md-none">
        <img src="{{ asset('frontend/assets/img/mobile-imag/managemnt.png') }}"
             class="img-fluid w-100"
             alt="About Banner Mobile">
    </div>

    <!-- Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

    <!-- Content -->
    <div class="container position-absolute top-50 start-50 translate-middle text-center"
     style="color: #c70c52;">
        <h1 class="breadcumb-title">Our Management</h1>
        <ul class="breadcumb-menu list-inline mb-0">
            <li class="list-inline-item"><a href="/index" class="text-white">Home</a></li>
            <li class="list-inline-item">Our Management</li>
        </ul>
    </div>
</div>
   <!-- main containt -->

    <div class="overflow-hidden space py-3">
    <div class="container mt-4">
        <div class="row gy-3 gx-3 justify-content-center">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 filter-item">
                <div class="Volentior-card">
                    <div class="Volentior-img">
                        <img src="{{ asset('frontend/assets/img/volentior/1.1.webp') }}" alt="Volentior image" class="img-fluid w-100 responsive-img">
                    </div>
                    <div class=text-center>
                    <h6>Parvej Akhtar<br/>Founder</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 filter-item">
                <div class="Volentior-card">
                    <div class="Volentior-img">
                        <img src="{{ asset('frontend/assets/img/volentior/shahin-b.jpeg') }}" alt="Volentior image" class="img-fluid w-100 responsive-img">
                    </div>
                    <div class=text-center>
                    <h6>Shahin Salaar<br/>C.E.O</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 filter-item">
                <div class="Volentior-card">
                    <div class="Volentior-img">
                        <img src="{{ asset('frontend/assets/img/volentior/1.webp') }}" alt="Volentior image" class="img-fluid w-100 responsive-img">
                    </div>
                    <div class=text-center>
                    <h6>Zakir Hussain<br/>Joint Secreatry</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 filter-item">
                <div class="Volentior-card">
                    <div class="Volentior-img">
                        <img src="{{ asset('frontend/assets/img/volentior/2.webp') }}" alt="Volentior image" class="img-fluid w-100 responsive-img">
                    </div>
                    <div class=text-center>
                    <h6>Mohammad Sazid<br/>Secreatry</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 filter-item">
                <div class="Volentior-card">
                    <div class="Volentior-img">
                        <img src="{{ asset('frontend/assets/img/volentior/4.webp') }}" alt="Volentior image" class="img-fluid w-100 responsive-img">
                    </div>
                    <div class=text-center>
                    <h6>Arshad Hussain<br/>Treasurer</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 filter-item">
                <div class="Volentior-card">
                    <div class="Volentior-img">
                    <img src="{{ asset('frontend/assets/img/volentior/3.webp') }}" alt="volentior image" class="img-fluid w-100 responsive-img">
                    </div>
                    <div class=text-center>
                    <h6>Shokat Ali<br/>Membar</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 filter-item">
                <div class="Volentior-card">
                    <div class="Volentior-img">
                    <img src="{{ asset('frontend/assets/img/team/team_1_1.png') }}" alt="Volentior image"  class="img-fluid w-100 responsive-img">
                    </div>
                    <div class=text-center>
                    <h6>Habib Alam<br/>Membar</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 filter-item">
                <div class="Volentior-card">
                    <div class="Volentior-img">
                    <img src="{{ asset('frontend/assets/img/team/team_1_1.png') }}" alt="Volentior image"  class="img-fluid w-100 responsive-img">
                    </div>
                    <div class=text-center>
                    <h6>Ataullah Khan<br/>Membar</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 filter-item">
                <div class="Volentior-card">
                    <div class="Volentior-img">
                    <img src="{{ asset('frontend/assets/img/team/team_1_2.png') }}" alt="Volentior image"  class="img-fluid w-100 responsive-img">
                    </div>
                    <div class=text-center>
                    <h6>Abdullah<br/>Membar</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
@push('js')
@endpush