@extends('layouts.mainLayouts')

@section('content')
    <!-- Hero Section -->
    <section class="hero"
        style="min-height:60vh; position:relative; background: url('{{ asset('img/SERVER_BG.jpg') }}') center center/cover no-repeat;">
        <div style="position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.45); z-index:1;">
        </div>
        <div class="hero-bg"></div>
        <div class="container" style="position:relative; z-index:2;">
            <div class="hero-content animated"
                style="text-align: center; align-items: center; margin-left: auto; margin-right: auto; padding-top: 100px; padding-bottom: 100px;">
                <div class="hero-badge animated">PRODUCT & SERVICE</div>
                <h1 class="hero-title animated" style="text-align: center;">
                    Server Co-location
                </h1>
                <p class="hero-subtitle animated" style="text-align: center;">
                    Elevate your business with our server co-location solutions. We provide a secure, reliable, and scalable
                    hosting environment engineered for optimal performance and growth.
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
                        <img src="{{ asset('img/ABOUT_SERVER.jpg') }}" alt="Server Co-location" class="about-full-img">
                    </div>
                    <div class="stat-card stat-1">
                        <div class="stat-number">99%</div>
                        <div class="stat-label">Data Center Uptime</div>
                    </div>
                    <div class="stat-card stat-2">
                        <div class="stat-number">150+</div>
                        <div class="stat-label">Servers Hosted</div>
                    </div>
                </div>
                <div class="about-text">
                    <span class="section-badge">WHY CHOOSE US</span>
                    <h2>Secure & Reliable Co-location</h2>
                    <p>
                        TERASYS delivers enterprise-grade server co-location solutions within state-of-the-art, Tier III+
                        data center facilities.
                        Our clients' critical infrastructure is protected by a robust environment featuring high-throughput
                        network connectivity,
                        fully redundant (N+1) power and cooling, and advanced physical security protocols.
                        All systems are under 24/7 proactive monitoring by our on-site Network Operations Center (NOC) to
                        guarantee maximum
                        uptime and peak performance.
                    </p>
                    <div class="features-grid">
                        <div class="feature-card">
                            <i data-lucide="hard-drive"></i>
                            <h4>Enterprise Hardware</h4>

                        </div>
                        <div class="feature-card">
                            <i data-lucide="shield"></i>
                            <h4>Physical & Network Security</h4>

                        </div>
                        <div class="feature-card">
                            <i data-lucide="clock"></i>
                            <h4>24/7 Monitoring</h4>

                        </div>
                    </div>
                </div>
            </div>
            <div style="height:48px;"></div>
        </div>
    </section>
@endsection
