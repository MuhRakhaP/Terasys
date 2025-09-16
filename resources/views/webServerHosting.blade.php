@extends('layouts.mainLayouts')

@section('content')
    <!-- Hero Section -->
    <section class="hero"
        style="min-height:60vh; position:relative; background: url('{{ asset('img/WEB_BG.jpg') }}') center center/cover no-repeat;">
        <!-- Overlay hitam transparan -->
        <div style="position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.45); z-index:1;">
        </div>
        <div class="hero-bg"></div>
        <div class="container" style="position:relative; z-index:2;">
            <div class="hero-content animated"
                style="text-align: center; align-items: center; margin-left: auto; margin-right: auto; padding-top: 100px; padding-bottom: 100px;">
                <div class="hero-badge animated">PRODUCT & SERVICE</div>
                <h1 class="hero-title animated" style="text-align: center;">
                    Web & Server Hosting
                </h1>
                <p class="hero-subtitle animated" style="text-align: center;">
                    Modern responsive websites and reliable server hosting solutions for your business. Secure,
                    scalable, and always online.
                </p>
                <div class="hero-buttons animated" style="justify-content: center;">
                    <button class="btn btn-hero" onclick="window.location.href='{{ url('/') }}#services'">Back to
                        Services</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Detail Section -->
    <section class="about" style="background: #fff;">
        <div class="container">
            <div style="height:64px;"></div>
            <div class="about-content section-animate">
                <div class="about-image">
                    <div class="about-placeholder">
                        <img src="{{ asset('img/ABOUT_INTERNET.jpg') }}" alt="Web & Server Hosting" class="about-full-img">
                    </div>
                    <div class="stat-card stat-1">
                        <div class="stat-number">99%</div>
                        <div class="stat-label">Uptime Guarantee</div>
                    </div>
                    <div class="stat-card stat-2">
                        <div class="stat-number">1000+</div>
                        <div class="stat-label">Websites Hosted</div>
                    </div>
                </div>
                <div class="about-text">
                    <span class="section-badge">WHY CHOOSE US</span>
                    <h2>Secure & Scalable Hosting Solutions</h2>
                    <p>
                        TERASYS provides a full suite of digital services, combining cutting-edge web development with
                        robust server hosting to
                        establish a powerful and perpetually online presence for your business. Our hosting
                        infrastructure serves as a secure,
                        scalable, and high-performance foundation, engineered to support the full spectrum of digital
                        needs—from dynamic websites
                        for small businesses to resource-intensive, mission-critical enterprise applications.

                    </p>
                    <div class="features-grid">
                        <div class="feature-card">
                            <i data-lucide="server"></i>
                            <h4>Reliable Servers</h4>

                        </div>
                        <div class="feature-card">
                            <i data-lucide="globe"></i>
                            <h4>Responsive Websites</h4>

                        </div>
                        <div class="feature-card">
                            <i data-lucide="shield-check"></i>
                            <h4>24/7 Protection</h4>

                        </div>
                    </div>
                </div>
            </div>
            <div style="height:48px;"></div>
        </div>
    </section>
@endsection
