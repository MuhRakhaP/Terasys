<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TERASYS - Leading Technology Solutions & Digital Innovation</title>
    <meta name="description" content="TERASYS delivers cutting-edge technology solutions, software development, mobile applications, and digital transformation services. Trusted by industry leaders worldwide." />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav id="navbar" class="navbar">
        <div class="logo">
            <img src="{{ asset(path: 'img/LOGO TERASYS.png') }}" alt="TERASYS Logo" style="height:50px;">
        </div>
    </nav>

    <section id="clients" class="clients">
        <div class="client-card"><img src="{{ asset('img/LOGO TJ.png') }}" alt="Logo TJ" style="height:48px;"></div>
        <div class="client-card"><img src="{{ asset('img/LOGO UNIQLO.png') }}" alt="Logo Uniqlo" style="height:48px;"></div>
        <div class="client-card"><img src="{{ asset('img/LOGO NEC.png') }}" alt="Logo NEC" style="height:48px;"></div>
        <div class="client-card"><img src="{{ asset('img/LOGO YONGKI.png') }}" alt="Logo Yongki" style="height:48px;"></div>
        <div class="client-card"><img src="{{ asset('img/LOGO BAYER.png') }}" alt="Logo Bayer" style="height:48px;"></div>
        <div class="client-card"><img src="{{ asset('img/LOGO LINKNET.png') }}" alt="Logo Linknet" style="height:48px;"></div>
    </section>

    <section id="about" class="about">
        <img src="{{ asset('img/KABEL.png') }}" alt="Kabel" class="about-full-img">
    </section>

    <footer>
        <img src="{{ asset('img/LOGO TERASYS.png') }}" alt="TERASYS Logo" style="height:48px; margin-bottom:16px;">
    </footer>

    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
