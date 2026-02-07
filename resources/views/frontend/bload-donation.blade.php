@extends('frontend.layouts.app')

@section('title', 'bload-donation')

@push('header')
    <!-- extra header -->
@endpush

@section('section')

    
    <!-- new sections -->
 <div class="breadcumb-wrapper position-relative">

    <!-- Desktop / Tablet Image -->
    <div class="d-none d-md-block">
        <img src="{{ asset('frontend/assets/img/banner-26-jan/Bload_Donation.png') }}"
             class="img-fluid w-100"
             alt="About Banner Desktop">
    </div>

    <!-- Mobile Image -->
    <div class="d-block d-md-none">
        <img src="{{ asset('frontend/assets/img/mobile-imag/blod.png') }}"
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
<!-- main containt -->
    <div class="overflow-hidden space">
        <div class="container">
            <div class="row gy-30 gx-30 filter-active">
                <!-- <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/119.jpeg') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/119.jpeg') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>

                    </div>
                </div> -->
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/bload-donation/9.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/bload-donation/9.webp') }}" class="icon-btn popup-image"><i
                                    class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/bload-donation/10.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/bload-donation/10.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/bload-donation/11.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/bload-donation/11.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/bload-donation/13.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/bload-donation/13.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
@push('js')
@endpush