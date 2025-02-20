@extends('frontend.layouts.app')

@section('title', 'Home Page')

@push('header')
<!-- extra header -->
@endpush

@section('section')

    <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.webp" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Refund & Return Policy</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Refund & Return Policy</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Contact Area   
==============================-->

<div class="container">
    <div class="terms-container">
      

            <div class="mb-4">
                <h2 class="terms-title">No Refund And Return As It Is Donation</h2>
                
            </div>
    
    </div>
</div>
@endsection
@push('js')
@endpush