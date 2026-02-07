@extends('frontend.layouts.app')

@section('title', 'Mission')

@push('header')
<!-- extra header -->
@endpush

@section('section')


  <!-- new sections -->
 <div class="breadcumb-wrapper position-relative">

    <!-- Desktop / Tablet Image -->
    <div class="d-none d-md-block">
        <img src="{{ asset('frontend/assets/img/new_2026/Mission_Vision.png') }}"
             class="img-fluid w-100"
             alt="About Banner Desktop">
    </div>

    <!-- Mobile Image -->
    <div class="d-block d-md-none">
        <img src="{{ asset('frontend/assets/img/mobile-imag/mision.png') }}"
             class="img-fluid w-100"
             alt="About Banner Mobile">
    </div>

    <!-- Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

    <!-- Content -->
    <div class="container position-absolute top-50 start-50 translate-middle text-center"
     style="color: #c70c52;">
        <h1 class="breadcumb-title">Our Mission</h1>
        <ul class="breadcumb-menu list-inline mb-0">
            <li class="list-inline-item"><a href="/index" class="text-white">Home</a></li>
            <li class="list-inline-item">Our Mission</li>
        </ul>
    </div>
</div>
   <!-- main containt -->

<div class="container mv-section overflow-hidden">
        <div class="row">
        <div class="col-md-6">
            <div class="mv-icon-wrapper">
                <i class="fas fa-paper-plane"></i>
            </div>
            <div class="mv-title">MISSION</div>
            <div class="mv-content">
                Our mission is to uplift underprivileged communities by providing access to quality education, healthcare, and sustainable development programs. We strive to create opportunities for skill enhancement, economic empowerment, and social inclusion. Through innovative initiatives and strategic partnerships, we work to eliminate barriers that hinder progress. Our goal is to foster a society where every individual, regardless of background, has the chance to thrive. By focusing on long-term impact, we ensure that our efforts lead to self-sufficiency, dignity, and a brighter future. With a commitment to compassion and integrity, we aim to transform lives, empower the vulnerable, and contribute to a more equitable and just world for future generations.
            </div>
        </div>
        <div class="col-md-6">
            <div class="mv-icon-wrapper">
                <i class="fas fa-eye"></i>
            </div>
            <div class="mv-title">VISION</div>
            <div class="mv-content">
                Our vision is a world free from poverty, illiteracy, and inequality, where every individual has the resources to lead a dignified life. We aspire to build a society where access to education, healthcare, and economic opportunities is not a privilege but a right. By fostering sustainable development, gender equality, and social justice, we seek to empower communities to break cycles of poverty. We envision a future where collective action drives positive change, ensuring that no one is left behind. Through relentless dedication, innovation, and collaboration, we strive to create a compassionate, progressive world that nurtures inclusivity, sustainability, and human dignity for all generations to come.
            </div>
        </div>
    </div>
</div>

@endsection
@push('js')
@endpush