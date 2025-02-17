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
                <h1 class="breadcumb-title">Achievements / Awards</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Achievements / Awards</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Contact Area   
==============================-->
<div class="custom-certificate-section mt-5 mb-5">
    <div class="custom-certificate-card">
      <img src="{{ asset('frontend/assets/img/acchivment/1.webp') }}" alt="Registration Certificate" class="custom-certificate-image" onclick="openCustomPopup('assets/img/acchivment/1.webp')">
      
    </div>
 
    <div class="custom-certificate-card">
      <img src="{{ asset('frontend/assets/img/acchivment/3.webp') }}" alt="12A Certificate" class="custom-certificate-image" onclick="openCustomPopup('assets/img/acchivment/3.webp')">
    
    </div>
    <div class="custom-certificate-card">
      <img src="{{ asset('frontend/assets/img/acchivment/4.webp') }}" alt="12A Certificate" class="custom-certificate-image" onclick="openCustomPopup('assets/img/acchivment/4.webp')">
    
    </div>
    <div class="custom-certificate-card">
      <img src="{{ asset('frontend/assets/img/acchivment/5.webp') }}" alt="12A Certificate" class="custom-certificate-image" onclick="openCustomPopup('assets/img/acchivment/5.webp')">
    
    </div>
    <div class="custom-certificate-card">
        <img src="{{ asset('frontend/assets/img/acchivment/2.webp') }}" alt="80G Certificate" class="custom-certificate-image" onclick="openCustomPopup('assets/img/acchivment/2.webp')">
     
      </div>
  </div>
  
  <!-- Custom Popup Modal -->
  <div id="customImagePopup" class="custom-popup">
    <span class="custom-close" onclick="closeCustomPopup()">&times;</span>
    <img id="customPopupImage" src="" alt="Full Certificate">
  </div>
  

  


<div class="container mt-4 footer-mission">
    <div class="row align-items-center text-center">
        <!-- Contact Button -->
        <div class="col-md-4">
            <a href="contact.html" class="contact-btn">Contact Us Now <i class="fas fa-arrow-right"></i></a>
        </div>

        <!-- Social Media Text -->
        <div class="col-md-4">
            <p class="social-text">Follow Us On Social Media</p>
        </div>

        <!-- Social Media Icons -->
        <div class="col-md-4">
            <div class="social-icons">
                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
@endpush