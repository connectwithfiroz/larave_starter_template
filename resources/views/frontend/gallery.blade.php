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
                <h1 class="breadcumb-title">Our Gallery</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index">Home</a></li>
                    <li>Our Gallery</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
    Contact Area   
    ==============================-->
    <div class="overflow-hidden space">
        <div class="container">
            <div class="row gy-30 gx-30 filter-active">
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/119.jpeg') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/119.jpeg') }}" class="icon-btn popup-image"><i
                                    class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/120.jpeg') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/120.jpeg') }}" class="icon-btn popup-image"><i
                                    class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/1.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/1.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/2.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/2.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/3.jpeg') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/3.jpeg') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/4.jpeg') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/4.jpeg') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/5.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/5.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/6.jpeg') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/6.jpeg') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div> 
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/7.jpeg') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/7.jpeg') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/8.jpeg') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/8.jpeg') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/9.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/9.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/11.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/11.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/12.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/12.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/13.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/13.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/14.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/14.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/15.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/15.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/16.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/16.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/17.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/17.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/18.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/18.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/19.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/19.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/20.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/20.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/21.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/21.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/22.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/22.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/23.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/23.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/24.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/24.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/25.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/25.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/27.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/27.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/28.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/28.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/29.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/29.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/30.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/30.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/31.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/31.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/32.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/32.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/33.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/33.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/34.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/34.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/35.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/35.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/36.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/36.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/37.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/37.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/38.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/38.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/39.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/39.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/42.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/42.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/40.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/40.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/41.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/41.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/42.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/42.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/45.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/45.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/46.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/46.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/47.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/47.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/48.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/48.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/49.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/49.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/50.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/50.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/51.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/51.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/52.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/52.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/53.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/53.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/54.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/54.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/55.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/55.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/56.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/56.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/57.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/57.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/58.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/58.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('frontend/assets/img/gallery/59.webp') }}" alt="gallery image">
                            <a href="{{ asset('frontend/assets/img/gallery/59.webp') }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
@push('js')
@endpush