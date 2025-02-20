@extends('frontend.layouts.app')

@section('title', 'Mission')

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
                <h1 class="breadcumb-title">Mission & Vision</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/index">Home</a></li>
                    <li>Mission & Vision</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Contact Area   
==============================-->
   

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