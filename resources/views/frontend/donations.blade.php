@extends('frontend.layouts.app')

@section('title', 'Donation')

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
                <h1 class="breadcumb-title">Donations</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/index">Home</a></li>
                    <li>Donations</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Contact Area   
==============================-->
<section class="space" id="donation-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="title-area text-center">
                    <span class="sub-title before-none after-none"><i class="far fa-heart text-theme"></i> Lets Start Donating</span>
                    <h2 class="sec-title">See Your Impact: Transparent
                        Donation Causes</h2>
                </div>
            </div>
        </div>
        <div class="row gy-30">
            <div class="col-xl-6">
                <div class="donation-card style3">
                    <div class="box-thumb">
                        <img src="{{ asset('frontend/assets/img/dontaing/ramzan.webp') }}" alt="image">
                        <div class="donation-card-tag">65%</div>
                        <div class="donation-card-shape" data-mask-src="{{ asset('frontend/assets/img/donation/donation-card-shape2-1.png') }}"></div>
                    </div>
                    <div class="box-content">
                        <h3 class="box-title"><a href="/donate">Ramzan: Support Families in Need</a></h3>
                        <p>"Together, we can create a brighter future. Become a part of our mission and help us bring positive change to those in need"</p>
                        <div class="donation-card_progress-wrap">

                            <div class="progress">
                                <div class="progress-bar" style="width: 40%;">
                                </div>
                            </div>
                            <div class="donation-card_progress-content">
                                <span class="donation-card_raise">Raised <span class="donation-card_raise-number">50k</span></span>
                                <span class="donation-card_goal">Goal <span class="donation-card_goal-number">₹3 Lac</span></span>
                            </div>
                        </div>
                        <a href="/donate" class="th-btn donate_btn style6">Donate Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="donation-card style3">
                    <div class="box-thumb">
                        <img src="{{ asset('frontend/assets/img/dontaing/RAMADAN_MAY05.webp') }}" alt="image">
                        <div class="donation-card-tag bg-theme2">55%</div>
                        <div class="donation-card-shape" data-mask-src="{{ asset('frontend/assets/img/donation/donation-card-shape2-1.png') }}"></div>
                    </div>
                    <div class="box-content">
                        <h3 class="box-title"><a href="/donate">Iftaar: Provide Meals for the Needy</a></h3>
                        <p>"Every small effort leads to a big impact. Join us in making a difference and building a better world for everyone"</p>
                        <div class="donation-card_progress-wrap">

                            <div class="progress">
                                <div class="progress-bar" style="width: 40%;">
                                </div>
                            </div>
                            <div class="donation-card_progress-content">
                                <span class="donation-card_raise">Raised <span class="donation-card_raise-number">60k</span></span>
                                <span class="donation-card_goal">Goal <span class="donation-card_goal-number">₹5 Lac</span></span>
                            </div>
                        </div>
                        <a href="/donate" class="th-btn donate_btn style6">Donate Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="donation-card style3">
                    <div class="box-thumb">
                        <img src="{{ asset('frontend/assets/img/dontaing/zakat.webp') }}" alt="image">
                        <div class="donation-card-tag">35%</div>
                        <div class="donation-card-shape" data-mask-src="{{ asset('frontend/assets/img/donation/donation-card-shape2-1.png') }}"></div>
                    </div>
                    <div class="box-content">
                        <h3 class="box-title"><a href="/donate">Zakat: Help the Poor & Orphans</a></h3>
                        <p>"Your support can transform lives. Partner with us to uplift communities and bring hope to those who need it most."</p>
                        <div class="donation-card_progress-wrap">

                            <div class="progress">
                                <div class="progress-bar" style="width: 35%;">
                                </div>
                            </div>
                            <div class="donation-card_progress-content">
                                <span class="donation-card_raise">Raised <span class="donation-card_raise-number">50k</span></span>
                                <span class="donation-card_goal">Goal <span class="donation-card_goal-number">₹5Lac</span></span>
                            </div>
                        </div>
                        <a href="/donate" class="th-btn donate_btn style6">Donate Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="donation-card style3">
                    <div class="box-thumb">
                        <img src="{{ asset('frontend/assets/img/dontaing/3.webp') }}" alt="image">
                        <div class="donation-card-tag bg-theme2">45%</div>
                        <div class="donation-card-shape" data-mask-src="{{ asset('frontend/assets/img/donation/donation-card-shape2-1.png') }}"></div>
                    </div>
                    <div class="box-content">
                        <h3 class="box-title"><a href="/donate">Grocery Distributions: Fund a Child’s Future</a></h3>
                        <p>"Alone we can do so little, but together we can do so much. Join our movement and be a force for good!"</p>
                        <div class="donation-card_progress-wrap">

                            <div class="progress">
                                <div class="progress-bar" style="width: 30%;">
                                </div>
                            </div>
                            <div class="donation-card_progress-content">
                                <span class="donation-card_raise">Raised <span class="donation-card_raise-number">45k</span></span>
                                <span class="donation-card_goal">Goal <span class="donation-card_goal-number">₹5 Lac</span></span>
                            </div>
                        </div>
                        <a href="/donate" class="th-btn donate_btn style6">Donate Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="donation-card style3">
                    <div class="box-thumb">
                        <img src="{{ asset('frontend/assets/img/dontaing/borewill.webp') }}" alt="image">
                        <div class="donation-card-tag">20%</div>
                        <div class="donation-card-shape" data-mask-src="{{ asset('frontend/assets/img/donation/donation-card-shape2-1.png') }}"></div>
                    </div>
                    <div class="box-content">
                        <h3 class="box-title"><a href="/donate">Water Crisis: Provide Clean Drinking Water</a></h3>
                        <p>"A single step towards kindness can change lives. Contribute, volunteer, or donate—every action counts!"</p>
                        <div class="donation-card_progress-wrap">

                            <div class="progress">
                                <div class="progress-bar" style="width: 20%;">
                                </div>
                            </div>
                            <div class="donation-card_progress-content">
                                <span class="donation-card_raise">Raised <span class="donation-card_raise-number">1 Lac</span></span>
                                <span class="donation-card_goal">Goal <span class="donation-card_goal-number">₹10 Lac</span></span>
                            </div>
                        </div>
                        <a href="/donate" class="th-btn donate_btn style6">Donate Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="donation-card style3">
                    <div class="box-thumb">
                        <img src="{{ asset('frontend/assets/img/dontaing/medical.jpeg') }}" alt="image">
                        <div class="donation-card-tag bg-theme2">35%</div>
                        <div class="donation-card-shape" data-mask-src="{{ asset('frontend/assets/img/donation/donation-card-shape2-1.png') }}"></div>
                    </div>
                    <div class="box-content">
                        <h3 class="box-title"><a href="/donate">Medical Health or People React Acuter.</a></h3>
                        <p>"Together, we can uplift communities, spread hope, and make the world a better place. Be a part of the change!"</p>
                        <div class="donation-card_progress-wrap">

                            <div class="progress">
                                <div class="progress-bar" style="width: 35%;">
                                </div>
                            </div>
                            <div class="donation-card_progress-content">
                                <span class="donation-card_raise">Raised <span class="donation-card_raise-number">3 Lac</span></span>
                                <span class="donation-card_goal">Goal <span class="donation-card_goal-number">₹7Lac</span></span>
                            </div>
                        </div>
                        <a href="/donate" class="th-btn donate_btn style6">Donate Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="donation-card style3">
                    <div class="box-thumb">
                        <img src="{{ asset('frontend/assets/img/dontaing/pregnant.jpeg') }}" alt="image">
                        <div class="donation-card-tag bg-theme2">20%</div>
                        <div class="donation-card-shape" data-mask-src="{{ asset('frontend/assets/img/donation/donation-card-shape2-1.png') }}"></div>
                    </div>
                    <div class="box-content">
                        <h3 class="box-title"><a href="/donate">Medical Health or People React Acuter.</a></h3>
                        <p>"Every action matters! Support our cause, contribute, and help bring positive change to those in need."</p>
                        <div class="donation-card_progress-wrap">

                            <div class="progress">
                                <div class="progress-bar" style="width: 30%;">
                                </div>
                            </div>
                            <div class="donation-card_progress-content">
                                <span class="donation-card_raise">Raised <span class="donation-card_raise-number">1 Lac</span></span>
                                <span class="donation-card_goal">Goal <span class="donation-card_goal-number">₹5Lac</span></span>
                            </div>
                        </div>
                        <a href="/donate" class="th-btn donate_btn style6">Donate Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="donation-card style3">
                    <div class="box-thumb">
                        <img src="{{ asset('frontend/assets/img/dontaing/blanket.jpeg') }}" alt="image">
                        <div class="donation-card-tag bg-theme2">55%</div>
                        <div class="donation-card-shape" data-mask-src="{{ asset('frontend/assets/img/donation/donation-card-shape2-1.png') }}"></div>
                    </div>
                    <div class="box-content">
                        <h3 class="box-title"><a href="/donate">Medical Health or People React Acuter.</a></h3>
                        <p>"Your contribution can empower lives and create endless opportunities. Join hands with us to spread hope!"</p>
                        <div class="donation-card_progress-wrap">

                            <div class="progress">
                                <div class="progress-bar" style="width: 65%;">
                                </div>
                            </div>
                            <div class="donation-card_progress-content">
                                <span class="donation-card_raise">Raised <span class="donation-card_raise-number">30k</span></span>
                                <span class="donation-card_goal">Goal <span class="donation-card_goal-number">₹2Lac</span></span>
                            </div>
                        </div>
                        <a href="/donate" class="th-btn donate_btn style6">Donate Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
            </div>

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
@endpush