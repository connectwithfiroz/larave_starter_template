<!-- copy before updating withnew design 16/02/2025 -->
@include('frontend.expiration')
<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') || Al Khair Educational &amp; Charitable Trust &#8211; Lets Empower Society</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->

    <link rel="icon" href="{{ asset('frontend/assets/img/fev.webp') }}" type="image/webp">
    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="{{ asset('frontend/assets/css.fotns/nunito.css') }}" rel="stylesheet">
    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.min.css') }}">
    <!-- Swiper Js -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    @stack('header')
</head>

<body>
    <!-- popup-form -->
    <div id="ngo-donation-popup" class="ngo-popup">
        <div class="ngo-popup-content">
            <span class="ngo-popup-close" onclick="closePopup()">×</span> <!-- Close icon -->
            <div class="ngo-popup-header">
                <img src="{{ asset('frontend/assets/img/logo.webp') }}" alt="Logo" class="ngo-popup-logo">
                <h2 class="ngo-popup-heading">Al Khair Educational & Charitable Trust</h2>
            </div>
            <p class="ngo-popup-description">Your generous donation helps us to bring change and provide support to
                those in need.</p> <!-- Line above the form -->
            <form class="ngo-popup-form" action="/donate" id="donationForm">
                <input type="hidden" name="for" value="Not Selected">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="donor-name">Name:</label>
                        <input type="text" id="donor-name" name="donor-name" required pattern="[A-Za-z\s]{3,}"
                            title="Only letters and spaces, minimum 3 characters">
                    </div>
                    <div class="col-lg-6">
                        <label for="donor-number">Mo. Number:</label>
                        <input type="text" id="donor-number" name="donor-number" required pattern="\d{10}"
                            title="Enter a valid 10-digit mobile number">
                    </div>
                    <div class="col-lg-6">
                        <label for="donor-email">Email:</label>
                        <input type="email" id="donor-email" name="donor-email" required>
                    </div>
                    <div class="col-lg-6">
                        <label for="donation-amount">Donation Amount:</label>
                        <input type="number" id="donation-amount" name="donation-amount" required min="1" step="0.01"
                            title="Amount must be greater than 0">
                    </div>
                </div>
                <button type="submit">Donate Now</button>
            </form>

        </div>
    </div>



    <!-- whats-app -->
    <div class="whatsapp-container">
        <div class="whatsapp-popup" id="whatsappPopup">
            <div class="popup-header">
                <img src="{{ asset('frontend/assets/img/fev.webp') }}" alt="NNM Business Support Logo"
                    class="popup-logo">
                <div>
                    <h5>Al Khair Educational</h5>
                    <p>Charitable Trust</p>
                </div>
                <button class="popup-close" onclick="closePopup()">×</button>
            </div>
            <div class="popup-body" style="background-image: url(assets/img/whatsapp-bg.webp);">
                <p>Hello, I am interested in your services. Kindly, contact me for more details!</p>

            </div>
            <div class="popup-footer">
                <a href="https://wa.me/919053758786" class="start-chat-btn" target="_blank">
                    <i class="fab fa-whatsapp"></i> Start Chat
                </a>
            </div>

        </div>

        <div class="whatsapp-icon" onclick="openPopup()">
            <div class="wave"></div>
            <i class="fab fa-whatsapp"></i>
        </div>
    </div>

    <!-- Mobile Bottom Fixed Buttons -->
    <div class="footer-nav-btn">
        <button class="footer-btn-btn donate donate_btn">
            <i class="fas fa-indian-rupee-sign"></i>Donate Now
        </button>

        <button class="footer-btn-btn contact">
            <i class="fas fa-phone"></i>
            <a href="tel:919053758786">Contact</a>
        </button>
    </div>

    <div class="isi-logo">
        <img src="{{ asset('frontend/assets/img/iso.webp') }}" alt="Logo">
    </div>


    <!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{ route('index') }}"><img src="{{ asset('frontend/assets/img/logo.webp') }}"
                        alt="al-khair"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li class="">
                        <a href="{{ route('index') }}" {{ request()->routeIs('index') ? 'active' : '' }}>Home</a>

                    </li>
                    <li><a href="/about">About Us</a></li>

                    <li class="active">
                        <a href="/mission">Mission & Vision</a>

                    </li>

                    <li class="">
                        <a href="{{ route('managment-body') }}">Our Management Body</a>
                    </li>
                    <li class="">
                        <a href="{{ route('certifications') }}">Certifications</a>
                    </li>
                    <li class="">
                        <a href="{{ route('zakat') }}">Zakat</a>
                    </li>
                    <li class="">
                        <a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'active' : '' }}">Our
                            Gallery</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Donations</a>
                        <ul class="sub-menu">
                            <li><a href="/donate">Donation Now</a></li>
                            <li><a href="{{  route('dontaions') }}">Donations Details</a></li>
                            <li><a href="/construction">Our Construction Projects</a></li>

                        </ul>
                    </li>
                    <li><a href="{{ route('our-project') }}">Our Projects</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Other</a>
                        <ul class="sub-menu">


                            <li><a href="{{ route('achivement') }}"
                                    class="{{ request()->routeIs('achivement') ? 'active' : '' }}">Achievements</a></li>
                            <li><a href="{{ route('news') }}">Press Release</a></li>
                            <li><a href="{{ route('our-team') }}">Our Team</a></li>

                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            <li><a href="{{ route('developer') }}"> Our Developer</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--============================== Header Area =============================-->
    <header class="th-header header-default">
        <div class="menu-top">
            <div class="container-fluid px-0 px-md-5">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-logo">
                            <a href="{{ route('index') }}"><img src="{{ asset('frontend/assets/img/logo.webp') }}"
                                    alt="al-khair"></a>
                        </div>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        <div class="info-card-wrap">


                            <div class="info-card info-card-text">
                                <span>Al Khair Educational & Charitable Trust</span>
                            </div>
                            <a href="{{  route('volunteer.form') }}" class="membership">
                                <p>Apply For Volunteer</p>
                                <i class="fas fa-users"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-auto header-social-col">

                        <div class="th-social">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="container-fluid px-0 px-md-5">
                <div class="menu-area">
                    <div class="menu-area-wrap">
                        <div class="col-auto d-inline-block d-lg-none">
                            <div class="header-logo">
                                <a href="{{ route('index') }}"><img src="{{ asset('frontend/assets/img/logo.webp') }}"
                                        alt="Donat"></a>
                            </div>
                        </div>
                        <nav class="main-menu d-none d-lg-block">
                            <ul>
                                <li class="">
                                    <a href="{{ route('index') }}">Home</a>

                                </li>
                                <li><a href="/about">About Us</a></li>

                                <li class="">
                                    <a href="/mission">Mission & Vision</a>

                                </li>

                                <li class="">
                                    <a href="{{ route('managment-body') }}">Our Management Body</a>
                                </li>
                                <li class="">
                                    <a href="{{ route('certifications') }}">Certifications</a>
                                </li>
                                <li class="">
                                    <a href="{{ route('zakat') }}">Zakat</a>
                                </li>
                                <li class="">
                                    <a href="{{ route('gallery') }}">Our Gallery</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Donations</a>
                                    <ul class="sub-menu">
                                        <li><a href="/donate">Donation Now</a></li>
                                        <li><a href="{{  route('dontaions') }}">Donations Details</a></li>
                                        <li><a href="/construction">Our Construction Projects</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('our-project') }}">Our Projects</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Other</a>
                                    <ul class="sub-menu">

                                        <li><a href="{{ route('achivement') }}">Achievements</a></li>
                                        <li><a href="{{ route('news') }}">Press Release</a></li>
                                        <li><a href="{{ route('our-team') }}">Our Team</a></li>
                                        <!-- <li><a href="blog-details.html">Blog</a></li> -->
                                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                        <li><a href="{{ route('developer') }}">Our Developer</a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div class="header-notice">
                            <a href="#" class="header-login-box">

                                <i class="fas fa-sign-in-alt"></i> <!-- Login icon -->

                                <p>Login</p>
                            </a>
                        </div>
                    </div>
                    <div class="header-button">
                        <!-- Language Switcher Button -->
                        <button type="button" id="language-toggler">
                            <i class="far fa-globe"></i>
                        </button>

                        <!-- Custom Dropdown -->
                        <div class="language-dropdown" id="language-dropdown">
                            <ul>
                                <li data-lang="en">
                                    <img src="https://flagcdn.com/w40/gb.png" width="20" alt="English Flag"> English
                                </li>
                                <li data-lang="hi">
                                    <img src="https://flagcdn.com/w40/in.png" width="20" alt="Hindi Flag"> हिन्दी
                                </li>
                            </ul>
                        </div>

                        <!-- Google Translate Element (Hidden) -->
                        <div id="google_translate_element"></div>
                        <!-- <button type="button" class="icon-btn sideMenuToggler">
                        <span class="badge">5</span>
                        <i class="fa-regular fa-cart-shopping"></i>
                        </button> -->
                        <a href="/donate" class="th-btn style3 d-lg-block d-none donate_btn"><i
                                class="fas fa-heart me-2"></i> Donate Now</a>
                        <button type="button" class="icon-btn th-menu-toggle d-lg-none"><i
                                class="far fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('section')


    <!--============================== Footer Area ==============================-->
    <footer class="footer-wrapper footer-default"
        data-bg-src="{{ asset('frontend/assets/img/bg/footer-default-bg-mask.png') }}">
        <div class="footer-bg-shape2 shape-mockup jump" data-top="20%" data-right="0">
            <img src="{{ asset('frontend/assets/img/shape/footer-bg-shape3.png') }}" alt="img">
        </div>
        <div class="footer-bg-shape3 shape-mockup d-none" data-bottom="0" data-right="0">
            <img src="{{ asset('frontend/assets/img/shape/footer-bg-shape2.png') }}" alt="img">
        </div>

        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="{{ route('index') }}"><img
                                            src="{{ asset('frontend/assets/img/logo.webp') }}" alt="Donat"></a>
                                </div>
                                <p class="about-text">Our secure online donation system ensures fast and safe
                                    contributions. Support your cause with ease and confidence.</p>
                                <a href="/donate" class="th-btn donate_btn"><i class="fas fa-heart me-2"></i>
                                    Donate Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/mission">Mission & Vision</a></li>
                                    <li><a href="{{ route('managment-body') }}">Our Management Body</a></li>
                                    <li><a href="{{ route('certifications') }}">Certifications</a></li>
                                    <li><a href="{{ route('zakat') }}">Zakat</a></li>
                                    <li><a href="{{ route('gallery') }}">Our Gallery</a></li>
                                    <li><a href="{{ route('developer') }}">Our Developer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">

                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ route('donate.form') }}">Donations</a></li>
                                    <li><a href="{{ route('our-project') }}">Our Projects</a></li>
                                    <li><a href="{{ route('achivement') }}">Achievements</a></li>
                                    <li><a href="{{ route('our-team') }}">Our Team</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    <li><a href="{{ route('terms-conditions') }}">Terms & Conditions</a></li>
                                    <li><a href="{{ route('refund-return-policy') }}">Refund & Return Policy</a></li>
                                    <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <div class="th-widget-contact">
                                <h3 class="widget_title">Contact Us</h3>
                                <div class="info-card">
                                    <div class="box-icon">
                                        <i class="fal fa-phone"></i>
                                        <div class="bg-shape1"
                                            data-mask-src="{{ asset('frontend/assets/img/shape/info_card_icon_bg_shape_1_1.png') }}">
                                        </div>
                                        <div class="bg-shape2"
                                            data-mask-src="{{ asset('frontend/assets/img/shape/info_card_icon_bg_shape_1_1.png') }}">
                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <p class="box-text">Call us any time:</p>
                                        <h4 class="box-title"><a href="tel:919053758786">+91 9053758786</a></h4>
                                    </div>
                                </div>
                                <div class="info-card">
                                    <div class="box-icon">
                                        <i class="fal fa-envelope-open"></i>
                                        <div class="bg-shape1"
                                            data-mask-src="{{ asset('frontend/assets/img/shape/info_card_icon_bg_shape_1_1.png') }}">
                                        </div>
                                        <div class="bg-shape2"
                                            data-mask-src="{{ asset('frontend/assets/img/shape/info_card_icon_bg_shape_1_1.png') }}">
                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <p class="box-text">Email us any time:</p>
                                        <h4 class="box-title"><a
                                                href="mailto:alkhairtrust658@gmail.com">alkhairtrust658@gmail.com</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="info-card">
                                    <div class="box-icon">
                                        <i class="fal fa-map"></i>
                                        <div class="bg-shape1"
                                            data-mask-src="{{ asset('frontend/assets/img/shape/info_card_icon_bg_shape_1_1.png') }}">
                                        </div>
                                        <div class="bg-shape2"
                                            data-mask-src="{{ asset('frontend/assets/img/shape/info_card_icon_bg_shape_1_1.png') }}">
                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <p class="box-text">Address:</p>
                                        <h4 class="box-title"><a href="">Galleria Mall ,<br> Manu Marg Capital Alwar
                                                <br>Rajsthan 301001</a></h4>
                                    </div>
                                </div>
                                <div class="th-social style2">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row gy-3 align-items-center">
                    <div class="col-lg-12 copy-dcn">
                        <p class="copyright-text text-center">
                            <i class="fal fa-copyright"></i> Copyright 2024 <a href="{{ route('index') }}">Al Khair
                                Educational &
                                Charitable Trust</a>. All Rights Reserved.
                        </p>
                        <a href="https://dcnexus.netlify.app" target="_blank" class="dcn">Design By DCNexus +91
                            7457024841</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>





    <!-- Google Translate Script -->
    <script>
        function loadGoogleTranslate() {
            if (!window.google || !google.translate) {
                console.error("Google Translate failed to load.");
                return;
            }
            new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
        }

        // Script Dynamically Load Kro
        (function () {
            var script = document.createElement('script');
            script.src = "https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate";
            script.async = true;
            document.body.appendChild(script);
        })();

        // Language Change Function
        function changeLanguage(lang) {
            let selectBox = document.querySelector(".goog-te-combo");
            if (selectBox) {
                selectBox.value = lang;
                selectBox.dispatchEvent(new Event("change"));
                document.getElementById("language-dropdown").style.display = "none";
            } else {
                console.error("Google Translate not ready.");
            }
        }

        // Dropdown Toggle
        document.getElementById("language-toggler").addEventListener("click", function () {
            let dropdown = document.getElementById("language-dropdown");
            dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
        });

        // Language Select Event
        document.querySelectorAll(".language-dropdown ul li").forEach(item => {
            item.addEventListener("click", function () {
                let selectedLang = this.getAttribute("data-lang");
                changeLanguage(selectedLang);
            });
        });

        // Hide Default Google Dropdown
        setInterval(() => {
            let selectBox = document.querySelector(".goog-te-combo");
            if (selectBox) selectBox.style.display = "none";
        }, 1000);
    </script>
    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <!-- Swiper Js -->
    <script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('frontend/assets/js/jquery-ui.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.js') }}"></script>
    <!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script> -->



    <!-- Main Js File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <!-- Page-specific JS -->
    @stack('js')
</body>

</html>