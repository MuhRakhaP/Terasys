<!DOCTYPE html>
<html lang="en">
<!-- Loading Screen -->

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TERASYS - Leading Technology Solutions & Digital Innovation</title>
    <meta name="description"
        content="TERASYS delivers cutting-edge technology solutions, software development, mobile applications, and digital transformation services. Trusted by industry leaders worldwide." />
    <link rel="stylesheet" href="{{ asset(path: 'css/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <link rel="stylesheet" href="{{ asset(path: 'css/bootstrap.min.css') }}"> --}}

</head>

<body>
    <div id="loading-screen">
        <img src="{{ asset('img/LOGO TERASYS.png') }}" alt="TERASYS Logo" class="loading-logo">
        {{-- <p>Loading, please wait...</p> --}}
    </div>
    <nav id="navbar" class="navbar">
        <div class="container">
            <div class="nav-content">
                <div class="logo">
                    <a href="{{ url('/#home') }}" class="nav-link">
                        <img src="{{ asset('img/LOGO TERASYS.png') }}" alt="TERASYS Logo" style="height:50px;">
                    </a>
                </div>


                <div class="nav-menu" id="nav-menu">
                    <a href="{{ url('/#home') }}" class="nav-link">HOME</a>
                    <a href="{{ url('/#services') }}" class="nav-link">SERVICES</a>
                    <a href="{{ url('/#about') }}" class="nav-link">ABOUT</a>
                    <a href="{{ url('/#clients') }}" class="nav-link">CLIENTS</a>
                    <a href="{{ url('/#news') }}" class="nav-link">NEWS</a>
                    <a href="{{ url('/#contact') }}" class="nav-link">CONTACT</a>
                </div>

                {{-- <button class="btn btn-primary">Get Started</button> --}}

                <button class="mobile-menu-btn" id="mobile-menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </nav>

    @yield('content')
    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header section-animate">
                <span class="section-badge">CONTACT WITH OUR TEAM</span>
                <h2>Let's Build Something Amazing Together</h2>
                <p>Ready to transform your business? Get in touch with our experts and discover how we can help you
                    achieve
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
                                <br><b>Branch 2</b><br>Ruko Redwood Blok GD.XV No.43B<br>Metland Transyogi<br>Kab.
                                Bogor,
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
    <footer class="footer">
        <div class="footer-main">
            <div class="container">
                <div class="footer-grid">
                    <div class="footer-column">
                        <img src="{{ asset('img/LOGO TERASYS.png') }}" alt="TERASYS Logo"
                            style="height:48px; margin-bottom:16px;">
                        <p>
                            TERASYS is a leading IT solutions provider, delivering innovative technology and digital
                            transformation services to help businesses grow and succeed in the digital era.
                        </p>
                        {{-- <div class="social-links">
                            <a href="#"><i data-lucide="facebook"></i></a>
                            <a href="#"><i data-lucide="twitter"></i></a>
                            <a href="#"><i data-lucide="linkedin"></i></a>
                            <a href="#"><i data-lucide="instagram"></i></a>
                        </div> --}}
                    </div>
                    <div></div>
                    <div class="footer-column">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="{{ route('enterpriseResourcePlanning') }}">Enterprise Resource Planning</a>
                            </li>
                            <li><a href="{{ route('internetConnection') }}">Internet Connection</a></li>
                            <li><a href="{{ route(name: 'webServerHosting') }}">Web & Server Hosting</a></li>
                            <li><a href="{{ route(name: 'serverCoLocation') }}">Server Co-location</a></li>
                            <li><a href="{{ route(name: 'systemIntegratorService') }}">LAN Solutions</a></li>
                        </ul>
                    </div>
                    {{-- <div class="footer-column">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Clients</a></li>
                            <li><a href="#">News & Updates</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div> --}}
                    <div class="footer-column">
                        <h4>Contact Info</h4>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i data-lucide="map-pin"></i>
                                <p>
                                    Gedung Cyber 1 Lt. 6<br>
                                    Jl. Kuningan Barat Raya Mampang<br>
                                    Jakarta Selatan 12710, Indonesia
                                </p>
                            </div>
                            <div class="contact-item">
                                <i data-lucide="phone"></i>
                                <p>021 2949 2292<br>+62 815 4231 0375</p>
                            </div>
                            <div class="contact-item">
                                <i data-lucide="mail"></i>
                                <p>support@terasys.co.id</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>© 2025 TERASYS. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/lucide.js') }}"></script>
    <script>
        lucide.createIcons();

        window.addEventListener("load", function() {
            const loadingScreen = document.getElementById("loading-screen");
            loadingScreen.classList.add("hidden");
        });
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
