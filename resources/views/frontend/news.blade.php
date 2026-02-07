@extends('frontend.layouts.app')

@section('title', 'Home Page')

@push('header')
<!-- extra header -->
@endpush

@section('section')

      <!-- new sections -->
 <div class="breadcumb-wrapper position-relative">

    <!-- Desktop / Tablet Image -->
    <div class="d-none d-md-block">
        <img src="{{ asset('frontend/assets/img/new_2026/Press_Release.png') }}"
             class="img-fluid w-100"
             alt="About Banner Desktop">
    </div>

    <!-- Mobile Image -->
    <div class="d-block d-md-none">
        <img src="{{ asset('frontend/assets/img/mobile-imag/press.png') }}"
             class="img-fluid w-100"
             alt="About Banner Mobile">
    </div>

    <!-- Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

    <!-- Content -->
    <div class="container position-absolute top-50 start-50 translate-middle text-center"
     style="color: #c70c52;">
        <h1 class="breadcumb-title">News</h1>
        <ul class="breadcumb-menu list-inline mb-0">
            <li class="list-inline-item"><a href="/index" class="text-white">Home</a></li>
            <li class="list-inline-item">News</li>
        </ul>
    </div>
</div>


  <!-- main containt  -->
<div class="custom-certificate-section mt-5 mb-5">
    <div class="custom-certificate-card-news">
      <img src="{{ asset('frontend/assets/img/news/news-new.jpeg') }}" alt="Registration Certificate" class="custom-certificate-image" onclick="openCustomPopup('assets/img/news/news-new.jpeg')">
    </div>
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
<div id="customImagePopup" class="custom-popup" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.8); justify-content: center; align-items: center; z-index: 9999;">
  <span class="custom-close" onclick="closeCustomPopup()" style="position: absolute; top: 20px; right: 30px; font-size: 40px; color: white; cursor: pointer;">&times;</span>
  <img id="customPopupImage" src="" alt="Full Certificate" style="max-width: 90%; max-height: 90%; border: 5px solid white; border-radius: 10px;">
</div>


  <script>
 function openCustomPopup(imagePath) {
    var popup = document.getElementById("customImagePopup");
    var popupImg = document.getElementById("customPopupImage");

    // Laravel asset() function works only in Blade, so make sure path is correct
    popupImg.src = "{{ asset('frontend') }}/" + imagePath;
    popup.style.display = "flex";
  }

  function closeCustomPopup() {
    document.getElementById("customImagePopup").style.display = "none";
  }
  </script>
 

@endsection
@push('js')
@endpush