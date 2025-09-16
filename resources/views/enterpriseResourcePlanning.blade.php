@extends('layouts.mainLayouts')

@section('content')
    <section class="hero"
        style="min-height:60vh; position:relative; background: url('{{ asset('img/SOFTWAREDEV.jpg') }}') center center/cover no-repeat;">
        <div style="position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.45); z-index:1;">
        </div>
        <div class="container" style="position:relative; z-index:2;">
            <div class="hero-content animated"
                style="text-align: center; align-items: center; margin-left: auto; margin-right: auto; padding-top: 100px; padding-bottom: 100px;">
                <div class="hero-badge animated">PRODUCT & SERVICE</div>
                <h1 class="hero-title animated" style="text-align: center;">
                    Enterprise Resource Planning
                </h1>
                <p class="hero-subtitle animated" style="text-align: center;">
                    ERP is an integrated system that unifies finance, inventory, sales, and operations in one platform.
                </p>
                <div class="hero-buttons animated" style="justify-content: center;">
                    <button class="btn btn-hero" onclick="window.location.href='{{ url('/') }}#services'">Back to
                        Services</button>
                </div>
            </div>
        </div>
    </section>

    <!-- About / Product Detail -->
    <section class="about" style="background:#fff;">
        <div class="container">
            <div style="height:64px;"></div>
            <div class="about-content section-animate">
                <div class="about-image">
                    <div class="about-placeholder">
                        <img src="{{ asset('img/API.jpg') }}" alt="Software Development" class="about-full-img">
                    </div>
                    <div class="stat-card stat-1">
                        <div class="stat-number">99%</div>
                        <div class="stat-label">Client Satisfaction</div>
                    </div>
                    <div class="stat-card stat-2">
                        <div class="stat-number">200+</div>
                        <div class="stat-label" style="color: black">Apps Delivered</div>
                    </div>
                </div>
                <div class="about-text">
                    <span class="section-badge">WHY CHOOSE US</span>
                    <h2>End-to-End ERP Solutions</h2>
                    <p>
                        We provide robust, scalable, and fully integrated ERP systems tailored for enterprises and growing
                        businesses.
                        Our ERP solutions connect finance, HR, inventory, sales, and operations into one platform to
                        streamline processes, reduce costs,
                        and make smarter decisions with real-time data.
                    </p>
                    <div class="features-grid">
                        <div class="feature-card">
                            <i data-lucide="layers"></i>
                            <h4>All-in-One Integration</h4>
                            <p>Finance, inventory, and more in one system</p>
                        </div>
                        <div class="feature-card">
                            <i data-lucide="shield-check"></i>
                            <h4>Real-Time Insights</h4>
                            <p>Accurate data for better decision-making</p>
                        </div>
                        <div class="feature-card">
                            <i data-lucide="rocket"></i>
                            <h4>Scalable & Secure</h4>
                            <p>Built to grow with your business</p>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height:48px;"></div>
        </div>
    </section>
@endsection
