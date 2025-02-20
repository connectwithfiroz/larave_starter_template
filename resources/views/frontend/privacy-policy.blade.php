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
                <h1 class="breadcumb-title">Privacy Policy</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Privacy Policy</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Contact Area   
==============================-->

<div class="container">
    <div class="privacy-container">
        <h1 class="privacy-header">Privacy Policy</h1>

        <p class="privacy-text">Al Khair Educational & Charitable Trust values your privacy and is committed to protecting your personal information. This Privacy Policy outlines how we collect, use, disclose, and safeguard your information when you visit our website or engage with our services. By using our website, you consent to the practices described in this policy.</p>

        <div class="mb-4">
            <h2 class="privacy-title">1. Information We Collect</h2>
            <p class="privacy-text">We may collect the following types of information:</p>
            <ul class="privacy-text">
                <li><strong>Personal Information:</strong> Name, email address, phone number, and any other details you provide when you contact us, make a donation, or register for events.</li>
                <li><strong>Usage Data:</strong> Information about your interactions with our website, such as IP address, browser type, and pages visited.</li>
                <li><strong>Cookies and Tracking Technologies:</strong> Used to enhance your experience and analyze browsing behavior.</li>
            </ul>
        </div>

        <div class="mb-4">
            <h2 class="privacy-title">2. How We Use Your Information</h2>
            <ul class="privacy-text">
                <li>To process donations, manage registrations, and respond to inquiries.</li>
                <li>To send you updates, newsletters, and information about our programs.</li>
                <li>To analyze website performance and user behavior.</li>
                <li>To ensure security and prevent fraud.</li>
            </ul>
        </div>

        <div class="mb-4">
            <h2 class="privacy-title">3. How We Share Your Information</h2>
            <ul class="privacy-text">
                <li><strong>With Service Providers:</strong> Third parties assisting in website operation, payment processing, or communications.</li>
                <li><strong>For Legal Reasons:</strong> When required by law or law enforcement agencies.</li>
                <li><strong>With Your Consent:</strong> If you explicitly agree to share information.</li>
            </ul>
        </div>

        <div class="mb-4">
            <h2 class="privacy-title">4. Data Security</h2>
            <p class="privacy-text">We implement security measures to protect your information from unauthorized access, but no internet transmission is entirely secure.</p>
        </div>

        <div class="mb-4">
            <h2 class="privacy-title">5. Your Rights and Choices</h2>
            <ul class="privacy-text">
                <li><strong>Access and Correction:</strong> You can request to update or delete your information.</li>
                <li><strong>Opt-Out:</strong> You can unsubscribe from promotional emails anytime.</li>
            </ul>
        </div>

        <div class="mb-4">
            <h2 class="privacy-title">6. Children’s Privacy</h2>
            <p class="privacy-text">We do not knowingly collect information from children under 13. If such data is collected, we will delete it.</p>
        </div>

        <div class="mb-4">
            <h2 class="privacy-title">7. Changes to This Privacy Policy</h2>
            <p class="privacy-text">We may update this policy from time to time and encourage users to review it periodically.</p>
        </div>

        <div class="mb-4 text-center">
            <h2 class="privacy-title">8. Contact Us</h2>
            <p class="privacy-text">For any questions or concerns about this Privacy Policy:</p>
            <p class="fw-bold text-primary">Al Khair Educational & Charitable Trust</p>
        </div>
    </div>
</div>

@endsection
@push('js')
@endpush