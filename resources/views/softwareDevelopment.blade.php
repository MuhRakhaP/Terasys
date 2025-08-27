<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP | TERASYS</title>
    <meta name="description" content="Custom software development solutions by TERASYS. Empower your business with scalable, secure, and innovative applications.">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navigation -->
    <nav id="navbar" class="navbar">
        <div class="container">
            <div class="nav-content">
                <div class="logo">
                    <img src="{{ asset('img/LOGO TERASYS.png') }}" alt="TERASYS Logo" style="height:50px;">
                </div>
                <div class="nav-menu" id="nav-menu">
                    <a href="{{ url('/') }}#home" class="nav-link">HOME</a>
                    <a href="{{ url('/') }}#about" class="nav-link">ABOUT</a>
                    <a href="{{ url('/') }}#services" class="nav-link">SERVICES</a>
                    <a href="{{ url('/') }}#clients" class="nav-link">CLIENTS</a>
                    <a href="{{ url('/') }}#news" class="nav-link">NEWS</a>
                    <a href="{{ url('/') }}#contact" class="nav-link">CONTACT</a>
                </div>
                <button class="btn btn-primary">Get Started</button>
                <button class="mobile-menu-btn" id="mobile-menu-btn">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" style="min-height:60vh; position:relative; background: url('{{ asset('img/SOFTWAREDEV.jpg') }}') center center/cover no-repeat;">
        <div style="position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.45); z-index:1;"></div>
        <div class="container" style="position:relative; z-index:2; text-align:center; padding:100px 0;">
            <div class="hero-content animated">
                <div class="hero-badge animated">PRODUCT & SERVICE</div>
                <h1 class="hero-title animated">Enterprise Resource Planning</h1>
                <p class="hero-subtitle animated">
                    ERP is an integrated system that unifies finance, inventory, sales, and operations in one platform.
                </p>
                <div class="hero-buttons animated">
                    <button class="btn btn-hero" onclick="window.location.href='{{ url('/') }}#services'">Back to Services</button>
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
                        <div class="stat-label">Apps Delivered</div>
                    </div>
                </div>
                <div class="about-text">
                    <span class="section-badge">WHY CHOOSE US</span>
                    <h2>End-to-End ERP Solutions</h2>
                    <p>
                        We provide robust, scalable, and fully integrated ERP systems tailored for enterprises and growing businesses.
                        Our ERP solutions connect finance, HR, inventory, sales, and operations into one platform to streamline processes, reduce costs,
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

    <!-- Contact -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">CONTACT WITH OUR TEAM</span>
                <h2>Let's Build Something Amazing Together</h2>
                <p>Ready to transform your business? Get in touch with our experts and discover how we can help you achieve your goals.</p>
            </div>
            <!-- Form + Info -->
            ...
            <!-- Isi sama seperti sebelumnya, ganti semua src="images/... jadi {{ asset('img/...') }} -->
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <img src="{{ asset('img/LOGO TERASYS.png') }}" alt="TERASYS Logo" style="height:48px; margin-bottom:16px;">
            ...
        </div>
    </footer>

    <!-- JS -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
