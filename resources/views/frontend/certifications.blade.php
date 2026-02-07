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
        <img src="{{ asset('frontend/assets/img/banner-26-jan/Certifications-a.png') }}"
             class="img-fluid w-100"
             alt="About Banner Desktop">
    </div>

    <!-- Mobile Image -->
    <div class="d-block d-md-none">
        <img src="{{ asset('frontend/assets/img/mobile-imag/certificat.png') }}"
             class="img-fluid w-100"
             alt="About Banner Mobile">
    </div>

    <!-- Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

    <!-- Content -->
    <div class="container position-absolute top-50 start-50 translate-middle text-center text-white">
        <h1 class="breadcumb-title">Certifications</h1>
        <ul class="breadcumb-menu list-inline mb-0">
            <li class="list-inline-item"><a href="/index" class="text-white">Home</a></li>
            <li class="list-inline-item">Certifications</li>
        </ul>
    </div>

</div>
    <!--============================== Contact Area  ==============================-->
    <div class="custom-certificate-section mt-5 mb-5">
       <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/9.webp') }}" alt="12A Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/9.webp') }}')">
            <h3>Registration Certificate</h3>
        </div>
        <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/2.webp') }}" alt="80G Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/2.webp') }}')">
            <h3>80G Certificate</h3>
        </div>
        <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/3.webp') }}" alt="12A Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/3.webp') }}')">
            <h3>12A Certificate</h3>
        </div>
        <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/6.webp') }}" alt="12A Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/6.webp') }}')">
            <h3>ISO Registration</h3>
        </div>
       
        <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/4.webp') }}" alt="12A Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/4.webp') }}')">
            <h3>CSR Registration</h3>
        </div>
        <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/10.webp') }}" alt="Registration Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/10.webp') }}')">
            <h3>MSME certificate</h3>
        </div>
       
        <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/5.webp') }}" alt="12A Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/5.webp') }}')">
            <h3>NITI Ayog</h3>
        </div>
       
        <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/7.webp') }}" alt="12A Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/7.webp') }}')">
            <h3>NGO Darpan</h3>
        </div>

        <!-- <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/11.webp') }}" alt="12A Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/11.webp') }}')">
        </div>
        <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/12.webp') }}" alt="12A Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/12.webp') }}')">
        </div> -->


        
        <!-- <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/19.webp') }}" alt="12A Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/19.webp') }}')">
                <h3>10A Certificate</h3>
        </div> -->
        <!-- <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/20.webp') }}" alt="12A Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/20.webp') }}')">
        </div> -->
        <!-- <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/21.webp') }}" alt="12A Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/21.webp') }}')">
        </div> -->
        <!-- <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/22.webp') }}" alt="12A Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/22.webp') }}')">
        </div> -->
        <!-- <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/23.webp') }}" alt="12A Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/23.webp') }}')">
                <h3>CSR certificate</h3>
        </div> -->
        <!-- <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/24.webp') }}" alt="12A Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/24.webp') }}')">
        </div> -->
        <!-- <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/25.webp') }}" alt="12A Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/25.webp') }}')">
        </div>
        <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/26.webp') }}" alt="12A Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/26.webp') }}')">
        </div> -->
        <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/27.webp') }}" alt="12A Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/27.webp') }}')">
                <h3>NGO Profile</h3>
        </div>
        <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/28.webp') }}" alt="12A Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/28.webp') }}')">
                <h3>NGO Profile</h3>
        </div>

        <!-- <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/30.webp') }}" alt="12A Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/30.webp') }}')">
        </div>
        <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/31.webp') }}" alt="12A Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/31.webp') }}')">
        </div> -->
        <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/pancard.jpeg') }}" alt="Pancard" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/pancard.jpeg') }}')">
                <h3>Pan Card</h3>
        </div>
        <div class="custom-certificate-card">
            <img src="{{ asset('frontend/assets/img/certifecate/1.webp') }}" alt="Registration Certificate" class="custom-certificate-image"
                onclick="openCustomPopup('{{ asset('frontend/assets/img/certifecate/1.webp') }}')">
            <h3>Identity Card</h3>
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