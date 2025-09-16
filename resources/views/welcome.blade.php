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
                    <button class="btn btn-hero">Explore Solutions</button>
                    <button class="btn btn-outline">Watch Demo</button>
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
                        <span class="service-category">.</span>
                        <h3>COMING SOON</h3>
                        <p>Exciting new features are on the way !!!</p>
                        {{-- <a href="{{ route(name: 'systemIntegratorService') }}" class="service-link">Learn More →</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section id="clients" class="clients">
        <div class="container">
            <div class="section-header section-animate">
                <span class="section-badge">TRUSTED BY INDUSTRY LEADERS</span>
                <h2>Our Valued Partners</h2>
                <p>We're proud to work with amazing companies around the world</p>
            </div>

            <div class="clients-grid section-animate">
                <div class="client-card">
                    <div class="client-logo">
                        <div class="client-card">
                            <img src="{{ asset('img/LOGO TJ.png') }}" alt="Logo TJ" style="height:48px;">
                        </div>
                    </div>
                </div>
                <div class="client-card">
                    <div class="client-logo">
                        <div class="client-card">
                            <img src="{{ asset('img/LOGO UNIQLO.png') }}" alt="Logo Uniqlo" style="height:48px;">
                        </div>
                    </div>
                </div>
                <div class="client-card">
                    <div class="client-logo">
                        <div class="client-card">
                            <img src="{{ asset('img/LOGO NEC.png') }}" alt="Logo NEC" style="height:48px;">
                        </div>
                    </div>
                </div>
                <div class="client-card">
                    <div class="client-logo">
                        <div class="client-card">
                            <img src="{{ asset('img/LOGO YONGKI.png') }}" alt="Logo Yongki" style="height:48px;">
                        </div>
                    </div>
                </div>
                <div class="client-card">
                    <div class="client-logo">
                        <div class="client-card">
                            <img src="{{ asset('img/LOGO BAYER.png') }}" alt="Logo Bayer" style="height:48px;">
                        </div>
                    </div>
                </div>
                <div class="client-card">
                    <div class="client-logo">
                        <div class="client-card">
                            <img src="{{ asset('img/LOGO LINKNET.png') }}" alt="Logo Linknet" style="height:48px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
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



    <!-- News Section -->
    <section id="news" class="news">
        <div class="container">
            <div class="section-header section-animate">
                <span class="section-badge">WHAT'S HAPPENING</span>
                <h2>Latest News & Updates</h2>
                <p>Stay informed about our latest achievements, partnerships, and innovations in the tech industry</p>
            </div>

            <div class="news-grid section-animate">
                <div class="news-card">
                    <div class="news-image">
                        <i data-lucide="trending-up"></i>
                        <span class="news-category">Awards</span>
                        <span class="trending-badge">🔥 Trending</span>
                    </div>
                    <div class="news-content">
                        <div class="news-date">
                            <i data-lucide="calendar"></i>
                            March 15, 2024
                        </div>
                        <h3>TERASYS Wins Tech Innovation Award 2024</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, excepturi. Tempore vero ab
                            eum dolore</p>
                        <div class="news-link">Read More →</div>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-image">
                        <i data-lucide="trending-up"></i>
                        <span class="news-category">Partnership</span>
                    </div>
                    <div class="news-content">
                        <div class="news-date">
                            <i data-lucide="calendar"></i>
                            March 10, 2024
                        </div>
                        <h3>New Partnership with Global Tech Leader</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, excepturi. Tempore vero ab
                            eum dolore</p>
                        <div class="news-link">Read More →</div>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-image">
                        <i data-lucide="trending-up"></i>
                        <span class="news-category">Product Launch</span>
                        <span class="trending-badge">🔥 Trending</span>
                    </div>
                    <div class="news-content">
                        <div class="news-date">
                            <i data-lucide="calendar"></i>
                            March 5, 2024
                        </div>
                        <h3>Launching Next-Gen Cloud Solutions</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, excepturi. Tempore vero ab
                            eum dolore</p>
                        <div class="news-link">Read More →</div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
