<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TERASYS - Leading Technology Solutions & Digital Innovation</title>
    <meta name="description"
        content="TERASYS delivers cutting-edge technology solutions, software development, mobile applications, and digital transformation services. Trusted by industry leaders worldwide." />
    <link rel="stylesheet" href="{{ asset(path: 'css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset(path: 'css/bootstrap.min.css') }}"> --}}

</head>

<body>
    <nav id="navbar" class="navbar">
        <div class="container">
            <div class="nav-content">
                <div class="logo">
                    <img src="{{ asset('img/LOGO TERASYS.png') }}" alt="TERASYS Logo" style="height:50px;">
                </div>

                <div class="nav-menu" id="nav-menu">
                    <a href="#home" class="nav-link">HOME</a>
                    <a href="#about" class="nav-link">ABOUT</a>
                    <a href="#services" class="nav-link">SERVICES</a>
                    <a href="#clients" class="nav-link">CLIENTS</a>
                    <a href="#news" class="nav-link">NEWS</a>
                    <a href="#contact" class="nav-link">CONTACT</a>
                </div>

                <button class="btn btn-primary">Get Started</button>

                <button class="mobile-menu-btn" id="mobile-menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </nav>

    @yield('content')

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
                        <div class="social-links">
                            <a href="#"><i data-lucide="facebook"></i></a>
                            <a href="#"><i data-lucide="twitter"></i></a>
                            <a href="#"><i data-lucide="linkedin"></i></a>
                            <a href="#"><i data-lucide="instagram"></i></a>
                        </div>
                    </div>
                    <div class="footer-column">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="#">Enterprise Resource Planning</a></li>
                            <li><a href="#">Internet Connection</a></li>
                            <li><a href="#">Web & Server Hosting</a></li>
                            {{-- <li><a href="#">Broadband Connection</a></li> --}}
                            <li><a href="#">Server Co-location</a></li>
                            <li><a href="#">LAN Solutions</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Clients</a></li>
                            <li><a href="#">News & Updates</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
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
                    <div class="footer-links">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Service</a>
                        <a href="#">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/lucide.js') }}"></script>
    <script>
        lucide.createIcons();
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
    {{-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> --}}

</body>

</html>
