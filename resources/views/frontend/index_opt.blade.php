@extends('frontend.layouts.app')

@section('title', 'Home Page')

@push('header')
    <!-- extra header -->
@endpush

@section('section')
    <!--============================== Hero Area ==============================-->
    <div class="th-hero-wrapper hero-1" id="hero">
        <div class="swiper th-slider hero-slider1" id="heroSlide1"
            data-slider-options='{"effect":"fade", "autoHeight": "true"}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner" data-bg-src="{{ asset('frontend/assets/img/banner/banner-a.jpeg') }}"
                        data-overlay="black4" data-opacity="5">
                        <!-- <div class="hero-bg-shape1-1">
                            <img src="{{ asset('frontend/assets/img/hero/hero-bg-shape1-1.png') }}" alt="img">
                        </div> -->
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <div class="hero-style1 text-center">
                                        <span class="sub-title justify-content-center" data-ani="slideinup"
                                            data-ani-delay="0.2s">Welcome to Al Khair Educational</span>
                                        <!-- <h1 class="hero-title text-white">
                                            <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                                Together We Can Bring Hope </span>
                                            <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                                Your Support Changes Lives </span>
                                        </h1> -->
                                        <div class="btn-wrap justify-content-center" data-ani="slideinup"
                                            data-ani-delay="0.7s">
                                            <a href="contact.html" class="th-btn donate_btn style4">Donate Now <i
                                                    class="fas fa-arrow-up-right ms-2"></i></a>
                                            <a href="https://www.youtube.com/watch?v=H1oGWXHgHSM"
                                                class="th-btn style5 popup-video"><i
                                                    class="fas fa-play me-2"></i> Watch Video</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="hero-inner" data-bg-src="{{ asset('frontend/assets/img/banner/card-1.jpeg') }}"
                        data-overlay="black4" data-opacity="5">
                        <!-- <div class="hero-bg-shape1-1">
                            <img src="{{ asset('frontend/assets/img/hero/hero-bg-shape1-1.png') }}" alt="img">
                        </div> -->
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <div class="hero-style1 text-center">
                                        <span class="sub-title justify-content-center" data-ani="slideinup"
                                            data-ani-delay="0.2s">Welcome to Al Khair Educational</span>
                                        <!-- <h1 class="hero-title text-white">
                                            <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                                Your Gift Can Change Lives </span>
                                            <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                                Donate Today, Impact Tomorrow </span>
                                        </h1> -->
                                        <div class="btn-wrap justify-content-center" data-ani="slideinup"
                                            data-ani-delay="0.7s">
                                            <a href="contact.html" class="th-btn donate_btn style4">Donate Now <i
                                                    class="fas fa-arrow-up-right ms-2"></i></a>
                                            <a href="https://www.youtube.com/watch?v=H1oGWXHgHSM"
                                                class="th-btn donate_btn style5 popup-video"><i
                                                    class="fas fa-play me-2"></i> Watch Video</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner" data-bg-src="{{ asset('frontend/assets/img/banner/card-2.jpeg') }}"
                        data-overlay="black4" data-opacity="5">
                        <!-- <div class="hero-bg-shape1-1">
                            <img src="{{ asset('frontend/assets/img/hero/hero-bg-shape1-1.png') }}" alt="img">
                        </div> -->
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <div class="hero-style1 text-center">
                                        <span class="sub-title justify-content-center" data-ani="slideinup"
                                            data-ani-delay="0.2s">Welcome to Al Khair Educational</span>
                                        <!-- <h1 class="hero-title text-white">
                                            <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                                Your Gift Can Change Lives </span>
                                            <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                                Donate Today, Impact Tomorrow </span>
                                        </h1> -->
                                        <div class="btn-wrap justify-content-center" data-ani="slideinup"
                                            data-ani-delay="0.7s">
                                            <a href="contact.html" class="th-btn donate_btn style4">Donate Now <i
                                                    class="fas fa-arrow-up-right ms-2"></i></a>
                                            <a href="https://www.youtube.com/watch?v=H1oGWXHgHSM"
                                                class="th-btn donate_btn style5 popup-video"><i
                                                    class="fas fa-play me-2"></i> Watch Video</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="hero-inner" data-bg-src="{{ asset('frontend/assets/img/banner/card-3.jpeg') }}"
                        data-overlay="black4" data-opacity="5">
                        <!-- <div class="hero-bg-shape1-1">
                            <img src="{{ asset('frontend/assets/img/hero/hero-bg-shape1-1.png') }}" alt="img">
                        </div> -->
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <div class="hero-style1 text-center">
                                        <span class="sub-title justify-content-center" data-ani="slideinup"
                                            data-ani-delay="0.2s">Welcome to Al Khair Educational</span>
                                        <!-- <h1 class="hero-title text-white">
                                            <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                                Your Gift Can Change Lives </span>
                                            <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                                Donate Today, Impact Tomorrow </span>
                                        </h1> -->
                                        <div class="btn-wrap justify-content-center" data-ani="slideinup"
                                            data-ani-delay="0.7s">
                                            <a href="contact.html" class="th-btn donate_btn style4">Donate Now <i
                                                    class="fas fa-arrow-up-right ms-2"></i></a>
                                            <a href="https://www.youtube.com/watch?v=H1oGWXHgHSM"
                                                class="th-btn donate_btn style5 popup-video"><i
                                                    class="fas fa-play me-2"></i> Watch Video</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner" data-bg-src="{{ asset('frontend/assets/img/banner/card-4.jpeg') }}"
                        data-overlay="black4" data-opacity="5">
                        <!-- <div class="hero-bg-shape1-1">
                            <img src="{{ asset('frontend/assets/img/hero/hero-bg-shape1-1.png') }}" alt="img">
                        </div> -->
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <div class="hero-style1 text-center">
                                        <span class="sub-title justify-content-center" data-ani="slideinup"
                                            data-ani-delay="0.2s">Welcome to Al Khair Educational</span>
                                        <!-- <h1 class="hero-title text-white">
                                            <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                                Your Gift Can Change Lives </span>
                                            <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                                Donate Today, Impact Tomorrow </span>
                                        </h1> -->
                                        <div class="btn-wrap justify-content-center" data-ani="slideinup"
                                            data-ani-delay="0.7s">
                                            <a href="contact.html" class="th-btn donate_btn style4">Donate Now <i
                                                    class="fas fa-arrow-up-right ms-2"></i></a>
                                            <a href="https://www.youtube.com/watch?v=H1oGWXHgHSM"
                                                class="th-btn donate_btn style5 popup-video"><i
                                                    class="fas fa-play me-2"></i> Watch Video</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                </div>
            </div>
        </div>
    </div>
    <!--======== / Hero Section ========-->


    <section class="feature-area-1 position-relative space-bottom">
        <div class="feature-bg-wrap" data-bg-src="{{ asset('frontend/assets/img/bg/gray-bg2.png') }}"
            data-mask-src="{{ asset('frontend/assets/img/bg/feature-bg-mask-1.webp') }}">
            <div class="feature-bg-shape1-1"></div>
        </div>
        <div class="container">
            <div class="row gy-30 gx-30">
                <div class="col-xl-3 col-lg-4 d-none">
                    <div class="feature-card">
                        <div class="feature-card-bg-shape">
                            <img src="{{ asset('frontend/assets/img/shape/feature-card-bg-shape1-1.png') }}" alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('frontend/assets/img/press-pass.webp') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Generate ID Card</h3>
                        <a class="link-btn style2" href="about.html">View Details <i
                                class="fa-solid fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 d-none">
                    <div class="feature-card">
                        <div class="feature-card-bg-shape">
                            <img src="{{ asset('frontend/assets/img/shape/feature-card-bg-shape1-1.png') }}" alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('frontend/assets/img/email.webp') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Appointment Letter</h3>
                        <a class="link-btn style2" href="about.html">View Details <i
                                class="fa-solid fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4  d-none">
                    <div class="feature-card">
                        <div class="feature-card-bg-shape">
                            <img src="{{ asset('frontend/assets/img/shape/feature-card-bg-shape1-1.png') }}" alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('frontend/assets/img/certificate.webp') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Generate Certificate</h3>
                        <a class="link-btn style2" href="about.html">View Details <i
                                class="fa-solid fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-bg-shape">
                            <img src="{{ asset('frontend/assets/img/shape/feature-card-bg-shape1-1.png') }}" alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('frontend/assets/img/donation.webp') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Donate Us</h3>
                        <a class="link-btn style2 donate_btn" href="/donate">View Details <i
                                class="fa-solid fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
                <!-- donation id search -->
                <div class="col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-bg-shape">
                            <img src="{{ asset('frontend/assets/img/shape/feature-card-bg-shape1-1.png') }}" alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('frontend/assets/img/certificate.webp') }}" alt="icon">
                        </div>
                        <!-- Inline Search Form -->
                        <form action="{{ route('donations.search.post') }}" method="GET"
                            class="d-flex justify-content-center">
                            <input type="text" name="donation_id" class="form-control p-1 border border-primary"
                                placeholder="Enter Donation ID" required>
                            <button type="submit" class="btn btn-primary btn-sm"
                                style="background-color: var(--theme-color)">Search</button>
                        </form>
                        <a class="link-btn style2" href="#">Verify Donation Certificate <i
                                class="fa-solid fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
                Service Area  
                ==============================-->
    <section class="overflow-hidden space" id="service-sec" data-bg-src="{{ asset('frontend/assets/img/bg/gray-bg1.png') }}"
        data-overlay="gray" data-opacity="6">
        <div class="shape-mockup service-bg-shape1-1 d-xxl-inline-block d-none" data-top="15%" data-left="0">
            <div class="color-masking">
                <div class="masking-src" data-mask-src="{{ asset('frontend/assets/img/shape/hand-shape1.png') }}"></div>
                <img src="{{ asset('frontend/assets/img/shape/hand-shape1.png') }}" alt="img">
            </div>
        </div>
        <div class="shape-mockup service-bg-shape1-1 d-xxl-inline-block d-none" data-top="35%" data-left="0">
            <div class="color-masking">
                <div class="masking-src" data-mask-src="{{ asset('frontend/assets/img/shape/hand-shape1.png') }}"></div>
                <img src="{{ asset('frontend/assets/img/shape/hand-shape1.png') }}" alt="img">
            </div>
        </div>
        <div class="service-bg-shape1-3 d-xxl-inline-block d-none"></div>
        <div class="service-bg-shape1-4 d-xxl-inline-block d-none"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="title-area text-center">
                        <span class="sub-title after-none before-none">Charity Services</span>
                        <h2 class="sec-title">We Do it for all People Humanist Services</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30 gx-30 justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="service-card style2">
                        <div class="box-thumb">
                            <img src="{{ asset('frontend/assets/img/cherety/zakat-a.jpeg') }}" alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('frontend/assets/img/boy.webp') }}" alt="Icon">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="about.html">Zakat</a></h3>

                            <a href="/donate" class="th-btn donate_btn">Donate Now<i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card style2">
                        <div class="box-thumb">
                            <img src="{{ asset('frontend/assets/img/cherety/sadqa.jpeg') }}" alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('frontend/assets/img/volunteering.webp') }}" alt="Icon">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="about.html">Sadqa</a></h3>

                            <a href="/donate" class="th-btn donate_btn">Donate Now<i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card style2">
                        <div class="box-thumb">
                            <img src="{{ asset('frontend/assets/img/cherety/fitra-card.jpeg') }}" alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('frontend/assets/img/lake.webp') }}" alt="Icon">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="about.html">Fitra</a></h3>

                            <a href="/donate" class="th-btn donate_btn">Donate Now<i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card style2">
                        <div class="box-thumb">
                            <img src="{{ asset('frontend/assets/img/cherety/woman.webp') }}" alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('frontend/assets/img/women.webp') }}" alt="Icon">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="about.html">
                                    Islamic Education</a></h3>

                            <a href="/donate" class="th-btn donate_btn">Donate Now<i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-md-6">
                    <div class="service-card style2">
                        <div class="box-thumb">
                            <img src="{{ asset('frontend/assets/img/cherety/EducationEmpowerment.webp') }}" alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('frontend/assets/img/education.webp') }}" alt="Icon">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="about.html">Education Empowerment</a></h3>

                            <a href="/donate" class="th-btn donate_btn">Donate Now<i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card style2">
                        <div class="box-thumb">
                            <img src="{{ asset('frontend/assets/img/cherety/health.webp') }}" alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('frontend/assets/img/empowerment.webp') }}" alt="Icon">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="about.html">Health Empowerment</a></h3>

                            <a href="dontaion.html" class="th-btn donate_btn">Donate Now<i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <!--============================== About Area  ==============================-->
    <div class="overflow-hidden space" id="about-sec">
        <div class="shape-mockup about-bg-shape2-1 jump-reverse d-lg-inline-block d-none" data-top="10%" data-right="5%">
            <img src="{{ asset('frontend/assets/img/shape/heart-shape1.png') }}" alt="shape">
        </div>
        <div class="shape-mockup about-bg-shape3-1 jump" data-bottom="20%" data-right="5%">
            <div class="color-masking2">
                <div class="masking-src" data-mask-src="{{ asset('frontend/assets/img/shape/about_shape3_1.png') }}"></div>
                <img src="{{ asset('frontend/assets/img/shape/about_shape3_1.png') }}" alt="img">
            </div>
        </div>
        <div class="container">
            <div class="row gy-60 align-items-center">
                <div class="col-xl-6">
                    <div class="img-box3">
                        <div class="img1">
                            <img src="{{ asset('frontend/assets/img/about-img.png.webp') }}" alt="About">
                        </div>
                        <div class="img2 jump">
                            <img src="{{ asset('frontend/assets/img/abt-1.webp') }}" alt="img">
                        </div>
                        <div class="about-shape3-1 jump-reverse">
                            <div class="color-masking2">
                                <div class="masking-src"
                                    data-mask-src="{{ asset('frontend/assets/img/shape/about_shape1_1.png') }}"></div>
                                <img src="{{ asset('frontend/assets/img/shape/about_shape1_1.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="year-counter movingX">
                            <div class="year-counter_number"><span class="counter-number">266300</span>+ Underprivileged
                                Children in Haryana Receiving Help</div>

                            <a class="link-btn style2" href="contact.html">Become a Volunteer</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area mb-40">
                        <span class="sub-title-about after-none before-none"><i class="text-theme far fa-heart"></i>
                            About Us</span>
                        <h2 class="sec-title">Give Time, Change Lives Volunteer Opportunities</h2>
                        <p>Parvej Akhtar, a visionary leader and philanthropist, serves as the Chairman of Al Khair
                            Educational & Charitable Trust. With a deep sense of compassion and dedication, he has been
                            tirelessly working to uplift the underprivileged and bring positive change to society. Under
                            his leadership</p>
                    </div>
                    <div class="about-wrap3">
                        <p class="mb-30">the trust has launched numerous initiatives, including education programs,
                            healthcare services, clean water projects, and support for marginalized communities. His
                            focus on empowering women, supporting orphans.</p>
                        <div class="about-feature-grid">
                            <div class="box-icon">
                                <img src="{{ asset('frontend/assets/img/icon/about-icon3-1.svg') }}" alt="icon">
                            </div>
                            <div class="media-body">
                                <h4 class="box-title">08 Years of Experiences</h4>
                                <p class="box-text">Join our monthly giving program to provide consistent support to our
                                    initiatives. Regular contributions,</p>
                            </div>
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href="about.html" class="th-btn style3 style-radius">About More <i
                                    class="fa-solid fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--==============================
                Counter Area  
                ==============================-->
    <div class="space-bottom">
        <div class="container">
            <div class="counter-wrap">
                <div class="counter-card">
                    <div class="media-body">
                        <h2 class="box-number text-theme"><span class="counter-number">15</span>k<span
                                class="fw-light">+</span></h2>
                        <p class="box-text">Incredible Volunteers</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <div class="media-body">
                        <h2 class="box-number text-theme2"><span class="counter-number">1</span>k<span
                                class="fw-light">+</span></h2>
                        <p class="box-text">Successful Campaigns</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <div class="media-body">
                        <h2 class="box-number text-theme"><span class="counter-number">400</span><span
                                class="fw-light">+</span></h2>
                        <p class="box-text">Monthly Donors</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <div class="media-body">
                        <h2 class="box-number text-theme2"><span class="counter-number">35</span>k<span
                                class="fw-light">+</span></h2>
                        <p class="box-text">Team Support</p>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </div>
    <!--==============================
                Cta Area  
                ==============================-->
    <div class="cta-area-1">
        <div class="container z-index-common " data-pos-for="#donation-sec" data-sec-pos="bottom-half">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="cta-card" data-bg-src="{{ asset('frontend/assets/img/bg/cta-bg1-1.jpg') }}">
                        <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-right="0"
                            data-mask-src="{{ asset('frontend/assets/img/shape/cta_shape1_1.png') }}">
                            <img src="{{ asset('frontend/assets/img/shape/cta_shape1_1.png') }}" alt="img">
                        </div>
                        <h3 class="box-title">Member Donation</h3>
                        <p class="box-text">Provide resources such as reports, infographics, and educational materials
                            related to the charity's cause. Use a clear and intuitive navigation menu to help users find
                            information quickly.</p>
                        <a href="/donate" class="th-btn donate_btn style5">Donate Now <i
                                class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cta-card style2" data-bg-src="{{ asset('frontend/assets/img/bg/cta-bg1-2.jpg') }}">
                        <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-left="0"
                            data-mask-src="{{ asset('frontend/assets/img/shape/cta_shape1_1.png') }}">
                            <img src="{{ asset('frontend/assets/img/shape/cta_shape1_1.png') }}" alt="img">
                        </div>
                        <h3 class="box-title">Join Us volunteer</h3>
                        <p class="box-text">Provide resources such as reports, infographics, and educational materials
                            related to the charity's cause. Use a clear and intuitive navigation menu to help users find
                            information quickly.</p>
                        <a href="{{  route('volunteer.form') }}" class="th-btn style5">Join Us Now <i
                                class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Donation Area  ==============================-->
    <section class="space bg-gray" data-bg-src="{{ asset('frontend/assets/img/bg/donation-bg1-1.png') }}" id="donation-sec">
        <div class="shape-mockup donation-bg-shape1-1" data-bottom="0" data-right="0"><img
                src="{{ asset('frontend/assets/img/shape/donation-shape1-1.png') }}" alt="shape"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area text-center">
                        <span class="sub-title">Lets Start Donating</span>
                        <h2 class="sec-title">See Your Impact: Transparent Donation Causes</h2>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="donationSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}, "autoHeight": "true"}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="donation-card" data-theme-color="">
                                <div class="donation-card-shape"
                                    data-mask-src="{{ asset('frontend/assets/img/donation/donation-card-bg-shape1-1.png') }}"></div>
                                <div class="box-thumb">
                                    <img src="{{ asset('frontend/assets/img/dontaing/ramzan.webp') }}" alt="image">
                                    <div class="donation-card-tag">20%</div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="/donate">Ramzan: Support Families in Need</a></h3>
                                    <div class="donation-card_progress-wrap">

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 20%;">
                                            </div>
                                        </div>
                                        <div class="donation-card_progress-content">
                                            <span class="donation-card_raise">Raised - 60k</span>
                                            <span class="donation-card_goal">Goal - ₹3 Lac</span>
                                        </div>
                                    </div>
                                    <a href="/donate" class="th-btn donate_btn style6">Donate Now <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="donation-card" data-theme-color="var(--theme-color2)">
                                <div class="donation-card-shape"
                                    data-mask-src="{{ asset('frontend/assets/img/donation/donation-card-bg-shape1-1.png') }}"></div>
                                <div class="box-thumb">
                                    <img src="{{ asset('frontend/assets/img/dontaing/RAMADAN_MAY05.webp') }}" alt="image">
                                    <div class="donation-card-tag">10%</div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="/donate">Iftaar: Provide Meals for the Needy</a></h3>
                                    <div class="donation-card_progress-wrap">

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 10%;">
                                            </div>
                                        </div>
                                        <div class="donation-card_progress-content">
                                            <span class="donation-card_raise">Raised - 50k</span>
                                            <span class="donation-card_goal">Goal - ₹5 Lac</span>
                                        </div>
                                    </div>
                                    <a href="/donate" class="th-btn donate_btn style6">Donate Now <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="donation-card" data-theme-color="#FF5528">
                                <div class="donation-card-shape"
                                    data-mask-src="{{ asset('frontend/assets/img/donation/donation-card-bg-shape1-1.png') }}"></div>
                                <div class="box-thumb">
                                    <img src="{{ asset('frontend/assets/img/dontaing/zakat.webp') }}" alt="image">
                                    <div class="donation-card-tag">10%</div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="/donate">Zakat: Help the Poor & Orphans</a>
                                    </h3>
                                    <div class="donation-card_progress-wrap">

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 10%;">
                                            </div>
                                        </div>
                                        <div class="donation-card_progress-content">
                                            <span class="donation-card_raise">Raised - 50k</span>
                                            <span class="donation-card_goal">Goal - ₹5Lac</span>
                                        </div>
                                    </div>
                                    <a href="/donate" class="th-btn donate_btn style6">Donate Now <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="donation-card" data-theme-color="">
                                <div class="donation-card-shape"
                                    data-mask-src="{{ asset('frontend/assets/img/donation/donation-card-bg-shape1-1.png') }}"></div>
                                <div class="box-thumb">
                                    <img src="{{ asset('frontend/assets/img/dontaing/education.webp') }}" alt="image">
                                    <div class="donation-card-tag">9%</div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="/donate">Education: Fund a Child’s Future</a></h3>
                                    <div class="donation-card_progress-wrap">

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 9%;">
                                            </div>
                                        </div>
                                        <div class="donation-card_progress-content">
                                            <span class="donation-card_raise">Raised - 45k</span>
                                            <span class="donation-card_goal">Goal - ₹5 Lac</span>
                                        </div>
                                    </div>
                                    <a href="/donate" class="th-btn donate_btn style6">Donate Now <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="donation-card" data-theme-color="var(--theme-color2)">
                                <div class="donation-card-shape"
                                    data-mask-src="{{ asset('frontend/assets/img/donation/donation-card-bg-shape1-1.png') }}"></div>
                                <div class="box-thumb">
                                    <img src="{{ asset('frontend/assets/img/dontaing/borewill.webp') }}" alt="image">
                                    <div class="donation-card-tag">10%</div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="/donate">Water Crisis: Drinking Water For Needy Place</a></h3>
                                    <div class="donation-card_progress-wrap">

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 10%;">
                                            </div>
                                        </div>
                                        <div class="donation-card_progress-content">
                                            <span class="donation-card_raise">Raised - 1 Lac</span>
                                            <span class="donation-card_goal">Goal - ₹10 Lac</span>
                                        </div>
                                    </div>
                                    <a href="/donate" class="th-btn donate_btn style6">Donate Now <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="donation-card" data-theme-color="#FF5528">
                                <div class="donation-card-shape"
                                    data-mask-src="{{ asset('frontend/assets/img/donation/donation-card-bg-shape1-1.png') }}"></div>
                                <div class="box-thumb">
                                    <img src="{{ asset('frontend/assets/img/dontaing/poor.webp') }}" alt="image">
                                    <div class="donation-card-tag">7%</div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="/donate">"Food Relief: Eradicating Hunger for the Needy"</a></h3>
                                    <div class="donation-card_progress-wrap">

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 7%;">
                                            </div>
                                        </div>
                                        <div class="donation-card_progress-content">
                                            <span class="donation-card_raise">Raised - 50k</span>
                                            <span class="donation-card_goal">Goal - ₹7 Lac</span>
                                        </div>
                                    </div>
                                    <a href="/donate" class="th-btn donate_btn style6">Donate Now <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--============================== Essential Item Area  ==============================-->
            <div class="container mt-5 mb-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="title-area text-center">
                            <span class="sub-title">Lets Start Donating</span>
                            <h2 class="sec-title">Donate Essentials</h2>
                        </div>
                    </div>
                </div>
                <div class="slider-area">
                    <div class="swiper th-slider has-shadow" id="donationSlider1"
                        data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}, "autoHeight": "true"}'>
                        <div class="swiper-wrapper">
                            <!-- dynamic section  -->
                            @foreach ($products as $key => $product)
                                <div class="swiper-slide">
                                    <div class="donation-card" data-theme-color="">
                                        <!-- Card Shape (Static) -->
                                        <div class="donation-card-shape"
                                            data-mask-src="{{ asset('frontend/assets/img/donation/donation-card-bg-shape1-1.png') }}">
                                        </div>

                                        <!-- Product Image -->
                                        <div class="box-thumb-two">
                                            <img src="{{ asset('storage/product_img/' . $product->image) }}"
                                                alt="{{ $product->name }}" />
                                        </div>

                                        <!-- Product Details -->
                                        <div class="box-content-two">
                                            <h3 class="box-title-two">
                                                <a href="#" id="product_{{$key}}">{{ $product->name }}</a>
                                            </h3>
                                            <span id="price_{{$key}}" class="d-none">{{ ($product->price) }}</span>
                                            <p>Rs. <span>{{ number_format($product->price, 2) }}</span> / Unit</p>
                                        </div>

                                        <!-- Quantity Control Section -->
                                        <div class="quantity-control">
                                            <button class="qty-btn minus-btn" data-id="{{$key}}">−</button>
                                            <input type="number" id="quantity_{{$key}}" class="qty-input" value="0" min="1"
                                                readonly>
                                            <button class="qty-btn plus-btn" data-id="{{$key}}">+</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <!-- dynamic section end -->
                        </div>
                    </div>
                </div>
                <div class="amount-footer">
                    <div>
                        <p>Total Amount :
                            <span id="total_amount">0</span>
                            <small> <span id="total_items"></span> Items</small>
                        </p>
                        <small>Details : <span id="selected_items"></span></small>
                    </div>

                    <button id="donate_essential_items">Donate Now</button>
                </div>
            </div>
            <!-- essential end -->
        </div>
    </section>
    <!--============================== Cta Area  ==============================-->
    <div class="video-area-3">
        <div class="shape-mockup video-bg-shape3-1" data-top="0" data-left="0" data-bottom="0">
            <img src="{{ asset('frontend/assets/img/shape/video_bg_shape3_1.png') }}" alt="img">
        </div>
        <div class="shape-mockup video-bg-shape3-2" data-top="0" data-right="0" data-bottom="0">
            <img src="{{ asset('frontend/assets/img/shape/video_bg_shape3_2.png') }}" alt="img">
        </div>
        <div class="video-thumb3-1 video-box-center">
            <img src="{{ asset('frontend/assets/img/video-bg.webp') }}" alt="img">
            <a href="https://www.youtube.com/watch?v=H1oGWXHgHSM" class="play-btn style7 popup-video"><i
                    class="fa-sharp fa-solid fa-play"></i></a>
        </div>
    </div>
    <!--==============================
                Story Area  
                ==============================-->
    <div class="story-area-1 overflow-hidden space">
        <div class="container">
            <div class="row gy-40 gx-80 justify-content-between flex-row-reverse align-items-center">
                <div class="col-xl-7">
                    <div class="story-img-box1">
                        <div class="img1">
                            <img src="{{ asset('frontend/assets/img/we-help.webp') }}" alt="img">
                        </div>
                        <div class="story-shape1-1 jump-reverse">
                            <img src="{{ asset('frontend/assets/img/shape/story_shape1_1.png') }}" alt="img">
                        </div>
                        <div class="story-card movingX">
                            <h5 class="box-title">Parvej Akhtar</h5>
                            <p class="box-text">Our success stories highlight the
                                real life impact of your donations &
                                the resilience of those we help.
                                These narratives showcase the
                                power of compassion.</p>
                            <div class="quote-icon" data-mask-src="{{ asset('frontend/assets/img/icon/quote.svg') }}"></div>
                        </div>
                        <div class="year-counter">
                            <p class="year-counter_text">Years of <span>Experience</span></p>
                            <div class="year-counter_number">0<span class="counter-number">8</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="story-wrap1">
                        <div class="title-area mb-0">
                            <span class="sub-title before-none">Success Story</span>

                            <h5 class="sec-title">Empowering Nonprofits with Essential Funding Tools and Training</h5>
                            <p class="mt-30">We empower nonprofits with essential resources, training, and funding
                                tools. Our secure donation platform ensures safe and seamless contributions, offering
                                multiple payment options and flexible giving plans. Whether a one-time or recurring
                                donation, every contribution helps organizations focus on their mission and create a
                                lasting impact in their communities.</p>
                            <div class="btn-wrap mt-35">
                                <a href="about.html" class="th-btn style-border">Our Success Story <i
                                        class="fas fa-arrow-up-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==============================
        Team Area  
        ==============================-->
    <section class="space-bottom team-area-1">
        <div class="shape-mockup team-bg-shape1-1 spin d-xxl-block d-none" data-top="0%" data-right="3%"><img
                src="{{ asset('frontend/assets/img/shape/hand-group-shape1.png') }}" alt="img"></div>
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Our Volunteer</span>
                <h2 class="sec-title">Meet The Optimistic Volunteer</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow team-slider1" id="teamSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="{{ asset('frontend/assets/img/volentior/1.1.webp') }}" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Parvej Akhtar</a></h3>
                                    <span class="team-desig">President/Founder</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="{{ asset('frontend/assets/img/volentior/2.webp') }}" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Mohammad Sazid</a></h3>
                                    <span class="team-desig">Secreatry</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="{{ asset('frontend/assets/img/volentior/1.webp') }}" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Zakir Hussain</a></h3>
                                    <span class="team-desig">Joint Secretary</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="{{ asset('frontend/assets/img/volentior/4.webp') }}" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Arshad Hussain</a></h3>
                                    <span class="team-desig">Treasurer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="{{ asset('frontend/assets/img/team/team_1_1.png') }}" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Habib Alam</a></h3>
                                    <span class="team-desig">Member</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="{{ asset('frontend/assets/img/team/team_1_2.png') }}" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Ataullah Khan</a></h3>
                                    <span class="team-desig">Member</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="{{ asset('frontend/assets/img/volentior/3.webp') }}" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Shokat Ali</a></h3>
                                    <span class="team-desig">Member</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button data-slider-prev="#teamSlider1" class="slider-arrow slider-prev"><i
                        class="far fa-arrow-left"></i></button>
                <button data-slider-next="#teamSlider1" class="slider-arrow slider-next"><i
                        class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section>
    <!--==============================
        Video Area  
        ==============================-->
    <div class="video-area-2 space bg-theme-dark overflow-hidden">
        <div class="shape-mockup video-bg-shape2-1" data-top="0" data-left="0" data-bottom="0">
            <img src="{{ asset('frontend/assets/img/shape/video_shape2_1.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="row gy-40 gx-80 justify-content-between">
                <div class="col-lg-6">
                    <div class="title-area mb-35">
                        <span class="sub-title-about after-none before-none">Make a Donations </span>
                        <h2 class="sec-title text-white">Give Time, Change Lives
                            Become a Donate Now</h2>
                        <p class="text-light">Volunteers are the heart of our organization. Join our team to make a
                            hands-on difference in your community. Whether you have a few hours or a few days, your time
                            and skills can help us achieve our goals.</p>
                    </div>
                    <div class="donation-card style2">
                        <div class="box-thumb">
                            <img src="{{ asset('frontend/assets/img/donate.webp') }}" alt="image">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="blog-details.html">Big charity: build school for poor
                                    children</a></h3>
                            <p>Stay informed about our upcoming events and campaigns.</p>
                            <div class="donation-card_progress-wrap">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 8%;">
                                        <div class="progress-value">8%</div>
                                    </div>
                                </div>
                                <div class="donation-card_progress-content">
                                    <span class="donation-card_raise">40k</span>
                                    <span class="donation-card_goal text-theme2">Goal - ₹5 Lac</span>
                                </div>
                            </div>
                            <a href="/donate" class="th-btn donate_btn style6">Donate Now <i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video-thumb2-1 video-box-center">
                        <img src="{{ asset('frontend/assets/img/vedio.webp') }}" alt="img">
                        <h2 class="video-title">Watch Now</h2>
                        <a href="https://www.youtube.com/watch?v=H1oGWXHgHSM" class="play-btn style5 popup-video"><i
                                class="fa-sharp fa-solid fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Testimonial Area  
    ==============================-->
    <section class="overflow-hidden mt-60 overflow-hidden">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title after-none before-none"><i class="far fa-heart text-theme"></i>Testimonials</span>
                <h2 class="sec-title">What Our Customers Say?</h2>
            </div>
            <div class="testi-slider3 slider-area">
                <div class="swiper th-slider" id="testiSlide3"
                    data-slider-options='{"autoHeight": "true","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-card3">
                                <div class="testi-card-shape"
                                    data-mask-src="{{ asset('frontend/assets/img/testi-bg.webp') }}"></div>
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                                <div class="testi-card_profile">
                                    <div class="media-left">
                                        <h3 class="testi-card_name">Ayaan Khan</h3>
                                        <span class="testi-card_desig">School Teacher</span>
                                    </div>
                                </div>
                                <p class="testi-card_text">✨ "This NGO is truly a blessing! Their dedication to helping
                                    the underprivileged is inspiring. I’ve seen real change happening because of their
                                    work!"</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card3">
                                <div class="testi-card-shape"
                                    data-mask-src="{{ asset('frontend/assets/img/testi-bg.webp') }}"></div>
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                                <div class="testi-card_profile">
                                    <div class="media-left">
                                        <h3 class="testi-card_name">Fatima Shaikh</h3>
                                        <span class="testi-card_desig">Homemaker</span>
                                    </div>
                                </div>
                                <p class="testi-card_text">✨ "I donated with confidence, and I’m amazed at the impact
                                    they have made. Transparent, trustworthy, and truly making a difference!" </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card3">
                                <div class="testi-card-shape"
                                    data-mask-src="{{ asset('frontend/assets/img/testi-bg.webp') }}"></div>
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                                <div class="testi-card_profile">
                                    <div class="media-left">
                                        <h3 class="testi-card_name">Mohammed Irfan</h3>
                                        <span class="testi-card_desig">Shop Owner</span>
                                    </div>
                                </div>
                                <p class="testi-card_text">✨ "A life-changing organization! From education programs to
                                    healthcare support, they are transforming lives every day."</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card3">
                                <div class="testi-card-shape"
                                    data-mask-src="{{ asset('frontend/assets/img/testi-bg.webp') }}"></div>
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                                <div class="testi-card_profile">
                                    <div class="media-left">
                                        <h3 class="testi-card_name">Sana Parveen</h3>
                                        <span class="testi-card_desig">College Student</span>
                                    </div>
                                </div>
                                <p class="testi-card_text">✨ "Their food distribution program helped my family when we
                                    had nothing. I can't thank them enough for their kindness!"</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card3">
                                <div class="testi-card-shape"
                                    data-mask-src="{{ asset('frontend/assets/img/testi-bg.webp') }}"></div>
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                                <div class="testi-card_profile">
                                    <div class="media-left">
                                        <h3 class="testi-card_name">Rizwan Ahmed</h3>
                                        <span class="testi-card_desig">Auto Driver</span>
                                    </div>
                                </div>
                                <p class="testi-card_text">✨ "They provided education support to my daughter, and today
                                    she is excelling in school. This NGO is a true ray of hope!"</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card3">
                                <div class="testi-card-shape"
                                    data-mask-src="{{ asset('frontend/assets/img/testi-bg.webp') }}"></div>
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                                <div class="testi-card_profile">
                                    <div class="media-left">
                                        <h3 class="testi-card_name">Yasmin Khan</h3>
                                        <span class="testi-card_desig">NGO Volunteer</span>
                                    </div>
                                </div>
                                <p class="testi-card_text">✨ "They didn’t just give me help; they gave me a new beginning.
                                    I am now financially independent, thanks to their skill development program!"</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button data-slider-prev="#testiSlide3" class="slider-arrow style-border slider-prev"><i
                        class="far fa-arrow-left"></i></button>
                <button data-slider-next="#testiSlide3" class="slider-arrow style-border slider-next"><i
                        class="far fa-arrow-right"></i></button>
            </div>

        </div>
    </section>
    <!--==============================
Project Area  
==============================-->
<section class="overflow-hidden">
        <div class="project-wrap1 space th-radius overflow-hidden" data-bg-src="{{ asset('frontend/assets/img/bg/gray-bg2.png') }}"
            data-overlay="gray" data-opacity="5">
            <div class="shape-mockup project-bg-shape1-1" data-top="0" data-right="0">
                <img src="{{ asset('frontend/assets/img/shape/project-shape1-1.png') }}" alt="img">
            </div>
            <!-- Swiper CSS -->



            <div class="container">
                <div class="row justify-content-md-between align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="title-area">
                            <span class="sub-title before-none">Complete Projects</span>
                            <h2 class="sec-title">Our Recent Project</h2>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="sec-btn">
                            <a href="gellery.html" class="th-btn">View All Project<i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="testi-slider3 slider-area">
                    <div class="swiper th-slider" id="testiSlide4"
                        data-slider-options='{"autoHeight": "true","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="project-card">
                                    <div class="project-img">
                                        <img src="{{ asset('frontend/assets/img/recent-project/EducationEmpowerment.webp') }}"
                                            alt="project image">
                                    </div>
                                    <div class="project-content">
                                        <h3 class="project-title"><a href="gellery.html">EducationEmpowerment</a>
                                        </h3>
                                        <p class="project-subtitle">Educated Community</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-card">
                                    <div class="project-img">
                                        <img src="{{ asset('frontend/assets/img/recent-project/EnvironmentalHelp.webp') }}" alt="project image">
                                    </div>
                                    <div class="project-content">
                                        <h3 class="project-title"><a href="gellery.html">Environmental Help</a>
                                        </h3>
                                        <p class="project-subtitle">Nature Conservation Help</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-card">
                                    <div class="project-img">
                                        <img src="{{ asset('frontend/assets/img/recent-project/health.webp') }}" alt="project image">
                                    </div>
                                    <div class="project-content">
                                        <h3 class="project-title"><a href="gellery.html">Medical Support</a>
                                        </h3>
                                        <p class="project-subtitle">Public Health</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-card">
                                    <div class="project-img">
                                        <img src="{{ asset('frontend/assets/img/recent-project/RuralEmpowerment.webp') }}" alt="project image">
                                    </div>
                                    <div class="project-content">
                                        <h3 class="project-title"><a href="gellery.html">Rural Empowerment</a>
                                        </h3>
                                        <p class="project-subtitle">Community Strengthening</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-card">
                                    <div class="project-img">
                                        <img src="{{ asset('frontend/assets/img/recent-project/woman.webp') }}" alt="project image">
                                    </div>
                                    <div class="project-content">
                                        <h3 class="project-title"><a href="gellery.html">Women's Support</a>
                                        </h3>
                                        <p class="project-subtitle">Helping Women</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-card">
                                    <div class="project-img">
                                        <img src="{{ asset('frontend/assets/img/recent-project/youth.webp') }}" alt="project image">
                                    </div>
                                    <div class="project-content">
                                        <h3 class="project-title"><a href="gellery.html">Poverty Relief
                                                Program</a>
                                        </h3>
                                        <p class="project-subtitle">Compassion for the Poor</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-card">
                                    <div class="project-img">
                                        <img src="{{ asset('frontend/assets/img/recent-project/1.webp') }}" alt="project image">
                                    </div>
                                    <div class="project-content">
                                        <h3 class="project-title"><a href="gellery.html">Peace Humanity</a>
                                        </h3>
                                        <p class="project-subtitle">Peace for Humanity Foundation</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-card">
                                    <div class="project-img">
                                        <img src="{{ asset('frontend/assets/img/recent-project/2.webp') }}" alt="project image">
                                    </div>
                                    <div class="project-content">
                                        <h3 class="project-title"><a href="gellery.html">Peaceful Humanity</a>
                                        </h3>
                                        <p class="project-subtitle">Humanity & Peace Initiative</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-card">
                                    <div class="project-img">
                                        <img src="{{ asset('frontend/assets/img/recent-project/4.webp') }}" alt="project image">
                                    </div>
                                    <div class="project-content">
                                        <h3 class="project-title"><a href="gellery.html">Peaceful Humanity</a>
                                        </h3>
                                        <p class="project-subtitle">Humanity & Peace Initiative For Water</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-card">
                                    <div class="project-img">
                                        <img src="{{ asset('frontend/assets/img/recent-project/5.webp') }}" alt="project image">
                                    </div>
                                    <div class="project-content">
                                        <h3 class="project-title"><a href="gellery.html">Peaceful Humanity Welfare
                                                Association</a>
                                        </h3>
                                        <p class="project-subtitle">Together for a Better Tomorrow.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-card">
                                    <div class="project-img">
                                        <img src="{{ asset('frontend/assets/img/recent-project/6.webp') }}" alt="project image">
                                    </div>
                                    <div class="project-content">
                                        <h3 class="project-title"><a href="gellery.html">Peaceful Humanity
                                                Foundation</a>
                                        </h3>
                                        <p class="project-subtitle">Educations</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-card">
                                    <div class="project-img">
                                        <img src="{{ asset('frontend/assets/img/recent-project/7.webp') }}" alt="project image">
                                    </div>
                                    <div class="project-content">
                                        <h3 class="project-title"><a href="gellery.html">Peaceful Humanity Welfare
                                                Society</a>
                                        </h3>
                                        <p class="project-subtitle">Water Tank</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-card">
                                    <div class="project-img">
                                        <img src="{{ asset('frontend/assets/img/certifecate/11.webp') }}" alt="project image">
                                    </div>
                                    <div class="project-content">
                                        <h3 class="project-title"><a href="gellery.html">Peaceful Humanity Welfare
                                                Society</a>
                                        </h3>
                                        <p class="project-subtitle">Water Tank</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-card">
                                    <div class="project-img">
                                        <img src="{{ asset('frontend/assets/img/certifecate/12.webp') }}" alt="project image">
                                    </div>
                                    <div class="project-content">
                                        <h3 class="project-title"><a href="gellery.html">Peaceful Humanity Welfare
                                                Society</a>
                                        </h3>
                                        <p class="project-subtitle">Water Tank</p>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <button data-slider-prev="#testiSlide4" class="slider-arrow style-border slider-prev"><i
                            class="far fa-arrow-left"></i></button>
                    <button data-slider-next="#testiSlide4" class="slider-arrow style-border slider-next"><i
                            class="far fa-arrow-right"></i></button>
                </div>
            </div>



        </div>
    </section>
    <!--==============================
                Faqs Area
                ==============================-->
    <div class="space overflow-hidden faq-area-2" data-bg-src="{{ asset('frontend/assets/img/faqs.webp') }}">
        <div class="shape-mockup faq-shape2-1 jump-reverse" data-top="20%" data-left="0">
            <img src="{{ asset('frontend/assets/img/shape/hand-bg-shape2-1.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="row gy-60 gx-60">
                <div class="col-xl-7">
                    <div class="faq-wrap2">
                        <div class="title-area">
                            <span class="sub-title-about after-none before-none"><i class="far fa-heart text-theme"></i>
                                Frequently Asked Questions</span>
                            <h2 class="sec-title">Have Any Questions For Us?</h2>
                        </div>
                        <div class="accordion" id="faqAccordion">
                            <!-- dyanmic section >>> -->
                            @foreach ($faqs as $key => $faq)
                                <div class="accordion-card style2">
                                    <!-- Accordion Header -->
                                    <div class="accordion-header" id="collapse-item-{{ $key }}">
                                        <button class="accordion-button @if($key == 0) show @endif" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-{{ $key }}"
                                            aria-expanded="{{ $key == 0 ? 'true' : 'false' }}"
                                            aria-controls="collapse-{{ $key }}">
                                            {{ $faq->question }}
                                        </button>
                                    </div>

                                    <!-- Accordion Body -->
                                    <div id="collapse-{{ $key }}" class="accordion-collapse collapse @if($key == 0) show @endif"
                                        aria-labelledby="collapse-item-{{ $key }}" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">
                                                {{ $faq->answer }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <!-- dyanmic section <<< -->

                            <div class="accordion-card style2">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">How
                                        did you hear about our organization?</button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Explore the variety of volunteer opportunities available. From
                                            event planning and fundraising to fieldwork and administrative support, there
                                            are many ways to lend your talents. Find the perfect fit for your skills and
                                            interests.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style2">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">How
                                        frequently do you prefer to volunteer?</button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Explore the variety of volunteer opportunities available. From
                                            event planning and fundraising to fieldwork and administrative support, there
                                            are many ways to lend your talents. Find the perfect fit for your skills and
                                            interests.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="faq-img-box2">
                        <div class="img1">
                            <img src="{{ asset('frontend/assets/img/normal/faqss.webp') }}" alt="img">
                        </div>
                        <div class="faq-img-shape">
                            <img src="{{ asset('frontend/assets/img/shape/faq-shape2-1.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--==============================
                Blog Area  
                ==============================-->
    <section class="space" id="blog-sec">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">News & Articles</span>
                <h2 class="sec-title">Our Latest News & Articles</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="blogSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}, "autoHeight": "true"}'>
                    <div class="swiper-wrapper">
                        <!-- dynamic section start -->
                        @foreach ($news as $item)
                            <div class="swiper-slide">
                                <div class="blog-single has-post-thumbnail">
                                    <div class="blog-img" data-overlay="black" data-opacity="5">
                                        <!-- Thumbnail -->
                                        <a href="blog-details.html">
                                            <img src="{{ asset('storage/thumbnail/' . $item->thumbnail) }}"
                                                style="height: 320px; object-fit: cover;" alt="{{ $item->title }}">
                                        </a>
                                        <!-- YouTube URL -->
                                        <a href="{{ $item->youtube_url }}" class="play-btn popup-video">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                    <!-- Title -->
                                    <h3>{{ $item->title }}</h3>
                                    <!-- Description (Optional) -->
                                    <p>{{ Str::limit($item->description, 100) }}</p>
                                </div>
                            </div>
                        @endforeach

                        <!-- dynamic section end -->
                        <div class="swiper-slide">
                            <div class="blog-single has-post-thumbnail">
                                <div class="blog-img" data-overlay="black" data-opacity="5">
                                    <a href="blog-details.html"><img src="{{ asset('frontend/assets/img/blog/1.webp') }}"
                                            style="height: 320px; object-fit: cover;" alt="Blog Image"></a>
                                    <a href="https://www.youtube.com/watch?v=h3WXYMFNLME" class="play-btn popup-video"><i
                                            class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-single has-post-thumbnail">
                                <div class="blog-img" data-overlay="black" data-opacity="5">
                                    <a href="blog-details.html"><img src="{{ asset('frontend/assets/img/blog/2.webp') }}"
                                            style="height: 320px; object-fit: cover;" alt="Blog Image"></a>
                                    <a href="https://www.youtube.com/watch?v=cK5qZG6M6pY" class="play-btn popup-video"><i
                                            class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-single has-post-thumbnail">
                                <div class="blog-img" data-overlay="black" data-opacity="5">
                                    <a href="blog-details.html"><img src="{{ asset('frontend/assets/img/blog/3.webp') }}"
                                            style="height: 320px; object-fit: cover;" alt="Blog Image"></a>
                                    <a href="https://www.youtube.com/watch?v=E9wmzGdkr8A" class="play-btn popup-video"><i
                                            class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-single has-post-thumbnail">
                                <div class="blog-img" data-overlay="black" data-opacity="5">
                                    <a href="blog-details.html"><img src="{{ asset('frontend/assets/img/blog/4.webp') }}"
                                            style="height: 320px; object-fit: cover;" alt="Blog Image"></a>
                                    <a href="https://www.youtube.com/watch?v=hL1K3z2I1wM" class="play-btn popup-video"><i
                                            class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-single has-post-thumbnail">
                                <div class="blog-img" data-overlay="black" data-opacity="5">
                                    <a href="blog-details.html"><img src="{{ asset('frontend/assets/img/blog/5.webp') }}"
                                            style="height: 320px; object-fit: cover;" alt="Blog Image"></a>
                                    <a href="https://www.youtube.com/watch?v=Z1yqBGvnc_I" class="play-btn popup-video"><i
                                            class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-single has-post-thumbnail">
                                <div class="blog-img" data-overlay="black" data-opacity="5">
                                    <a href="blog-details.html"><img src="{{ asset('frontend/assets/img/blog/6.webp') }}"
                                            style="height: 320px; object-fit: cover;" alt="Blog Image"></a>
                                    <a href="https://www.youtube.com/watch?v=yfvqrFOb40w" class="play-btn popup-video"><i
                                            class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-single has-post-thumbnail">
                                <div class="blog-img" data-overlay="black" data-opacity="5">
                                    <a href="blog-details.html"><img src="{{ asset('frontend/assets/img/blog/7.webp') }}"
                                            style="height: 320px; object-fit: cover;" alt="Blog Image"></a>
                                    <a href="https://www.youtube.com/watch?v=NjFi1iJONjM" class="play-btn popup-video"><i
                                            class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>
                <button data-slider-prev="#blogSlider1" class="slider-arrow slider-prev"><i
                        class="far fa-arrow-left"></i></button>
                <button data-slider-next="#blogSlider1" class="slider-arrow slider-next"><i
                        class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>
        $(document).ready(function () {
            // Attach a click event to all buttons with the class "th-btn donate_btn"
            $('.donate_btn').on('click', function (e) {
                e.preventDefault(); // Prevent default behavior of the link

                // Find the nearest `.box-title` and get its text
                var boxTitle = $(this).closest('.box-content').find('.box-title a').text().trim();

                // Redirect to the donate page with the box title as a query parameter
                var redirectUrl = '/donate?for=' + encodeURIComponent(boxTitle);
                window.location.href = redirectUrl;
            });
        });
    </script>
    <script>
        var totalAmount = 0;
        var totalQuantity = 0;
        var productText = '';
        var selected_product = []; // Changed to an array for proper storage

        function setPrice(params = { id, flag }) {
            const total_amount = document.getElementById("total_amount"); // Use single ID for total amount
            const total_items = document.getElementById("total_items"); // Use single ID for total items
            const selected_items = document.getElementById("selected_items"); // Use single ID for total items

            let product = document.getElementById(`product_${params.id}`)?.innerText ?? ''; // Fetch product name
            let quantity = parseInt(document.getElementById(`quantity_${params.id}`)?.value ?? 0); // Fetch quantity
            let price = parseFloat(document.getElementById(`price_${params.id}`)?.innerText ?? 0); // Fetch price

            if (params.flag === '-') {
                totalAmount -= price; // Subtract price
                // totalQuantity = quantity - 1; // Subtract quantity
                // Check if product already exists in selected_product
                const existingProductIndex = selected_product.findIndex(item => item.id === params.id);
                if (existingProductIndex !== -1) {
                    if (selected_product[existingProductIndex]['quantity'] > 1) {
                        selected_product[existingProductIndex]['quantity'] = quantity; // Update existing product
                    } else {
                        selected_product = selected_product.filter(item => (item.id !== params.id && item.quantity == 1)); // Remove product from the array
                    }
                }
            } else if (params.flag === '+') {
                totalAmount += price; // Add price
                // totalQuantity = quantity + 1; // Add quantity

                // Create product object
                let obj = {
                    id: params.id,
                    quantity: quantity,
                    price: price,
                    product: product,
                };

                // Check if product already exists in selected_product
                const existingProductIndex = selected_product.findIndex(item => item.id === params.id);
                if (existingProductIndex !== -1) {
                    selected_product[existingProductIndex] = obj; // Update existing product
                } else {
                    selected_product.push(obj); // Add new product
                }
            }


            // Update selected_products_text
            let total_quantity = 0;
            let selected_products_text = selected_product.map(item => {
                total_quantity += item.quantity;
                return `${item.product} x ${item.quantity} = Rs. ${item.price * item.quantity}`;
            }).join(', ');

            // Update the total amount, total items, and selected products in the UI
            total_amount.innerText = totalAmount.toFixed(2); // Total amount with 2 decimals
            total_items.innerText = total_quantity; // Total quantity
            selected_items.innerText = selected_products_text || 'No items selected'; // Show selected products or fallback text

        }

        document.addEventListener("DOMContentLoaded", function () {

            const minusBtns = document.querySelectorAll(".minus-btn");
            const plusBtns = document.querySelectorAll(".plus-btn");

            minusBtns.forEach(btn => {
                btn.addEventListener("click", function () {
                    let input = this.nextElementSibling;
                    let value = parseInt(input.value);
                    if (value >= 1) {
                        input.value = value - 1;
                        //price calculation
                        let id = this.getAttribute('data-id');
                        setPrice({ id, flag: '-' });
                    }

                });
            });

            plusBtns.forEach(btn => {
                btn.addEventListener("click", function () {
                    let input = this.previousElementSibling;
                    let value = parseInt(input.value);
                    input.value = value + 1;
                    //price calculation
                    let id = this.getAttribute('data-id');
                    setPrice({ id, flag: '+' });
                });
            });
        });
        //donation button event
        document.getElementById('donate_essential_items').addEventListener('click', function () {
            const selected_items = document.getElementById('selected_items').innerText;
            const totalAmount = parseFloat(document.getElementById('total_amount').innerText ?? 0);
            const totalQuantity = parseInt(document.getElementById('total_items').innerText ?? 0);

            // Validation: Ensure totalAmount and totalQuantity are greater than 0
            if (totalAmount <= 0 || totalQuantity <= 0) {
                alert('Please select items and ensure the donation amount is greater than 0.');
                return; // Stop further execution
            }

            // Build the URL for donation
            const donationUrl = `/donate?for=${encodeURIComponent(selected_items)}&donation-amount=${totalAmount}`;

            // Redirect to the donation URL
            window.location.href = donationUrl;
        });


    </script>
    <script>
        window.onload = function () {
            setTimeout(function () {
                document.getElementById('ngo-donation-popup').classList.add('show');
            }, 500);
        };
        function closePopup() {
            var popup = document.getElementById('ngo-donation-popup');
            popup.classList.remove('show');
        }
        document.getElementById('ngo-donation-popup').addEventListener('click', function (e) {
            if (e.target === this) {
                closePopup();
            }
        });
    </script>

@endpush