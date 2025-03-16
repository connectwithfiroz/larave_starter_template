@extends('frontend.layouts.app')

@section('title', 'Our Developer')

@push('header')
<!-- extra header -->
 <style>

.box {
	border-radius: 150px;
	background:#fff;
	position:relative;
	overflow: hidden;
	text-align:center;
}
.box:before {
    position: absolute;
    content: '';
    left: 0px;
    top: 0px;
    width: 0px;
    height: 100%;
    border-radius: 150px;
    box-shadow: inset 0 0 25px rgba(0,0,0,0.30);
    transition: all 0.3s ease;
    background-image: linear-gradient(to right, var(--theme-color) 0%, #64b2cd 100%);
}
.box:hover:before {
    width: 100%;
}
.box:hover .image-wrapper {
	padding:0;
}
.box:hover .box-desc {
	color:#fff;
}
.box:hover .social li a, .box:hover h5, .box:hover p {
	background:#fff;
	background-image: none;
	color:#000;
}
.box:hover .social li a:hover {
	background:#1d1d1d;
	color:#fff;
}
.image-wrapper {
    position: relative;
	max-width: 210px;
    max-height: 210px;
	margin:0 auto;
    overflow: hidden;
    border-radius: 50%;
    padding: 15px;
    transition: all 0.5s ease;
    box-shadow: inset 0px 0px 20px rgba(0,0,0,0.20);
}
.image-wrapper img {
    border-radius: 50%;
    transition: all 500ms ease;
}
.box-desc {
	position:relative;
}
ul.social {
	padding:0;
}
ul.social li {
	display:inline-block;
	list-style-type:none;
}
ul.social li a {
	position:relative;
	width: 36px;
    height: 36px;
	background-image: linear-gradient(to right, #3c70a4 0%, #64b2cd 100%);
	display:inline-block;
	line-height:36px;
	border-radius:50%;
	color:#fff;
	transition: all .5s ease;
}

 </style>
@endpush

@section('section')
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend/assets/img/bg/breadcumb-bg.webp') }}" data-overlay="theme">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Our Developer</h1>
            <ul class="breadcumb-menu">
                <li><a href="/index">Home</a></li>
                <li>Our Developer</li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
	<div class="row my-2">
		<div class="col-sm-6 col-lg-3 my-auto">
			<div class="box shadow-sm p-4">
				<div class="image-wrapper mb-3">
					<img class="img-fluid" src="https://media.licdn.com/dms/image/v2/D4D03AQGrbhSeswniHA/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1709828290115?e=1746057600&v=beta&t=7csIz8YFCkZ4RubNkwhCcHHcENlFYV4xEms3tjvvPBE" alt="..." />
				</div>
				<div class="box-desc">
					<h5>Firoz Ansari</h5>
					<h6>Full Stack Developer</ht>
					<p>3+ years of experiences</p>
				</div>
				<ul class="social">
					<li><a href="https://www.linkedin.com/in/hifiroz" target="_blank"><i class="fab fa-linkedin"></i></a></li>
					<li><a href="tel:+918789701916"><i class="fa fa-phone-alt"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="col-sm-6 col-lg-3 my-auto">
			<div class="box shadow-sm p-4">
				<div class="image-wrapper mb-3">
					<img class="img-fluid" src="https://media.licdn.com/dms/image/v2/D5635AQHqmA0CYthwvg/profile-framedphoto-shrink_400_400/profile-framedphoto-shrink_400_400/0/1724653920338?e=1742724000&v=beta&t=pfhRgH86q4blBv2JxOc4zph5tGdSJNmzRxfSzSWpwpo" alt="..." />
				</div>
				<div class="box-desc">
					<h5>SHAHBAZ ANJOOM</h5>
					<h6>Frontend Developer</ht>
					<p>1+ year of experiences</p>
				</div>
				<ul class="social">
					<li><a href="https://www.linkedin.com/in/shahbaz-anjoom-55461b229" target="_blank"><i class="fab fa-linkedin"></i></a></li>
					<li><a href="tel:+91 6287 011 200"><i class="fa fa-phone-alt"></i></a></li>
				</ul>
			</div>
		</div>
		
	</div>
</div>	
	
@endsection
@push('js')
@endpush