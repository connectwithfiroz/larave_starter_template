@extends('frontend.layouts.app')

@section('title', 'Terms & Conditions')

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
                <h1 class="breadcumb-title">Terms & Conditions</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Terms & Conditions</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Contact Area   
    ==============================-->

    <div class="container">
        <div class="terms-container">
            <h1 class="terms-header">Terms and Conditions</h1>

            <div class="mb-4">
                <h2 class="terms-title">1. Acceptance of Terms</h2>
                <p class="terms-text">By using our website, you acknowledge that you have read, understood, and agree to be
                    bound by these Terms and Conditions and any applicable laws and regulations.</p>
            </div>

            <div class="mb-4">
                <h2 class="terms-title">2. Use of Website</h2>
                <p class="terms-text">You agree to use our website for lawful purposes only. You must not use our site to:
                </p>
                <ul class="terms-text">
                    <li>Engage in any unlawful activity or violate any applicable laws or regulations.</li>
                    <li>Transmit harmful or malicious content, including viruses, malware, or other harmful code.</li>
                    <li>Impersonate any person or entity or misrepresent your affiliation with any person or entity.</li>
                </ul>
            </div>

            <div class="mb-4">
                <h2 class="terms-title">3. Intellectual Property</h2>
                <p class="terms-text">All content on our website, including text, images, logos, and other materials, is the
                    property of Al Khair Educational & Charitable Trust or its licensors.</p>
            </div>

            <div class="mb-4">
                <h2 class="terms-title">4. User Contributions</h2>
                <p class="terms-text">If you submit any content or materials to our website, such as comments or feedback,
                    you grant us a non-exclusive, royalty-free, perpetual, and worldwide license to use, reproduce, modify,
                    and distribute such content.</p>
            </div>

            <div class="mb-4">
                <h2 class="terms-title">5. Links to Third-Party Websites</h2>
                <p class="terms-text">Our website may contain links to third-party websites for your convenience. We do not
                    endorse or take responsibility for the content or practices of these sites.</p>
            </div>

            <div class="mb-4">
                <h2 class="terms-title">6. Limitation of Liability</h2>
                <p class="terms-text">To the fullest extent permitted by law, Al Khair Educational & Charitable Trust shall
                    not be liable for any direct, indirect, incidental, consequential, or punitive damages arising from your
                    use of our website.</p>
            </div>

            <div class="mb-4">
                <h2 class="terms-title">7. Indemnification</h2>
                <p class="terms-text">You agree to indemnify and hold harmless Al Khair Educational & Charitable Trust, its
                    affiliates, officers, directors, employees, and agents from any claims, damages, losses, liabilities, or
                    expenses.</p>
            </div>

            <div class="mb-4">
                <h2 class="terms-title">8. Governing Law</h2>
                <p class="terms-text">These Terms and Conditions are governed by and construed in accordance with the
                    applicable laws.</p>
            </div>

            <div class="mb-4 text-center">
                <h2 class="terms-title">9. Contact Information</h2>
                <p class="terms-text">If you have any questions or concerns, please contact us at:</p>
                <p class="fw-bold text-primary">Al Khair Educational & Charitable Trust</p>
            </div>
        </div>
    </div>


    <div class="container mt-4 footer-mission">
        <div class="row align-items-center text-center">
            <!-- Contact Button -->
            <div class="col-md-4">
                <a href="contact.html" class="contact-btn">Contact Us Now <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Social Media Text -->
            <div class="col-md-4">
                <p class="social-text">Follow Us On Social Media</p>
            </div>

            <!-- Social Media Icons -->
            <div class="col-md-4">
                <div class="social-icons">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush