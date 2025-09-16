@extends('layouts.mainLayouts')

@section('content')
    <!-- Hero Section -->
    <section class="hero"
        style="min-height:60vh; position:relative; background: url('{{ asset('img/LAN_BG.png') }}') center center/cover no-repeat;">
        <div style="position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.45); z-index:1;">
        </div>
        <div class="hero-bg"></div>
        <div class="container" style="position:relative; z-index:2;">
            <div class="hero-content animated"
                style="text-align: center; align-items: center; margin-left: auto; margin-right: auto; padding-top: 100px; padding-bottom: 100px;">
                <div class="hero-badge animated">PRODUCT & SERVICE</div>
                <h1 class="hero-title animated" style="text-align: center;">
                    System Integrator Services
                </h1>
                <p class="hero-subtitle animated" style="text-align: center;">
                    Integrated solutions to connect your entire technology ecosystem.
                    Building a reliable digital infrastructure to support your business growth.
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
                        <img src="{{ asset('img/ABOUT_LAN.png') }}" alt="Connection LAN" class="about-full-img">
                    </div>
                    <div class="stat-card stat-1">
                        <div class="stat-number">99%</div>
                        <div class="stat-label">Network Stability</div>
                    </div>
                    <div class="stat-card stat-2">
                        <div class="stat-number">200+</div>
                        <div class="stat-label">LAN Projects</div>
                    </div>
                </div>
                <div class="about-text">
                    <span class="section-badge">WHY CHOOSE US</span>
                    <h2>Comprehensive System Integrator Solutions</h2>
                    <p>
                        Our company architects and implements comprehensive system integration solutions engineered for
                        the unique demands of modern business environments. We specialize in unifying disparate
                        technological
                        subsystems into a single, cohesive, and efficient infrastructure.
                    </p>

                    <strong>Our Services Include:</strong>
                    <ol>
                        <li>Cabling Infrastructure Solution</li>
                        <li>CCTV Security and Alarm System</li>
                        <li>Data Center Solution</li>
                        <li>IP PBX System</li>
                        <li>Preventive & Corrective Maintenance</li>
                    </ol>

                    </p>
                    <div class="features-grid">
                        <div class="feature-card">
                            <i data-lucide="link"></i>
                            <h4>Integrated Solutions</h4>

                        </div>
                        <div class="feature-card">
                            <i data-lucide="shield-check"></i>
                            <h4>Expert Implementation</h4>

                        </div>
                        <div class="feature-card">
                            <i data-lucide="zap"></i>
                            <h4>Efficiency Reliability</h4>

                        </div>
                    </div>
                </div>
            </div>
            <div style="height:48px;"></div>
        </div>
    </section>
@endsection
