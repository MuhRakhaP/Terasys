@extends('layouts.mainLayouts')
<style>
    .popup {
        display: none;
        /* hidden default */
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        justify-content: center;
        align-items: center;
    }

    .popup-content {
        background: #fff;
        padding: 20px 30px;
        border-radius: 10px;
        text-align: center;
        max-width: 400px;
        width: 90%;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        animation: fadeIn 0.3s ease;
    }

    .popup-close {
        position: absolute;
        right: 20px;
        top: 15px;
        font-size: 20px;
        cursor: pointer;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

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
                    <button disabled class="btn btn-hero">Explore Solutions</button>
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
                        <p>Exciting new features are on the way, bringing you fresh experiences and improvements that will
                            make everything even better than before!</p>
                        {{-- <a href="{{ route(name: 'systemIntegratorService') }}" class="service-link">Learn More →</a> --}}
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
            <div class="news-grid section-animate">
                <!-- Card 1 -->
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
                        <p>TERASYS berhasil meraih penghargaan “Tech Innovation Award 2024” berkat inovasi di bidang cloud
                            computing dan kecerdasan buatan.</p>
                        <div class="news-link">Read More →</div>
                    </div>
                </div>

                <!-- Card 2 -->
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
                        <p>TERASYS resmi menjalin kerja sama strategis dengan perusahaan teknologi global untuk memperkuat
                            ekosistem digital di Asia Tenggara.</p>
                        <div class="news-link">Read More →</div>
                    </div>
                </div>

                <!-- Card 3 -->
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
                        <p>TERASYS meluncurkan solusi cloud generasi terbaru dengan performa lebih cepat, keamanan tingkat
                            lanjut, dan efisiensi biaya hingga 40%.</p>
                        <div class="news-link">Read More →</div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header section-animate">
                <span class="section-badge">CONTACT WITH OUR TEAM</span>
                <h2>Let's Build Something Amazing Together</h2>
                <p>Ready to transform your business? Get in touch with our experts and discover how we can help you achieve
                    your goals.</p>
            </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div id="popup" class="popup">
                <div class="popup-content">
                    <span id="popupClose" class="popup-close">&times;</span>
                    <h3 id="popupTitle"></h3>
                    <p id="popupMessage"></p>
                </div>
            </div>

            <div class="contact-content section-animate">
                <div class="contact-form">
                    <div class="form-card">
                        <h3>Send us a Message</h3>
                        <form id="contactForm" action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <div id="formMessage"></div> {{-- tempat alert --}}

                            <div class="form-row">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" placeholder="Enter your first name">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" placeholder="Enter your last name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" name="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="tel" name="phone" placeholder="Enter your phone number">
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="message" placeholder="Tell us about your project or inquiry..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-full">
                                <i data-lucide="send"></i>
                                Send Message →
                            </button>
                        </form>
                    </div>
                </div>

                <div class="contact-info">

                    <div class="contact-cards">
                        <div class="contact-card">
                            <div class="contact-icon">
                                <i data-lucide="map-pin"></i>
                            </div>
                            <div class="contact-details">
                                <h4>Office Address</h4>
                                <b><br>Head Office</b><br> Gedung Cyber 1 Lt. 6<br>Jl. Kuningan Barat Raya
                                Mampang<br>Prapatan Jakarta Selatan 12710, Indonesia</p>
                                <br><b>Branch 1</b><br>Gedung STC Senayan Lt.3 No.181<br>Jl. Asia Afrika Pintu IX Gelora
                                Senayan<br>Jakarta Pusat 10279 Indonesia</p>
                                <br><b>Branch 2</b><br>Ruko Redwood Blok GD.XV No.43B<br>Metland Transyogi<br>Kab. Bogor,
                                Kec. Cileungsi, Jawa Barat, Indonesia</p>
                            </div>
                        </div>
                        <div class="contact-cards-row">
                            <div class="contact-card">
                                <div class="contact-icon">
                                    <i data-lucide="phone"></i>
                                </div>
                                <div class="contact-details">
                                    <h4>Phone Number</h4>
                                    <p>02129492292<br>+6281542310375</p>
                                </div>
                            </div>
                            <div class="contact-card">
                                <div class="contact-icon">
                                    <i data-lucide="mail"></i>
                                </div>
                                <div class="contact-details">
                                    <h4>Email Address</h4>
                                    <p>support@terasys.co.id</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            let form = this;
            let formData = new FormData(form);
            let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': token
                    }
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        showPopup("Berhasil!", data.success);
                        form.reset();
                    } else if (data.errors) {
                        let errors = Object.values(data.errors).join("\n");
                        showPopup("Gagal!", errors);
                    }
                })
                .catch(() => {
                    showPopup("Error", "Terjadi kesalahan, coba lagi.");
                });
        });

        // Fungsi popup
        function showPopup(title, message) {
            let popup = document.getElementById("popup");
            document.getElementById("popupTitle").innerText = title;
            document.getElementById("popupMessage").innerText = message;
            popup.style.display = "flex";

            // Tutup manual
            document.getElementById("popupClose").onclick = function() {
                popup.style.display = "none";
            };

            // Tutup otomatis 3 detik
            setTimeout(() => {
                popup.style.display = "none";
            }, 3000);
        }
    </script>


@endsection
