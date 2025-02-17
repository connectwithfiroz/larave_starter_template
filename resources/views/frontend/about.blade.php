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
            <h1 class="breadcumb-title">About Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.html">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div><!--==============================
Feature Area  
==============================-->

<!--==============================
About Area  
==============================-->
<div class="overflow-hidden" id="about-sec">
    <div class="shape-mockup about-bg-shape1-1 jump-reverse" data-top="10%" data-right="5%">
        <img src="{{ asset('frontend/assets/img/shape/heart-shape1.png') }}" alt="shape">
    </div>
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-xl-7">
                <div class="img-box1">
                    <div class="img1" data-mask-src="{{ asset('frontend/assets/img/abt-first.webp') }}">
                        <img src="{{ asset('frontend/assets/img/abt-first.webp') }}" alt="About">
                    </div>
                    <div class="about-shape1-1 jump">
                        <img src="{{ asset('frontend/assets/img/shape/about_shape1_1.png') }}" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="about-wrap1">
                    <div class="title-area mb-30">
                        <span class="sub-title-abt before-none">About Us Donat</span>
                        <h3 class="sec-title">Creating a Better Future Through Compassion and Action</h3>
                        <p class="">Sayed Zakir Hussain, a visionary leader and philanthropist, is the Chairman of
                            Al Khair Educational & Charitable Trust. With unwavering dedication, he strives to
                            uplift the underprivileged and drive meaningful change in society. Through his
                            leadership, the trust provides essential resources, education, and support, empowering
                            communities and shaping a brighter future.</p>
                    </div>
                    <div class="checklist style2 list-two-column">
                        <ul>
                            <li>Charity For Foods</li>
                            <li data-theme-color="var(--theme-color2)">Charity For Water</li>
                            <li data-theme-color="#FF5528">Charity For Education</li>
                            <li data-theme-color="#122F2A">Charity For Medical</li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <div class="container-fluid pt-5 pb-5" style="background: #ececec;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Our Core Values</h4>
                    <ul>
                        <li><strong>Integrity:</strong> We uphold transparency, accountability, and the highest
                            ethical standards in all our endeavors.</li>
                        <li><strong>Empathy:</strong> We work with compassion, understanding the unique struggles
                            and needs of the communities we serve.</li>
                        <li><strong>Collaboration:</strong> By partnering with local communities, governments, and
                            organizations, we aim to maximize our impact and create lasting change.</li>
                        <li><strong>Innovation:</strong> We adopt innovative solutions and methodologies to tackle
                            social challenges effectively.</li>
                        <li><strong>Sustainability:</strong> We strive to implement practices that preserve the
                            environment and ensure sustainable growth for future generations.</li>
                    </ul>

                    <h4>Our Work</h4>
                    <h5>1. Education</h5>
                    <p>We believe education is the foundation of empowerment. Our initiatives include:</p>
                    <ul>
                        <li>Establishing schools in underserved areas</li>
                        <li>Providing scholarships to economically disadvantaged students</li>
                        <li>Offering vocational training to enhance employment opportunities</li>
                    </ul>

                    <h5>2. Healthcare</h5>
                    <p>We work to ensure access to basic healthcare for all through:</p>
                    <ul>
                        <li>Free health camps and mobile clinics</li>
                        <li>Distribution of essential medicines</li>
                        <li>Awareness programs on health and hygiene</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5>3. Environmental Sustainability</h5>
                    <p>To safeguard the environment, we promote:</p>
                    <ul>
                        <li>Eco-friendly agricultural practices</li>
                        <li>Conservation initiatives</li>
                        <li>Climate change education and awareness campaigns</li>
                    </ul>

                    <h5>4. Women's Empowerment</h5>
                    <p>Empowering women is key to building resilient communities. We focus on:</p>
                    <ul>
                        <li>Supporting self-help groups</li>
                        <li>Providing vocational and financial literacy training</li>
                        <li>Raising awareness about women’s rights and gender equality</li>
                    </ul>

                    <h5>5. Disaster Relief</h5>
                    <p>During times of crisis, we provide:</p>
                    <ul>
                        <li>Emergency aid, including food, clothing, and shelter</li>
                        <li>Medical care for affected individuals</li>
                        <li>Long-term recovery and rehabilitation support for disaster-hit areas</li>
                    </ul>

                    <h4>Our Impact</h4>
                    <p>Since its inception, <strong>Al Khair Educational & Charitable Trust</strong> has positively
                        impacted the lives of thousands of individuals. From providing children with access to
                        education and families with essential healthcare to promoting women’s empowerment and
                        sustainable practices, we are proud of the change we are fostering in society.</p>

                    <h4>Join Us</h4>
                    <p>We invite you to be a part of our journey towards creating a just and equitable society.
                        Whether through donations, volunteering, or partnerships, your support can help us broaden
                        our reach and strengthen our impact. Together, we can build a brighter future for everyone.
                    </p>
                </div>
            </div>
        </div>
    </div>

</div><!--==============================
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

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="{{ asset('frontend/assets/img/team/team_1_4.png') }}" alt="Team">
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
                                <h3 class="box-title"><a href="team-details.html">Daniel Thomas</a></h3>
                                <span class="team-desig">Volunteer</span>
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
<div class="video-area-3">
    <div class="shape-mockup video-bg-shape3-1" data-top="0" data-left="0" data-bottom="0">
        <img src="{{ asset('frontend/assets/img/shape/video_bg_shape3_1.png') }}" alt="img">
    </div>
    <div class="shape-mockup video-bg-shape3-2" data-top="0" data-right="0" data-bottom="0">
        <img src="{{ asset('frontend/assets/img/shape/video_bg_shape3_2.png') }}" alt="img">
    </div>
    <div class="video-thumb3-1 video-box-center">
        <img src="{{ asset('frontend/assets/img/about-banner.webp') }}" alt="img">
        <a href="https://www.youtube.com/watch?v=H1oGWXHgHSM" class="play-btn style7 popup-video"><i
                class="fa-sharp fa-solid fa-play"></i></a>
    </div>
</div>
<!--==============================
Counter Area  
==============================-->
<div class="">
    <div class="container">
        <div class="counter-wrap style2 bg-light">
            <div class="counter-card">
                <div class="media-body">
                    <h2 class="box-number text-white"><span class="counter-number">15</span>k<span
                            class="fw-light">+</span></h2>
                    <p class="box-text text-white">Incredible Volunteers</p>
                </div>
            </div>
            <div class="divider"></div>
            <div class="counter-card">
                <div class="media-body">
                    <h2 class="box-number text-white"><span class="counter-number">3.5</span>k<span
                            class="fw-light">+</span></h2>
                    <p class="box-text text-white">Successful Campaigns</p>
                </div>
            </div>
            <div class="divider"></div>
            <div class="counter-card">
                <div class="media-body">
                    <h2 class="box-number text-white"><span class="counter-number">400</span><span
                            class="fw-light">+</span></h2>
                    <p class="box-text text-white">Monthly Donors</p>
                </div>
            </div>
            <div class="divider"></div>
            <div class="counter-card">
                <div class="media-body">
                    <h2 class="box-number text-white"><span class="counter-number">35</span>k<span
                            class="fw-light">+</span></h2>
                    <p class="box-text text-white">Team Support</p>
                </div>
            </div>
            <div class="divider"></div>
        </div>
    </div>
</div><!--==============================
Process Area  
==============================-->
<section class="space-top">
    <div class="shape-mockup process-shape1-1 jump-reverse d-xxl-block d-none" data-top="20%" data-left="0"><img
            src="{{ asset('frontend/assets/img/shape/hand-bg-shape2-1.png') }}" alt="img"></div>
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title after-none before-none">Work Process</span>
            <h2 class="sec-title">How We Make a Difference</h2>
        </div>
        <div class="row gy-40 justify-content-center">
            <div class="col-lg-4 col-md-6 process-card-wrap">
                <div class="process-card">
                    <div class="process-card-thumb-wrap">
                        <div class="process-card-thumb" data-mask-src="{{ asset('frontend/assets/img/process/process-card-shape.png') }}">
                            <img src="{{ asset('frontend/assets/img/process/process-card-1-1.png') }}" alt="img">
                        </div>
                        <div class="process-card-icon">
                            <img src="{{ asset('frontend/assets/img/icon/process-icon1-1.svg') }}" alt="img">
                        </div>
                        <div class="process-card-shape">
                            <img src="{{ asset('frontend/assets/img/process-card-shape2.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="box-content">
                        <h3 class="box-title">Spreading Awareness</h3>
                        <p class="box-text">We actively raise awareness about pressing social issues, inspiring
                            individuals to take action. Through social media, community events, and outreach
                            programs, we connect people with meaningful causes.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 process-card-wrap">
                <div class="process-card">
                    <div class="process-card-thumb-wrap">
                        <div class="process-card-thumb" data-mask-src="{{ asset('frontend/assets/img/process/process-card-shape.png') }}">
                            <img src="{{ asset('frontend/assets/img/process/process-card-1-1.png') }}" alt="img">
                        </div>
                        <div class="process-card-icon">
                            <img src="{{ asset('frontend/assets/img/icon/process-icon1-2.svg') }}" alt="img">
                        </div>
                        <div class="process-card-shape">
                            <img src="{{ asset('frontend/assets/img/process-card-shape2.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="box-content">
                        <h3 class="box-title">Seamless Donations</h3>
                        <p class="box-text">Our secure and accessible donation platform allows supporters to
                            contribute effortlessly. With multiple payment options, donors can choose one-time or
                            recurring donations to make a lasting impact.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 process-card-wrap">
                <div class="process-card">
                    <div class="process-card-thumb-wrap">
                        <div class="process-card-thumb" data-mask-src="{{ asset('frontend/assets/img/process/process-card-shape.png') }}">
                            <img src="{{ asset('frontend/assets/img/process/process-card-1-1.png') }}" alt="img">
                        </div>
                        <div class="process-card-icon">
                            <img src="{{ asset('frontend/assets/img/icon/process-icon1-3.svg') }}" alt="img">
                        </div>
                        <div class="process-card-shape">
                            <img src="{{ asset('frontend/assets/img/process-card-shape2.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="box-content">
                        <h3 class="box-title">Transparency & Impact</h3>
                        <p class="box-text">We ensure that every donation is allocated effectively to impactful
                            projects. Regular updates, reports, and success stories keep our donors informed about
                            the positive changes they help create.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

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
                            <div class="testi-card-shape" data-mask-src="{{ asset('frontend/assets/img/testi-bg.webp') }}"></div>
                            <div class="testi-card_review">
                                <i class="fas fa-star"></i>
                                5.0
                            </div>
                            <div class="testi-card_profile">

                                <div class="media-left">
                                    <h3 class="testi-card_name">Brandon Dixon</h3>
                                    <span class="testi-card_desig">CEO, Founder</span>
                                </div>
                            </div>
                            <p class="testi-card_text">✨ "This NGO is truly a blessing! Their dedication to helping
                                the underprivileged is inspiring. I’ve seen real change happening because of their
                                work!"</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card3">
                            <div class="testi-card-shape" data-mask-src="{{ asset('frontend/assets/img/testi-bg.webp') }}"></div>
                            <div class="testi-card_review">
                                <i class="fas fa-star"></i>
                                5.0
                            </div>
                            <div class="testi-card_profile">

                                <div class="media-left">
                                    <h3 class="testi-card_name">Brooklyn Simmons</h3>
                                    <span class="testi-card_desig">CEO, Founder</span>
                                </div>
                            </div>
                            <p class="testi-card_text">✨ "I donated with confidence, and I’m amazed at the impact
                                they have made. Transparent, trustworthy, and truly making a difference!" </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card3">
                            <div class="testi-card-shape" data-mask-src="{{ asset('frontend/assets/img/testi-bg.webp') }}"></div>
                            <div class="testi-card_review">
                                <i class="fas fa-star"></i>
                                5.0
                            </div>
                            <div class="testi-card_profile">

                                <div class="media-left">
                                    <h3 class="testi-card_name">Michel Connor</h3>
                                    <span class="testi-card_desig">Founder</span>
                                </div>
                            </div>
                            <p class="testi-card_text">✨ "A life-changing organization! From education programs to
                                healthcare support, they are transforming lives every day."</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card3">
                            <div class="testi-card-shape" data-mask-src="{{ asset('frontend/assets/img/testi-bg.webp') }}"></div>
                            <div class="testi-card_review">
                                <i class="fas fa-star"></i>
                                5.0
                            </div>
                            <div class="testi-card_profile">

                                <div class="media-left">
                                    <h3 class="testi-card_name">Ethan David</h3>
                                    <span class="testi-card_desig">CEO, Founder</span>
                                </div>
                            </div>
                            <p class="testi-card_text">✨ "Their food distribution program helped my family when we
                                had nothing. I can't thank them enough for their kindness!"</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card3">
                            <div class="testi-card-shape" data-mask-src="{{ asset('frontend/assets/img/testi-bg.webp') }}"></div>
                            <div class="testi-card_review">
                                <i class="fas fa-star"></i>
                                5.0
                            </div>
                            <div class="testi-card_profile">

                                <div class="media-left">
                                    <h3 class="testi-card_name">Daniel Thomas</h3>
                                    <span class="testi-card_desig">CEO, Founder</span>
                                </div>
                            </div>
                            <p class="testi-card_text">✨ "They provided education support to my daughter, and today
                                she is excelling in school. This NGO is a true ray of hope!"</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card3">
                            <div class="testi-card-shape" data-mask-src="{{ asset('frontend/assets/img/testi-bg.webp') }}"></div>
                            <div class="testi-card_review">
                                <i class="fas fa-star"></i>
                                5.0
                            </div>
                            <div class="testi-card_profile">

                                <div class="media-left">
                                    <h3 class="testi-card_name">Michel Vetory</h3>
                                    <span class="testi-card_desig">CEO, Founder</span>
                                </div>
                            </div>
                            <p class="testi-card_text">"They didn’t just give me help; they gave me a new beginning.
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
@endsection
@push('js')
@endpush