@extends('layouts.mainLayouts')
<link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
<style>
    /* Grid styles (works without Tailwind) */
    #mall-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
        align-items: start;
    }

    #mall-grid ul {
        margin: 0;
        padding-left: 1.25rem;
        list-style-type: disc;
    }

    #mall-grid li {
        cursor: pointer;
        margin-bottom: 0.35rem;
    }

    #mall-list {
        margin-top: 1rem;
    }

    @media (max-width: 1024px) {
        #mall-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 640px) {
        #mall-grid {
            grid-template-columns: repeat(1, 1fr);
        }
    }

    .mall-list-title {
        font-size: 1.125rem;
        font-weight: 700;
        margin-bottom: 0.75rem;
    }

    #pagination {
        display: flex;
        justify-content: center;
        gap: 6px;
        padding: 10px;
    }

    #pagination li {
        list-style: none;
    }

    #pagination a {
        display: block;
        padding: 6px 12px;
        border: 1px solid #ddd;
        border-radius: 6px;
        text-decoration: none;
        color: #ff7f32;
        cursor: pointer;
    }

    #pagination .active a {
        background-color: #ff7f32;
        color: #fff;
    }

    #pagination .disabled a {
        color: #aaa;
        pointer-events: none;
    }

    .tab-buttons {
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
    }

    .tab-btn {
        padding: 10px 20px;
        border: none;
        background: #eee;
        cursor: pointer;
        border-radius: 8px;
        font-weight: 600;
    }

    .tab-btn.active {
        background: #ff7f32;
        color: #fff;
    }

    .tab-content {
        display: none;
        animation: fadeIn 0.5s ease-in-out;
    }

    .tab-content.active {
        display: block;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
@section('content')
    <!-- Hero Section -->
    <section class="hero"
        style="min-height:60vh; position:relative; background: url('{{ asset('img/INTERNET.jpg') }}') center center/cover no-repeat;">
        <!-- Overlay hitam transparan -->
        <div style="position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.45); z-index:1;">
        </div>
        <div class="hero-bg"></div>
        <div class="container" style="position:relative; z-index:2;">
            <div class="hero-content animated"
                style="text-align: center; align-items: center; margin-left: auto; margin-right: auto; padding-top: 100px; padding-bottom: 100px;">
                <div class="hero-badge animated">PRODUCT & SERVICE</div>
                <h1 class="hero-title animated" style="text-align: center;">
                    Internet Connection
                </h1>
                <p class="hero-subtitle animated" style="text-align: center;">
                    Reliable and high-speed internet connectivity solutions for your business. Seamless, secure, and always
                    connected.
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
            <div class="about-content section-animate flex flex-col lg:flex-row gap-12">

                <!-- Left: Image + Stats -->
                <div class="about-image relative flex-1">
                    <div class="about-placeholder">
                        <img src="{{ asset('img/ABOUT_INTERNET.jpg') }}" alt="Internet Connection"
                            class="about-full-img rounded-xl">
                    </div>
                    <div class="stat-card stat-1 absolute top-6 left-6 bg-white shadow-lg rounded-xl p-4">
                        <div class="stat-number text-2xl font-bold">99%</div>
                        <div class="stat-label text-sm">Uptime Guarantee</div>
                    </div>
                    <div class="stat-card stat-2 absolute bottom-6 right-6 bg-white shadow-lg rounded-xl p-4">
                        <div class="stat-number text-2xl font-bold">500+</div>
                        <div class="stat-label text-sm">Businesses Connected</div>
                    </div>
                </div>

                <!-- Right: Tabs -->
                <div class="about-tabs flex-1">
                    <!-- Tabs Navigation -->
                    <div class="tab-buttons">
                        <button class="tab-btn active" data-tab="tab1">Dedicated Internet</button>
                        <button class="tab-btn" data-tab="tab2">Broadband Internet</button>
                    </div>

                    <!-- Tabs Content -->
                    <div class="tabs-content">
                        <!-- Tab 1 -->
                        <div id="tab1" class="tab-content active">
                            <div class="about-text">
                                <span class="section-badge">WHY CHOOSE US</span>
                                <h2>Reliable & Fast Internet Solutions</h2>
                                <p>
                                    TERASYS delivers mission-critical, enterprise-grade internet connectivity engineered for
                                    superior speed, unwavering stability, and robust security. Our infrastructure is
                                    purpose-built
                                    to support the demanding operational needs of corporate offices, retail environments,
                                    and
                                    industrial facilities, guaranteeing maximum uptime to keep your business online and
                                    fully
                                    productive. We provide the advantage of dedicated, uncontended bandwidth,
                                    round-the-clock
                                    priority support from our expert technical team, and bespoke connectivity packages
                                    meticulously
                                    tailored to your unique business requirements.
                                </p>
                                <div class="features-grid grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                                    <div class="feature-card text-center">
                                        <i data-lucide="wifi" class="mx-auto"></i>
                                        <h4 class="mt-2">High-Speed Access</h4>
                                    </div>
                                    <div class="feature-card text-center">
                                        <i data-lucide="shield" class="mx-auto"></i>
                                        <h4 class="mt-2">Secure Connection</h4>
                                    </div>
                                    <div class="feature-card text-center">
                                        <i data-lucide="clock" class="mx-auto"></i>
                                        <h4 class="mt-2">24/7 Support</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 2 -->
                        <div id="tab2" class="tab-content">
                            <div class="about-text">
                                <span class="section-badge">WHY CHOOSE US</span>
                                <h2>Seamless Broadband Connectivity</h2>
                                <p>
                                    In today’s fast-paced digital world, a reliable internet connection is the backbone of
                                    any successful operation. TERASYS provides high-speed broadband internet specifically
                                    engineered
                                    for businesses of all sizes, ensuring your team stays connected and productive.
                                    <br><br>
                                    Paired with our dedicated support team, you get more than just a service; you get a
                                    partner
                                    committed to your success. Experience the power of uninterrupted connectivity and drive
                                    your
                                    business towards greater productivity and sustainable growth.
                                </p>
                                <div class="features-grid grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                                    <div class="feature-card text-center">
                                        <i data-lucide="activity" class="mx-auto"></i>
                                        <h4 class="mt-2">High Bandwidth</h4>
                                    </div>
                                    <div class="feature-card text-center">
                                        <i data-lucide="cloud" class="mx-auto"></i>
                                        <h4 class="mt-2">Cloud Ready</h4>
                                    </div>
                                    <div class="feature-card text-center">
                                        <i data-lucide="headphones" class="mx-auto"></i>
                                        <h4 class="mt-2">Support Team</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Coverage Area -->
            <div class="flex justify-center items-center min-h-screen bg-gray-100">
                <div class="coverage-area max-w-5xl w-full p-6 bg-white shadow-lg rounded-2xl">
                    <span class="section-badge block text-center text-lg font-bold mb-4">Coverage Area</span>

                    <div id="map" class="mb-6" style="height:500px; border-radius:12px;"></div>

                    <!-- List Mall -->
                    <div id="mall-list" class="bg-gray-50 p-4 rounded-xl mt-6">
                        <div class="mall-list-title">Daftar Mall</div>
                        <div id="mall-grid" class="row justify-content-center"></div>

                        <!-- Pagination -->
                        <nav aria-label="Mall pagination">
                            <ul id="pagination"></ul>
                        </nav>
                    </div>
                </div>
            </div>

    </section>
    <script src="{{ asset('js/leaflet.js') }}"></script>

    <script>
        document.querySelectorAll(".tab-btn").forEach(btn => {
            btn.addEventListener("click", () => {
                document.querySelectorAll(".tab-btn").forEach(b => b.classList.remove("active"));
                document.querySelectorAll(".tab-content").forEach(c => c.classList.remove("active"));

                btn.classList.add("active");
                document.getElementById(btn.dataset.tab).classList.add("active");
            });
        });

        // Inisialisasi Peta
        const map = L.map('map').setView([-2.5489, 118.0149], 5); // center Indonesia

        // Gunakan tile dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // 🔸 Custom Orange Icon
        const orangeIcon = new L.Icon({
            iconUrl: "../img/marker-icon-orange.png",
            shadowUrl: "../img/marker-shadow.png",
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        });

        // Data Mall (contoh sebagian, nanti bisa dilengkapi semua)
        const malls = [{
                "name": "Lotte Shopping Avenue",
                "address": "Jl. Prof. DR. Satrio No.Kav 3-5, Kuningan, Karet Kuningan",
                "lat": -6.2239,
                "lng": 106.8236
            },
            {
                "name": "Mal Taman Anggrek",
                "address": "Jl. Let. Jend. S. Parman, Kav.21, Slipi Jakarta Barat",
                "lat": -6.1788,
                "lng": 106.7931
            },
            {
                "name": "Grand Indonesia",
                "address": "Jl. MH Thamrin No. 1 Jakarta Pusat",
                "lat": -6.1951,
                "lng": 106.8203
            },
            {
                "name": "Gandaria City",
                "address": "Jl. Sultan Iskandar Muda, Jakarta Selatan",
                "lat": -6.2434,
                "lng": 106.7826
            },
            {
                "name": "AEON BSD",
                "address": "Jl. Grand Boulevard BSD City Tangerang, Banten",
                "lat": -6.3025,
                "lng": 106.6542
            },
            {
                "name": "Pondok Indah Mall",
                "address": "Pondok Indah Mall, Jl. Metro Pondok Indah, Jakarta Selatan",
                "lat": -6.2669,
                "lng": 106.7844
            },
            {
                "name": "Pantai Indah Kapuk",
                "address": "Pantai Indah Kapuk, Penjaringan, Jakarta Utara",
                "lat": -6.1126,
                "lng": 106.7482
            },
            {
                "name": "23 Paskal",
                "address": "Jl. Pasirkaliki, Komplek Paskal Hypersquare, Andir, Bandung",
                "lat": -6.917,
                "lng": 107.5932
            },
            {
                "name": "Tunjungan Plaza",
                "address": "Jl. Basuki Rahmat No.8-12, Kedungdoro, Tegalsari, Surabaya",
                "lat": -7.2631,
                "lng": 112.7378
            },
            {
                "name": "Lippo Mall Puri",
                "address": "Jl. Puri Indah Raya Blok U 1, Puri Indah CBD, Jakarta",
                "lat": -6.1869,
                "lng": 106.7383
            },
            {
                "name": "Pakuwon Mall Surabaya",
                "address": "Jl. Puncak Indah Lontar No. 2, Sambikerep, Surabaya",
                "lat": -7.2774,
                "lng": 112.6679
            },
            {
                "name": "Sun Plaza",
                "address": "Jl. Zainal Arifin No. 7, Medan, Sumatera Utara",
                "lat": 3.5832,
                "lng": 98.6901
            },
            {
                "name": "Lippo Mall Kemang",
                "address": "Jl. Pangeran Antasari No.36, Bangka, Mampang Prapatan, Jakarta Selatan",
                "lat": -6.2616,
                "lng": 106.8129
            },
            {
                "name": "Pakuwon Mall Jogja",
                "address": "Jl. Ringroad Utara, Sanggrahan, Condong Catur, Sleman, Yogyakarta",
                "lat": -7.762,
                "lng": 110.377
            },
            {
                "name": "TSM Makassar",
                "address": "Jl. HM. Dg. Patompo - Metro Tanjung Bunga, Makassar",
                "lat": -5.1547,
                "lng": 119.455
            },
            {
                "name": "Senayan City",
                "address": "Jl. Asia Afrika No.Lot. 19, Gelora, Tanah Abang, Jakarta Pusat",
                "lat": -6.224,
                "lng": 106.7984
            },
            {
                "name": "Mall Bali Galeria",
                "address": "Jl. By Pass Ngurah Rai, Simpang Dewa Ruci, Kuta, Badung, Bali",
                "lat": -8.7295,
                "lng": 115.1668
            },
            {
                "name": "Paris Van Java Mall",
                "address": "Jl. Sukajadi No.131-139, Bandung, Jawa Barat",
                "lat": -6.9036,
                "lng": 107.6098
            },
            {
                "name": "Supermal Karawaci",
                "address": "Jl. Boulevard Diponegoro No.105, Bencongan, Tangerang, Banten",
                "lat": -6.187,
                "lng": 106.6249
            },
            {
                "name": "Nipah Mall",
                "address": "Jl. Poros Makassar - Maros No.23, Panakkukang, Makassar",
                "lat": -5.155,
                "lng": 119.448
            },
            {
                "name": "Galaxy Mall",
                "address": "Jl. Grand Galaxy Boulevard No.1, Jaka Setia, Bekasi Selatan, Jawa Barat",
                "lat": -6.265,
                "lng": 106.989
            },
            {
                "name": "Living World Pekanbaru",
                "address": "Jl. Soekarno - Hatta, Tengkerang Bar, Marpoyan Damai, Pekanbaru, Riau",
                "lat": 0.507,
                "lng": 101.447
            },
            {
                "name": "TSM Cibubur",
                "address": "Jl. Alternatif Cibubur No.230, Harjamukti, Cimanggis, Depok, Jawa Barat",
                "lat": -6.38,
                "lng": 106.923
            },
            {
                "name": "Grand Batam Mall",
                "address": "Jl. Pembangunan, Batu Selicin, Lubuk Baja, Batam, Kepulauan Riau",
                "lat": 1.1315,
                "lng": 104.054
            },
            {
                "name": "Mall Of Indonesia",
                "address": "Mall of Indonesia (MOI), Kelapa Gading, Jakarta Utara",
                "lat": -6.1416,
                "lng": 106.9066
            },
            {
                "name": "Grand Galaxy Park",
                "address": "Grand Galaxy Park area, Bekasi Selatan, Jawa Barat",
                "lat": -6.271,
                "lng": 106.999
            },
            {
                "name": "Neo Soho",
                "address": "Jl. Letjen S. Parman No.Kav. 28, Tj. Duren, Grogol Petamburan, Jakarta Barat",
                "lat": -6.1725,
                "lng": 106.7927
            },
            {
                "name": "DP Mall",
                "address": "Jl. Pemuda No. 150, Sekayu, Semarang Tengah, Jawa Tengah",
                "lat": -6.99,
                "lng": 110.4183
            },
            {
                "name": "Emporium Pluit Mall",
                "address": "Jl. Pluit Selatan Raya, Penjaringan, Jakarta Utara",
                "lat": -6.132,
                "lng": 106.797
            },
            {
                "name": "Delipark MEDAN",
                "address": "Jl. Putri Hijau No.1, Kesawan, Medan, Sumatera Utara",
                "lat": 3.59,
                "lng": 98.679
            },
            {
                "name": "MARGOCITY",
                "address": "Margo City, Jl. Margonda Raya, Depok, Jawa Barat",
                "lat": -6.3985,
                "lng": 106.8298
            },
            {
                "name": "AEON Mall Sentul City",
                "address": "Jl. MH. Thamrin, Citaringgul, Babakan Madang, Bogor, Jawa Barat",
                "lat": -6.601,
                "lng": 106.89
            },
            {
                "name": "AEON Mall Tanjung Barat",
                "address": "AEON Mall Tanjung Barat, Jakarta Selatan",
                "lat": -6.326,
                "lng": 106.833
            },
            {
                "name": "TSM Bandung",
                "address": "Jl. Gatot Subroto No.289, Cibangkong, Batununggal, Bandung",
                "lat": -6.927,
                "lng": 107.6175
            },
            {
                "name": "Bumi Raya City",
                "address": "Jl. Arteri Supadio, Sungai Raya, Kubu Raya, Kalimantan Barat",
                "lat": -0.0105,
                "lng": 109.333
            },
            {
                "name": "Palembang Icon",
                "address": "Jl. POM IX, Lorok Pakjo, Ilir Barat I, Palembang, Sumatera Selatan",
                "lat": -2.99,
                "lng": 104.737
            },
            {
                "name": "Ciputra World Surabaya",
                "address": "Ciputra World Surabaya area, Surabaya",
                "lat": -7.32,
                "lng": 112.738
            },
            {
                "name": "Pondok Indah Mall 3",
                "address": "Jl. Sultan Iskandar Muda No.28E, Pd. Pinang, Kebayoran Lama, Jakarta Selatan",
                "lat": -6.2665,
                "lng": 106.785
            },
            {
                "name": "Solo Paragon",
                "address": "Jl. Yosodipuro No.133, Mangkubumen, Surakarta (Solo), Jawa Tengah",
                "lat": -7.56,
                "lng": 110.83
            },
            {
                "name": "Big Mall Samarinda",
                "address": "Samarinda area, East Kalimantan",
                "lat": -0.502,
                "lng": 117.153
            },
            {
                "name": "Level 21 Mall",
                "address": "Jl. Teuku Umar No.1, Dauh Puri Klod, Denpasar, Bali",
                "lat": -8.6764,
                "lng": 115.1668
            },
            {
                "name": "Botani Square",
                "address": "Jl. Raya Pajajaran No.40, Bogor, Jawa Barat",
                "lat": -6.595,
                "lng": 106.789
            },
            {
                "name": "Bintaro Jaya XChange Mall",
                "address": "Bintaro Jaya CBD, Bintaro, Tangerang Selatan",
                "lat": -6.28,
                "lng": 106.718
            },
            {
                "name": "Grand Kota Bintang",
                "address": "Jl Kota Bintang Boulevard No.kavling 1C, Jakasampurna, Bekasi Barat",
                "lat": -6.244,
                "lng": 106.975
            },
            {
                "name": "Ciputra Jakarta",
                "address": "Ciputra Mall area, Jakarta Barat",
                "lat": -6.1667,
                "lng": 106.739
            },
            {
                "name": "Lombok Epicentrum",
                "address": "Lombok Epicentrum Mall, Mataram, Lombok",
                "lat": -8.65,
                "lng": 117.2167
            },
            {
                "name": "Ambarukmo Jogja",
                "address": "Ambarukmo Plaza, Yogyakarta",
                "lat": -7.774,
                "lng": 110.372
            },
            {
                "name": "Cibinong City",
                "address": "Jl. Tegar Beriman No.1, Pakansari, Cibinong, Bogor",
                "lat": -6.484,
                "lng": 106.879
            },
            {
                "name": "Manado Town Square",
                "address": "Jl. Piere Tendean, Manado, Sulawesi Utara",
                "lat": 1.4735,
                "lng": 124.842
            },
            {
                "name": "Heritage Bandung",
                "address": "Jl. L. L. R.E. Martadinata, Citarum, Bandung, Jawa Barat",
                "lat": -6.9,
                "lng": 107.61
            },
            {
                "name": "One District at Puri",
                "address": "One District at Puri, Puri Indah, Jakarta Barat",
                "lat": -6.184,
                "lng": 106.735
            },
            {
                "name": "Summarecon Mall Serpong",
                "address": "Summarecon Serpong, Tangerang",
                "lat": -6.26,
                "lng": 106.657
            },
            {
                "name": "Beachwalk Bali",
                "address": "Jl. Pantai Kuta, Kuta, Badung, Bali",
                "lat": -8.724,
                "lng": 115.168
            },
            {
                "name": "Penta City",
                "address": "Jl Jenderal Sudirman No.47, Balikpapan Selatan, Balikpapan",
                "lat": -1.267,
                "lng": 116.828
            },
            {
                "name": "Mall Boemi Kedaton",
                "address": "Jl. Teuku Umar / Jl. Sultan Agung No.1, Lampung (Bandar Lampung)",
                "lat": -5.434,
                "lng": 105.266
            },
            {
                "name": "Unimas Waru",
                "address": "Universitas Muhammadiyah Sidoarjo / Waru area",
                "lat": -7.351,
                "lng": 112.68
            },
            {
                "name": "Green Sedayu Mall",
                "address": "Jl. Taman Palem Lestari No.2, Cengkareng, Jakarta Barat",
                "lat": -6.1475,
                "lng": 106.76
            },
            {
                "name": "Mall Ciputra Tangerang",
                "address": "Ciputra Mall, Tangerang",
                "lat": -6.21,
                "lng": 106.652
            },
            {
                "name": "Duta Mall Banjarmasin",
                "address": "Jl. A. Yani, Sungai Baru, Banjarmasin, Kalimantan Selatan",
                "lat": -3.323,
                "lng": 114.592
            },
            {
                "name": "Living World Denpasar",
                "address": "Jl. Gatot Subroto Timur, Denpasar Utara, Bali",
                "lat": -8.639,
                "lng": 115.213
            },
            {
                "name": "Jambi Town Square",
                "address": "Jl. Kapt. A. Bakaruddin No.88, Simpang III Sipin, Jambi",
                "lat": -1.61,
                "lng": 103.628
            },
            {
                "name": "Icon Mall Sanur Bali",
                "address": "Sanur, Bali area",
                "lat": -8.696,
                "lng": 115.264
            },
            {
                "name": "AEON Mall JGC",
                "address": "Jl. Jkt Garden City Boulevard No.1, Cakung, Jakarta",
                "lat": -6.165,
                "lng": 106.935
            },
            {
                "name": "Pakuwon Mall Solo Baru",
                "address": "Jl. Ir. Soekarno, Dusun II, Madegondo, Solo Baru",
                "lat": -7.552,
                "lng": 110.768
            },
            {
                "name": "Pakuwon Mall Bekasi",
                "address": "Pakuwon Mall Bekasi area, Bekasi",
                "lat": -6.245,
                "lng": 107.0
            },
            {
                "name": "Kota Harapan Indah",
                "address": "Jl. Harapan Indah Boulevard, Medan Satria, Bekasi",
                "lat": -6.325,
                "lng": 107.011
            },
            {
                "name": "Queen City Mall Semarang",
                "address": "Jl. Pemuda No.27-31, Pandansari, Semarang Tengah",
                "lat": -6.9667,
                "lng": 110.4167
            },
            {
                "name": "Festival Citylink Bandung",
                "address": "Jl. Peta No.241, Bandung",
                "lat": -6.923,
                "lng": 107.612
            },
            {
                "name": "Summarecon Mall Bekasi",
                "address": "Summarecon Bekasi, Bekasi",
                "lat": -6.237,
                "lng": 106.995
            },
            {
                "name": "La Piazza Kelapa Gading",
                "address": "Jl. Boulevard Raya, Kelapa Gading, Jakarta Utara",
                "lat": -6.1375,
                "lng": 106.894
            },
            {
                "name": "Cirebon Superblock",
                "address": "Cirebon Superblock area, Cirebon, Jawa Barat",
                "lat": -6.732,
                "lng": 108.552
            },
            {
                "name": "Living World Alam Sutera",
                "address": "Jl. Alam Sutera Boulevard No.Kav. 21, Alam Sutera, Serpong Utara",
                "lat": -6.249,
                "lng": 106.588
            },
            {
                "name": "AEON Deltamas",
                "address": "AEON Mall Deltamas, Cikarang, Bekasi",
                "lat": -6.37,
                "lng": 107.209
            },
            {
                "name": "Lippo Plaza Sidoarjo",
                "address": "Lippo Plaza Sidoarjo area, Sidoarjo, East Java",
                "lat": -7.446,
                "lng": 112.718
            },
            {
                "name": "Summarecon Mall Bandung",
                "address": "Jl. Grand Boulevard No.1 Rancabolang, Gedebage, Bandung",
                "lat": -6.885,
                "lng": 107.689
            },
            {
                "name": "Kota Wisata Cibubur",
                "address": "Jl. Boulevard Kota Wisata, Cibubur, Bogor",
                "lat": -6.38,
                "lng": 106.948
            },
            {
                "name": "Pakuwon City Mall Surabaya",
                "address": "Pakuwon City Mall area, Surabaya",
                "lat": -7.3,
                "lng": 112.68
            },
            {
                "name": "Resinda Park Mall",
                "address": "Resinda Park Mall (note: 'off bulan juli' previously), Bekasi area",
                "lat": -6.238,
                "lng": 106.999
            },
            {
                "name": "Cella Warehouse",
                "address": "Cella Warehouse (listed)",
                "lat": -6.2,
                "lng": 106.8
            }
        ];

        // Tambahkan marker ke peta
        const markers = [];
        malls.forEach(mall => {
            const marker = L.marker([mall.lat, mall.lng], {
                    icon: orangeIcon
                }) // ✅ pakai icon custom
                .addTo(map)
                .bindPopup(`<b>${mall.name}</b><br>${mall.address}`);
            markers.push({
                ...mall,
                marker
            });
        });

        const listGrid = document.getElementById('mall-grid');
        const itemsPerColumn = 5;

        function renderGridAll() {
            if (!listGrid) return;
            listGrid.innerHTML = '';

            const totalColumnsAll = Math.ceil(malls.length / itemsPerColumn);
            for (let col = 0; col < totalColumnsAll; col++) {
                const ul = document.createElement('ul');
                const start = col * itemsPerColumn;
                const slice = malls.slice(start, start + itemsPerColumn);

                slice.forEach((mall, idx) => {
                    const li = document.createElement('li');
                    li.textContent = mall.name;
                    li.title = mall.address;
                    li.addEventListener('click', () => {
                        const markerIndex = start + idx;
                        const mm = malls[markerIndex];
                        map.setView([mm.lat, mm.lng], 14);
                        if (markers[markerIndex]) markers[markerIndex].openPopup();
                    });
                    ul.appendChild(li);
                });

                listGrid.appendChild(ul);
            }
        }

        renderGridAll();

        const mallsPerPage = 15; // 3 columns × 5 items
        let currentPage = 1;

        // Render malls into the grid
        function renderMalls(page) {
            if (!listGrid) return;
            listGrid.innerHTML = "";

            const start = (page - 1) * mallsPerPage;
            const slice = malls.slice(start, start + mallsPerPage);

            // Split into 3 columns × 5 items
            const itemsPerColumn = 5;
            const totalColumns = Math.ceil(slice.length / itemsPerColumn);

            for (let col = 0; col < totalColumns; col++) {
                const ul = document.createElement("ul");
                const startIdx = col * itemsPerColumn;
                const columnSlice = slice.slice(startIdx, startIdx + itemsPerColumn);

                columnSlice.forEach((mall, idx) => {
                    const li = document.createElement("li");
                    li.textContent = mall.name;
                    li.title = mall.address;
                    li.addEventListener("click", () => {
                        const globalIndex = start + startIdx + idx;
                        map.setView([mall.lat, mall.lng], 14);
                        markers[globalIndex].openPopup();
                    });
                    ul.appendChild(li);
                });

                listGrid.appendChild(ul);
            }
        }

        // Render pagination (with ellipsis)
        function renderPagination(totalItems, itemsPerPage, currentPage) {
            const totalPages = Math.ceil(totalItems / itemsPerPage);
            const pagination = document.getElementById("pagination");
            pagination.innerHTML = "";

            function createPage(label, page, isActive = false, isDisabled = false) {
                const li = document.createElement("li");
                const a = document.createElement("a");
                a.textContent = label;

                if (isActive) li.classList.add("active");
                if (isDisabled) li.classList.add("disabled");

                if (!isDisabled && !isActive && page !== null) {
                    a.addEventListener("click", () => {
                        renderMalls(page);
                        renderPagination(totalItems, itemsPerPage, page);
                    });
                }

                li.appendChild(a);
                pagination.appendChild(li);
            }

            // Prev button
            createPage("«", currentPage - 1, false, currentPage === 1);

            const delta = 2;
            const range = [];
            for (let i = 1; i <= totalPages; i++) {
                if (i === 1 || i === totalPages || (i >= currentPage - delta && i <= currentPage + delta)) {
                    range.push(i);
                }
            }

            let prev = null;
            for (let i of range) {
                if (prev && i - prev > 1) {
                    createPage("...", null, false, true);
                }
                createPage(i, i, i === currentPage);
                prev = i;
            }

            // Next button
            createPage("»", currentPage + 1, false, currentPage === totalPages);
        }

        // Initial render
        renderMalls(currentPage);
        renderPagination(malls.length, mallsPerPage, currentPage);


        // Optional safe search handler (only attach if element exists)
        const searchEl = document.getElementById('searchInput');
        if (searchEl) {
            searchEl.addEventListener('input', function() {
                const kw = this.value.toLowerCase().trim();
                if (!kw) return;
                for (let i = 0; i < malls.length; i++) {
                    if (malls[i].name.toLowerCase().includes(kw) || (malls[i].address || '').toLowerCase().includes(
                            kw)) {
                        map.setView([malls[i].lat, malls[i].lng], 14);
                        markers[i].openPopup();
                        break;
                    }
                }
            });
        }
    </script>
@endsection
