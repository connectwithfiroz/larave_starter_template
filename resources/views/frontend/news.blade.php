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
                <h1 class="breadcumb-title">Press Release</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>Press Release</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Contact Area   
==============================-->
<div class="custom-certificate-section mt-5 mb-5">
    <div class="custom-certificate-card-news">
      <img src="{{ asset('frontend/assets/img/news/1.jpeg') }}" alt="Registration Certificate" class="custom-certificate-image" onclick="openCustomPopup('assets/img/news/1.jpeg')">
      
    </div>
 
    <div class="custom-certificate-card-news">
      <img src="{{ asset('frontend/assets/img/news/3.jpeg') }}" alt="12A Certificate" class="custom-certificate-image" onclick="openCustomPopup('assets/img/news/3.jpeg')">
    
    </div>
    <div class="custom-certificate-card-news">
      <img src="{{ asset('frontend/assets/img/news/4.jpeg') }}" alt="12A Certificate" class="custom-certificate-image" onclick="openCustomPopup('assets/img/news/4.jpeg')">
    
    </div>
    <div class="custom-certificate-card-news">
      <img src="{{ asset('frontend/assets/img/news/5.jpeg') }}" alt="12A Certificate" class="custom-certificate-image" onclick="openCustomPopup('assets/img/news/5.jpeg')">
    
    </div>
    <div class="custom-certificate-card-news">
        <img src="{{ asset('frontend/assets/img/news/6.jpeg') }}" alt="80G Certificate" class="custom-certificate-image" onclick="openCustomPopup('assets/img/news/6.jpeg')">
     
      </div>
    <div class="custom-certificate-card-news">
        <img src="{{ asset('frontend/assets/img/news/8.jpeg') }}" alt="80G Certificate" class="custom-certificate-image" onclick="openCustomPopup('assets/img/news/8.jpeg')">
     
      </div>
    <div class="custom-certificate-card-news">
        <img src="{{ asset('frontend/assets/img/news/9.jpeg') }}" alt="80G Certificate" class="custom-certificate-image" onclick="openCustomPopup('assets/img/news/9.jpeg')">
     
      </div>
    <div class="custom-certificate-card-news">
        <img src="{{ asset('frontend/assets/img/news/10.jpeg') }}" alt="80G Certificate" class="custom-certificate-image" onclick="openCustomPopup('assets/img/news/10.jpeg')">
     
      </div>
    <div class="custom-certificate-card-news">
        <img src="{{ asset('frontend/assets/img/news/11.jpeg') }}" alt="80G Certificate" class="custom-certificate-image" onclick="openCustomPopup('assets/img/news/11.jpeg')">
     
      </div>
    <div class="custom-certificate-card-news">
        <img src="{{ asset('frontend/assets/img/news/12.jpeg') }}" alt="80G Certificate" class="custom-certificate-image" onclick="openCustomPopup('assets/img/news/12.jpeg')">
     
      </div>
    <div class="custom-certificate-card-news">
        <img src="{{ asset('frontend/assets/img/news/13.jpeg') }}" alt="80G Certificate" class="custom-certificate-image" onclick="openCustomPopup('assets/img/news/13.jpeg')">
     
      </div>
  
  </div>
  
  <!-- Custom Popup Modal -->
  <div id="customImagePopup" class="custom-popup">
    <span class="custom-close" onclick="closeCustomPopup()">&times;</span>
    <img id="customPopupImage" src="" alt="Full Certificate">
  </div>

@endsection
@push('js')
@endpush