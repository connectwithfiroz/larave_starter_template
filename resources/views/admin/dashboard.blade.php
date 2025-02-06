@extends('admin.layout.app')
@section('content')
    <!--app-content open-->
    <div class="app-content">
        <section class="section">
            <!--page-header open-->
            <div class="page-header">
                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i>Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard </li>
                </ol>
                <!-- End breadcrumb -->
                @include('admin.layout.notifications')
            </div>
            <!--page-header closed-->
            
        </section>
    </div>
    <!--app-content closed-->
@endsection
