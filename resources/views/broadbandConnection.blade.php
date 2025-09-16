@extends('layouts.mainLayouts')

@section('content')
    <!-- Hero Section -->
    <section class="hero"
        style="min-height:60vh; position:relative; background: url('{{ asset('img/BROAD_BG.png') }}') center center/cover no-repeat;">
        <div style="position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.45); z-index:1;">
        </div>
        <div class="hero-bg"></div>
        <div class="container" style="position:relative; z-index:2;">
            <div class="hero-content animated"
                style="text-align: center; align-items: center; margin-left: auto; margin-right: auto; padding-top: 100px; padding-bottom: 100px;">
                <div class="hero-badge animated">PRODUCT & SERVICE</div>
                <h1 class="hero-title animated" style="text-align: center;">
                    Broadband Connection
                </h1>
                <p class="hero-subtitle animated" style="text-align: center;">
                    Broadband internet solutions for seamless connectivity. Fast, stable, and reliable for your business
                    needs.
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
                        <img src="{{ asset('img/ABOUT_BROAD.jpg') }}" alt="Broadband Connection" class="about-full-img">
                    </div>
                    <div class="stat-card stat-1">
                        <div class="stat-number">99%</div>
                        <div class="stat-label">Coverage Area</div>
                    </div>
                    <div class="stat-card stat-2">
                        <div class="stat-number">300+</div>
                        <div class="stat-label">Clients Served</div>
                    </div>
                </div>
                <div class="about-text">
                    <span class="section-badge">WHY CHOOSE US</span>
                    <h2>Seamless Broadband Connectivity</h2>
                    <p>
                        In today’s fast-paced digital world, a reliable internet connection is the backbone of any
                        successful operation. TERASYS provides high-speed broadband internet specifically engineered for
                        businesses of all sizes, ensuring your team stays connected and productive.
                        <br><br>
                        Paired with our dedicated support team, you get more than just a service; you get a partner
                        committed to your success. Experience the power of uninterrupted connectivity and drive your
                        business towards greater productivity and sustainable growth.
                    </p>
                    <div class="features-grid">
                        <div class="feature-card">
                            <i data-lucide="activity"></i>
                            <h4>High Bandwidth</h4>

                        </div>
                        <div class="feature-card">
                            <i data-lucide="cloud"></i>
                            <h4>Cloud Ready</h4>

                        </div>
                        <div class="feature-card">
                            <i data-lucide="headphones"></i>
                            <h4>Support Team</h4>

                        </div>
                    </div>
                </div>
            </div>
            <div style="height:48px;"></div>
        </div>
    </section>
@endsection
