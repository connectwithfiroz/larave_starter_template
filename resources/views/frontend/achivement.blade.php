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
                    <li><a href="/index">Home</a></li>
                    <li>Achievements / Awards</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Contact Area   
==============================-->
<div class="custom-certificate-section mt-5 mb-5">
    <div class="custom-certificate-card">
      <img src="{{ asset('frontend/assets/img/acchivment/1.webp') }}" alt="Registration Certificate" class="custom-certificate-image"  onclick="openCustomPopup('{{ asset('frontend/assets/img/acchivment/1.webp') }}')">
      
    </div>
 
    <div class="custom-certificate-card">
      <img src="{{ asset('frontend/assets/img/acchivment/3.webp') }}" alt="12A Certificate" class="custom-certificate-image"  onclick="openCustomPopup('{{ asset('frontend/assets/img/acchivment/3.webp') }}')">
    
    </div>
    <div class="custom-certificate-card">
      <img src="{{ asset('frontend/assets/img/acchivment/4.webp') }}" alt="12A Certificate" class="custom-certificate-image"  onclick="openCustomPopup('{{ asset('frontend/assets/img/acchivment/4.webp') }}')">
    
    </div>
    <div class="custom-certificate-card">
      <img src="{{ asset('frontend/assets/img/acchivment/5.webp') }}" alt="12A Certificate" class="custom-certificate-image"  onclick="openCustomPopup('{{ asset('frontend/assets/img/acchivment/5.webp') }}')">
    
    </div>
    <div class="custom-certificate-card">
        <img src="{{ asset('frontend/assets/img/acchivment/2.webp') }}" alt="80G Certificate" class="custom-certificate-image"  onclick="openCustomPopup('{{ asset('frontend/assets/img/acchivment/2.webp') }}')">
     
      </div>
  </div>
  
  <!-- Custom Popup Modal -->
  <div id="customImagePopup" class="custom-popup">
    <span class="custom-close" onclick="closeCustomPopup()">&times;</span>
    <img id="customPopupImage" src="" alt="Full Certificate">
  </div>

@endsection
@push('js')
<script>
function openCustomPopup(imageSrc) {
  const customPopup = document.getElementById('customImagePopup');
  const customPopupImage = document.getElementById('customPopupImage');
  customPopup.style.display = 'flex';
  customPopupImage.src = imageSrc;
}

function closeCustomPopup() {
  const customPopup = document.getElementById('customImagePopup');
  customPopup.style.display = 'none';
}


</script>
@endpush