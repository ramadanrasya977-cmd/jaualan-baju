<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - JerseyBola Premium</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
            color: white;
            overflow-x: hidden;
        }

        /* NAVBAR */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(20px);
            z-index: 1000;
            padding: 1rem 0;
            transition: all 0.3s ease;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            background: linear-gradient(135deg, #22c55e, #4f46e5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover {
            color: #22c55e;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background: linear-gradient(90deg, #22c55e, #4f46e5);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 4px;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background: white;
            transition: 0.3s;
        }

        /* HERO */
        .hero {
            min-height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(135deg, rgba(34, 197, 94, 0.1), rgba(79, 70, 229, 0.1));
            margin-top: 80px;
        }

        .hero-content {
            max-width: 800px;
            padding: 0 2rem;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, white, #22c55e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* SECTIONS */
        .section {
            padding: 100px 0;
            max-width: 1200px;
            margin: 0 auto;
            padding-left: 2rem;
            padding-right: 2rem;
        }

        .section-title {
            text-align: center;
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 4rem;
            background: linear-gradient(135deg, white, #22c55e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* STORY SECTION */
        .story-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .story-text {
            font-size: 1.2rem;
            line-height: 1.8;
            opacity: 0.9;
        }

        .story-image {
            width: 100%;
            height: 400px;
            background: linear-gradient(45deg, #22c55e, #4f46e5);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            transition: transform 0.4s ease;
        }

        /* FEATURES GRID */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 4rem;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            padding: 2.5rem;
            border-radius: 20px;
            text-align: center;
            transition: all 0.4s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
            opacity: 0;
            transform: translateY(50px);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .feature-icon {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, #22c55e, #4f46e5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .feature-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        /* STATS */
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin: 4rem 0;
            text-align: center;
        }

        .stat {
            opacity: 0;
            transform: translateY(30px);
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 800;
            color: #22c55e;
            display: block;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .hamburger {
                display: flex;
            }

            .nav-menu {
                position: fixed;
                left: -100%;
                top: 70px;
                flex-direction: column;
                background-color: #0f172a;
                width: 100%;
                text-align: center;
                transition: 0.3s;
                padding: 2rem 0;
            }

            .nav-menu.active {
                left: 0;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .story-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .section {
                padding: 60px 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">⚽ JerseyBola</div>
            <ul class="nav-menu">
                <li><a href="/beranda" class="nav-link">Beranda</a></li>
                <li><a href="/tentang" class="nav-link active">Tentang</a></li>
                <li><a href="/produk" class="nav-link">Produk</a></li>
                <li><a href="/blog" class="nav-link">Blog</a></li>
                <li><a href="/kontak" class="nav-link">Kontak</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-content">
            <h1>Tentang Kami</h1>
            <p>#1 Toko Jersey Bola Premium di Indonesia</p>
        </div>
    </section>

    <!-- STORY SECTION -->
    <section class="section">
        <div class="story-content">
            <div class="story-text">
                <h2 style="font-size: 2.5rem; margin-bottom: 2rem; background: linear-gradient(135deg, white, #22c55e); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    Cerita Kami
                </h2>
                <p>Didirikan tahun 2020, JerseyBola telah menjadi destinasi utama para penggemar sepakbola di Indonesia untuk mendapatkan jersey original berkualitas premium. Kami bekerja sama langsung dengan distributor resmi klub-klub top Eropa.</p>
                <p style="margin-top: 1.5rem;">Setiap jersey yang kami jual telah melalui quality check ketat untuk memastikan Anda mendapatkan produk terbaik dengan harga paling kompetitif.</p>
            </div>
            <div class="story-image">🏆</div>
        </div>
    </section>

    <!-- FEATURES -->
    <section class="section">
        <h2 class="section-title">Kenapa Pilih JerseyBola?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">✅</div>
                <h3 class="feature-title">100% Original</h3>
                <p>Garansi jersey original dari distributor resmi klub Eropa</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h3 class="feature-title">Pengiriman Cepat</h3>
                <p>Expedisi terlengkap, kirim hari yang sama untuk Jabodetabek</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🛡️</div>
                <h3 class="feature-title">Kualitas Terjamin</h3>
                <p>Quality check setiap produk sebelum dikirim ke customer</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">💰</div>
                <h3 class="feature-title">Harga Terbaik</h3>
                <p>Harga pabrik langsung, diskon spesial setiap bulan</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📦</div>
                <h3 class="feature-title">Packing Premium</h3>
                <p>Packing anti air + bubble wrap untuk perlindungan maksimal</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">⭐</div>
                <h3 class="feature-title">Testimoni 5⭐</h3>
                <p>99% customer puas dan repeat order</p>
            </div>
        </div>
    </section>

    <!-- STATS -->
    <section class="stats" style="padding: 0 2rem;">
        <div class="stat">
            <span class="stat-number" data-target="5000">0</span>
            <span>Jersey Terjual</span>
        </div>
        <div class="stat">
            <span class="stat-number" data-target="50">0</span>
            <span>Klub Tersedia</span>
        </div>
        <div class="stat">
            <span class="stat-number" data-target="99">0</span>
            <span>% Kepuasan</span>
        </div>
        <div class="stat">
            <span class="stat-number" data-target="24">0</span>
            <span>Jam Pengiriman</span>
        </div>
    </section>

    <script>
        // Mobile menu
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');

        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });

        // Navbar scroll
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.style.background = 'rgba(15, 23, 42, 0.98)';
            } else {
                navbar.style.background = 'rgba(15, 23, 42, 0.95)';
            }
        });

        // Counter animation
        const animateCounters = () => {
            const counters = document.querySelectorAll('.stat-number');
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / 100;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(animateCounters, 20);
                } else {
                    counter.innerText = target;
                }
            });
        };

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    
                    if (entry.target.classList.contains('stat')) {
                        animateCounters();
                    }
                }
            });
        }, observerOptions);

        document.querySelectorAll('.feature-card, .stat').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>