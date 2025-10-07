@extends('layouts.mainLayouts')

@section('content')
    <section id="home" class="hero">
        <div class="hero-bg"></div>
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge animated">NEXT-GENERATION TECHNOLOGY</div>
                <h1 class="hero-title">
                    Enterprise IT Solutions & <br>Network Infrastructure
                </h1>
                <p class="hero-subtitle">Transforming your business with secure, scalable, and innovative technology.</p>
                <div class="hero-buttons">
                    <a href="{{ url('/#about') }}" class="nav-link">
                        <button class="btn btn-hero">Explore Solutions</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-header section-animate">
                <span class="section-badge">PRODUCTS & SERVICES</span>
                <h2>Innovative Solutions for Your Business</h2>
                <p>We provide comprehensive technology solutions to help your business thrive in the digital landscape</p>
            </div>

            <div class="services-grid section-animate">
                <div class="service-card" onclick="window.location.href='{{ route('enterpriseResourcePlanning') }}'"
                    style="cursor:pointer;">
                    <div class="service-icon">
                        <!-- ERP: database -->
                        <i data-lucide="database"></i>
                    </div>
                    <div class="service-content">
                        <span class="service-category">ERP</span>
                        <h3>ENTERPRISE RESOURCE PLANNING</h3>
                        <p>ERP is an integrated system that unifies finance, and operations in one platform.</p>
                        <a href="{{ route('enterpriseResourcePlanning') }}" class="service-link">Learn More →</a>
                    </div>
                </div>

                <div class="service-card" onclick="window.location.href='{{ route('internetConnection') }}'">
                    <div class="service-icon">
                        <!-- Internet Connection: wifi -->
                        <i data-lucide="wifi"></i>
                    </div>
                    <div class="service-content">
                        <span class="service-category">Internet</span>
                        <h3>INTERNET CONNECTION</h3>
                        <p>Reliable and high-speed internet connectivity solutions</p>
                        <a href="{{ route('internetConnection') }}" class="service-link">Learn More →</a>
                    </div>
                </div>

                <div class="service-card" onclick="window.location.href='{{ route('webServerHosting') }}'">
                    <div class="service-icon">
                        <!-- Web & Server Hosting: server -->
                        <i data-lucide="server"></i>
                    </div>
                    <div class="service-content">
                        <span class="service-category">Web & Server</span>
                        <h3>WEB & SERVER HOSTING</h3>
                        <p>Modern responsive websites and server hosting solutions</p>
                        <a href="{{ route(name: 'webServerHosting') }}" class="service-link">Learn More →</a>
                    </div>
                </div>
                <div class="service-card" onclick="window.location.href='{{ route('serverCoLocation') }}'">
                    <div class="service-icon">
                        <!-- Server Co-location: hard-drive -->
                        <i data-lucide="hard-drive"></i>
                    </div>
                    <div class="service-content">
                        <span class="service-category">Server</span>
                        <h3>SERVER CO-LOCATION</h3>
                        <p>Server co-location services for enhanced performance</p>
                        <a href="{{ route(name: 'serverCoLocation') }}" class="service-link">Learn More →</a>
                    </div>
                </div>

                <div class="service-card" onclick="window.location.href='{{ route('systemIntegratorService') }}'">
                    <div class="service-icon">
                        <!-- LAN: link -->
                        <i data-lucide="link"></i>
                    </div>
                    <div class="service-content">
                        <span class="service-category">LAN</span>
                        <h3>CONNECTION LOCAL AREA NETWORK</h3>
                        <p>Reliable and high-speed local area network solutions</p>
                        <a href="{{ route(name: 'systemIntegratorService') }}" class="service-link">Learn More →</a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <!-- LAN: link -->
                        <i data-lucide="plus"></i>
                    </div>
                    <div class="service-content">
                        <span class="service-category">Soon</span>
                        <h3>COMING SOON</h3>
                        <p>Exciting new features are on the way, bringing you fresh experiences and improvements that will
                            make everything even better than before!</p>
                        {{-- <a href="{{ route(name: 'systemIntegratorService') }}" class="service-link">Learn More →</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section id="about" class="about">
        <div class="container container_about">
            <div class="about-content section-animate">
                <div class="about-image">
                    <div class="about-placeholder">

                        <img src="{{ asset('img/KABEL.png') }}" alt="Kabel" class="about-full-img">
                    </div>
                    <div class="stat-card stat-1">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                    <div class="stat-card stat-2">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Projects Done</div>
                    </div>
                </div>

                <div class="about-text">
                    <span class="section-badge">WHO WE ARE</span>
                    <h2>Technology Leaders Driving Digital Innovation</h2>
                    <p>Established in 2011 in Jakarta, we provide innovative IT solutions tailored to evolving global trends
                        and business demands. With a strong commitment to customer satisfaction, we partner with our clients
                        to achieve shared success and sustainable growth. Our reliable services empower businesses to adapt,
                        transform, and thrive in a rapidly changing digital era.</p>

                    <div class="features-grid">
                        <div class="feature-card">
                            <i data-lucide="award"></i>
                            <h4>Excellence</h4>
                            <p>Award-winning solutions</p>
                        </div>
                        <div class="feature-card">
                            <i data-lucide="target"></i>
                            <h4>Precision</h4>
                            <p>Targeted outcomes</p>
                        </div>
                        <div class="feature-card">
                            <i data-lucide="users"></i>
                            <h4>Collaboration</h4>
                            <p>Team-driven approach</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="clients" class="clients">
        <div class="container">
            <div class="section-header section-animate">
                <span class="section-badge">TRUSTED BY INDUSTRY LEADERS</span>
                <h2>Our Valued Partners</h2>
                <p>We're proud to work with amazing companies around the world</p>
            </div>
            <div class="clients-logos section-animate">
                <div class="client-logo"><img src="{{ asset(path: 'img/LOGO TJ.png') }}" alt="Transjakarta">
                </div>
                <div class="client-logo"><img src="{{ asset(path: 'img/LOGO UNIQLO.png') }}" alt="Uniqlo"></div>
                <div class="client-logo"><img src="{{ asset(path: 'img/LOGO NEC.png') }}" alt="NEC Technologies"></div>
                <div class="client-logo"><img src="{{ asset(path: 'img/LOGO YONGKI.png') }}" alt="Yongki Komaladi">
                </div>
                <div class="client-logo"><img src="{{ asset(path: 'img/LOGO BAYER.png') }}" alt="Bayer"></div>
                <div class="client-logo"><img src="{{ asset(path: 'img/LOGO LINKNET.png') }}" alt="Linknet"></div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section id="news" class="news">
        <div class="container">
            <div class="section-header section-animate">
                <span class="section-badge">WHAT'S HAPPENING</span>
                <h2>Latest News & Updates</h2>
                <p>Stay informed about our latest achievements, partnerships, and innovations in the tech industry</p>
            </div>
            <!-- Komdigi Card -->
            <div class="news-grid section-animate">
                <div class="news-card">
                    <div class="news-image news-image-awards">
                        <span class="trending-badge">🔥 Trending</span>
                    </div>

                    <div class="news-content">
                        <div class="news-date">
                            <i data-lucide="calendar"></i>
                            October 4, 2025
                        </div>
                        <h3>
                            <a class="news-title-link section-animate">Nvidia Boss: Chinese Chips
                                Are Just Behind US</a>
                        </h3>
                        <p>Based on these achievements, Huang emphasized that the US should allow its companies to compete
                            in China.</p>
                    </div>
                </div>

                <!-- Komdigi Card -->
                <div class="news-card">
                    <div class="news-image news-image-partnership"></div>
                    <div class="news-content">
                        <div class="news-date">
                            <i data-lucide="calendar"></i>
                            October 4, 2025
                        </div>
                        <h3>
                            <a class="news-title-link section-animate">Komdigi Reveals Reasons
                                for Suspending TikTok's</a>
                        </h3>
                        <p>The Ministry of Communication and Information has taken firm action by temporarily freezing the
                            Electronic System Operator (PSE)</p>
                    </div>
                </div>

                <!-- UI Card -->
                <div class="news-card">
                    <div class="news-image news-image-launch">
                        <span class="trending-badge">🔥 Trending</span>
                    </div>
                    <div class="news-content">
                        <div class="news-date">
                            <i data-lucide="calendar"></i>
                            October 4, 2025
                        </div>
                        <h3>
                            <a class="news-title-link section-animate">UI opens undergraduate study
                                program in artificial intelligence</a>
                        </h3>
                        <p>The University of Indonesia confirmed that will open an undergraduate study program in Artificial
                            Intelligence</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
