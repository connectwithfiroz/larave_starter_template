<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ yield('title') }} || Al Khair Educational &amp; Charitable Trust &#8211; Lets Empower Society</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->

	<link rel="icon" href="{{ asset('frontend/img/fev.jpg') }}"type="image/jpg">
    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="{{ asset('frontend/css.fotns/nunito.css') }}" rel="stylesheet">
    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.min.css') }}">
    <!-- Swiper Js -->
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper-bundle.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <!-- Page-specific CSS -->
    @stack('header')
</head>
<body>
    <!-- =============== HEADER CONTENT  -->
     
<!-- popup-form -->
<div id="ngo-donation-popup" class="ngo-popup">
    <div class="ngo-popup-content">
        <span class="ngo-popup-close" onclick="closePopup()">×</span> <!-- Close icon -->
      <div class="ngo-popup-header">
        <img src="{{ asset('frontend/img/logo.jpg') }}" alt="Logo" class="ngo-popup-logo">
        <h2 class="ngo-popup-heading">Al Khair Educational & Charitable Trust</h2>
     
      </div>
      <p class="ngo-popup-description">Your generous donation helps us to bring change and provide support to those in need.</p> <!-- Line above the form -->
      <form class="ngo-popup-form" id="donation-form">
        <div class="row">
            <div class="col-lg-6">
            <label for="donor-name">Name:</label>
            <input type="text" id="donor-name" name="donor-name" required>
            </div>
            <div class="col-lg-6">
            <label for="donor-number">Mo. Number:</label>
            <input type="text" id="donor-number" name="donor-number" required>
            </div>
            <div class="col-lg-6">
            <label for="donor-email">Email:</label>
            <input type="email" id="donor-email" name="donor-email" required>
            </div>
            <div class="col-lg-6">
            <label for="donation-amount">Donation Amount:</label>
            <input type="number" id="donation-amount" name="donation-amount" required>
            </div>
        </div>
        <button type="button" id="donate-button">Donate Now</button>
        </form>

    </div>
</div>
  



  <!-- whats-app -->
<div class="whatsapp-container">
    <div class="whatsapp-popup" id="whatsappPopup">
        <div class="popup-header">
            <img src="{{ asset('frontend/img/fev.jpg') }}" alt="NNM Business Support Logo" class="popup-logo">
            <div>
                <h5>Al Khair Educational</h5>
                <p>Charitable Trust</p>
            </div>
            <button class="popup-close" onclick="closePopup()">×</button>
        </div>
        <div class="popup-body" style="background-image: url('{{ asset('frontend/img/whatsapp-bg.jpg') }}');">
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
    <button class="footer-btn-btn donate">
        <i class="fas fa-indian-rupee-sign"></i>Donate Now
    </button>
    <button class="footer-btn-btn contact">
        <i class="fas fa-phone"></i>
 Contact
    </button>
</div>

<div class="isi-logo">
    <img src="{{ asset('frontend/img/iso.png') }}" alt="Logo">
  </div>
  
    <!--============================== Sidemenu ============================== -->
    <div class="sidemenu-wrapper sidemenu-cart ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget woocommerce widget_shopping_cart">
                <h3 class="widget_title">Shopping cart</h3>
                <div class="widget_shopping_cart_content">
                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="{{ asset('frontend/img/product/product_thumb_1_1.png') }}" alt="Cart Image">Books</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">₹</span>940.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="{{ asset('frontend/img/product/product_thumb_1_2.png') }}" alt="Cart Image">Medicine</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">₹</span>899.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="{{ asset('frontend/img/product/product_thumb_1_3.png') }}" alt="Cart Image">Dress</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">₹</span>756.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="{{ asset('frontend/img/product/product_thumb_1_4.png') }}" alt="Cart Image">Chair</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">₹</span>723.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="{{ asset('frontend/img/product/product_thumb_1_5.png') }}" alt="Cart Image">Cloths</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">₹</span>1080.00</span>
                            </span>
                        </li>
                    </ul>
                    <p class="woocommerce-mini-cart__total total">
                        <strong>Subtotal:</strong>
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">₹</span>4398.00</span>
                    </p>
                    <p class="woocommerce-mini-cart__buttons buttons">
                        <a href="cart.html" class="th-btn wc-forward">View cart</a>
                        <a href="checkout.html" class="th-btn checkout wc-forward">Checkout</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="far fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <!--==============================  Mobile Menu ============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html"><img src="{{ asset('frontend/img/logo.jpg') }}" alt="al-khair"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li class="">
                        <a href="index.html">Home</a>
                        
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    
                    <li class="">
                        <a href="#">Mission & Vision</a>
                       
                    </li>
              
                    <li class="">
                        <a href="#">Our Management Body</a>
                    </li>
                    <li class="">
                        <a href="#">Certifications</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Donations</a>
                        <ul class="sub-menu">
                            <li><a href="donation.html">Donations</a></li>
                            <li><a href="donation-details.html">Donation Details</a></li>
                            <li><a href="donate-now.html">Donate Now</a></li>
                        </ul>
                    </li>
                    <li><a href="blog-details.html">Our Projects</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Other</a>
                        <ul class="sub-menu">
                   
                            <li><a href="blog-details.html">Zakat</a></li>
                            <li><a href="blog-details.html">Achievements</a></li>
                            <li><a href="blog-details.html">Our Gallery</a></li>
                            <li><a href="donation.html">Annual Audit Report</a></li>
                            <li><a href="donation-details.html">Work Audit Report</a></li>
                            <li><a href="blog-details.html">Our Team</a></li>
                            <li><a href="blog-details.html">Blog</a></li>
                            <li><a href="blog-details.html">Contact Us</a></li>
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
                            <a href="index.html"><img src="{{ asset('frontend/img/logo.jpg') }}" alt="al-khair"></a>
                        </div>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        <div class="info-card-wrap">
                           
                            
                            <div class="info-card info-card-text">
                                <span>Al Khair Educational & Charitable Trust</span>
                            </div>
                            <a href="#" class="membership" >
                                <p>Apply For Membership</p>
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
                                <a href="index.html"><img src="{{ asset('frontend/img/logo.jpg') }}" alt="Donat"></a>
                            </div>
                        </div>
                        <nav class="main-menu d-none d-lg-block">
                            <ul>
                                <li class="">
                                    <a href="index.html">Home</a>
                                    
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                
                                <li class="">
                                    <a href="#">Mission & Vision</a>
                                   
                                </li>
                          
                                <li class="">
                                    <a href="#">Our Management Body</a>
                                </li>
                                <li class="">
                                    <a href="#">Certifications</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Donations</a>
                                    <ul class="sub-menu">
                                        <li><a href="donation.html">Donations</a></li>
                                        <li><a href="donation-details.html">Donation Details</a></li>
                                        <li><a href="donate-now.html">Donate Now</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog-details.html">Our Projects</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Other</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-details.html">Zakat</a></li>
                                        <li><a href="blog-details.html">Achievements</a></li>
                                        <li><a href="donation.html">Annual Audit Report</a></li>
                                        <li><a href="donation-details.html">Work Audit Report</a></li>
                                        <li><a href="blog-details.html">Our Gallery</a></li>
                                        <li><a href="blog-details.html">Our Team</a></li>
                                        <li><a href="blog-details.html">Blog</a></li>
                                        <li><a href="blog-details.html">Contact Us</a></li>
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
                        <button type="button" class="icon-btn-lang" id="language-toggler">
                            <i class="far fa-globe"></i>
                          </button>
                          
                          <div class="language-dropdown" id="language-dropdown">
                            <ul>
                                <li data-lang="en">
                                    <img src="https://flagcdn.com/w40/gb.png'" width="20" alt="English Flag"> English
                                </li>
                                <li data-lang="hi">
                                    <img src="https://flagcdn.com/w40/in.png'" width="20" alt="Hindi Flag"> हिन्दी
                                </li>
                            </ul>
                          </div>
                        <button type="button" class="icon-btn sideMenuToggler">
                            <span class="badge">5</span>
                            <i class="fa-regular fa-cart-shopping"></i>
                        </button>
                        <a href="{{ route('donate.form') }}" class="th-btn style3 d-lg-block d-none"><i class="fas fa-heart me-2"></i> Donate Now</a>
                        <button type="button" class="icon-btn th-menu-toggle d-lg-none"><i class="far fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- =============== HEADER CONTENT END -->
   
    @yield('section')

    

   <!--============================== Footer Area ==============================-->
    <footer class="footer-wrapper footer-default" data-bg-src="{{ asset('frontend/bg/footer-default-bg-mask.png') }}">
        <div class="footer-bg-shape2 shape-mockup jump" data-top="20%" data-right="0">
            <img src="{{ asset('frontend/img/shape/footer-bg-shape3.png') }}" alt="img">
        </div>
        <div class="footer-bg-shape3 shape-mockup d-none" data-bottom="0" data-right="0">
            <img src="{{ asset('frontend/img/shape/footer-bg-shape2.png') }}" alt="img">
        </div>
       
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="index.html"><img src="{{ asset('frontend/img/logo.jpg') }}"alt="Donat"></a>
                                </div>
                                <p class="about-text"> Our secure online donation platform allows you to make contributions quickly and safely. Choose from various.</p>
                                <a href="contact.html" class="th-btn"><i class="fas fa-heart me-2"></i> Donate Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="blog.html">Our News</a></li>
                                    <li><a href="about.html">Our Campaign</a></li>
                                    <li><a href="contact.html">Privacy policy</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Our Service</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="donate-now.html">Give Donation</a></li>
                                    <li><a href="faq.html">Education Support</a></li>
                                    <li><a href="faq.html">Food Support</a></li>
                                    <li><a href="faq.html">Health Support</a></li>
                                    <li><a href="gallery.html">Our Campaign </a></li>
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
                                        <div class="bg-shape1" data-mask-src="{{ asset('frontend/img/shape/info_card_icon_bg_shape_1_1.png') }}"></div>
                                        <div class="bg-shape2" data-mask-src="{{ asset('frontend/img/shape/info_card_icon_bg_shape_1_1.png') }}"></div>
                                    </div>
                                    <div class="box-content">
                                        <p class="box-text">Call us any time:</p>
                                        <h4 class="box-title"><a href="tel:919053758786">+91 9053758786</a></h4>
                                    </div>
                                </div>
                                <div class="info-card">
                                    <div class="box-icon">
                                        <i class="fal fa-envelope-open"></i>
                                        <div class="bg-shape1" data-mask-src="{{ asset('frontend/img/shape/info_card_icon_bg_shape_1_1.png') }}"></div>
                                        <div class="bg-shape2" data-mask-src="{{ asset('frontend/img/shape/info_card_icon_bg_shape_1_1.png') }}"></div>
                                    </div>
                                    <div class="box-content">
                                        <p class="box-text">Email us any time:</p>
                                        <h4 class="box-title"><a href="mailto:alkhairtrust658@gmail.com">alkhairtrust658@gmail.com</a></h4>
                                    </div>
                                </div>
                                <div class="info-card">
                                    <div class="box-icon">
                                        <i class="fal fa-map"></i>
                                        <div class="bg-shape1" data-mask-src="{{ asset('frontend/img/shape/info_card_icon_bg_shape_1_1.png') }}"></div>
                                        <div class="bg-shape2" data-mask-src="{{ asset('frontend/img/shape/info_card_icon_bg_shape_1_1.png') }}"></div>
                                    </div>
                                    <div class="box-content">
                                        <p class="box-text">Address:</p>
                                        <h4 class="box-title"><a href="mailto:alkhairtrust658@gmail.com">Village Chak Rangala Tehsil.<br> Ferozepur Jhirka District.<br> Nuh State. Haryana</a></h4>
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
                            <i class="fal fa-copyright"></i> Copyright 2024 <a href="index.html">Al Khair Educational & Charitable Trust</a>. All Rights Reserved.
                        </p>
                        <a href="https://dcnexus.netlify.app" target="_blank" class="dcn">Design By DCNexus</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
</body>


    <script>
         window.onload = function() {
            if(window.location.pathname != '/donate'){
                setTimeout(function() {
      document.getElementById('ngo-donation-popup').classList.add('show');
    }, 500);
            }
    
  };
  function closePopup() {
    var popup = document.getElementById('ngo-donation-popup');
    popup.classList.remove('show'); 
  }
  document.getElementById('ngo-donation-popup').addEventListener('click', function(e) {
    if (e.target === this) {
      closePopup();
    }
  });
    </script>
    <!--============================== All Js File============================== -->
    <!-- Jquery -->
    <script src="{{ asset('frontend/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <!-- Swiper Js -->
    <script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>


    <!-- Page-specific JS -->
    @stack('js')

</html>
