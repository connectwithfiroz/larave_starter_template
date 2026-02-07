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
        <img src="{{ asset('frontend/assets/img/new_2026/Achivement_Award.png') }}"
             class="img-fluid w-100"
             alt="About Banner Desktop">
    </div>

    <!-- Mobile Image -->
    <div class="d-block d-md-none">
        <img src="{{ asset('frontend/assets/img/mobile-imag/achivment.png') }}"
             class="img-fluid w-100"
             alt="About Banner Mobile">
    </div>

    <!-- Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

    <!-- Content -->
    <div class="container position-absolute top-50 start-50 translate-middle text-center text-white">
        <h1 class="breadcumb-title">Achivement</h1>
        <ul class="breadcumb-menu list-inline mb-0">
            <li class="list-inline-item"><a href="/index" class="text-white">Home</a></li>
            <li class="list-inline-item">Achivement</li>
        </ul>
    </div>

</div>

   <!-- new sections -->
 


    <!--==============================
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