<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JerseyBola Premium - Koleksi Jersey Terlengkap 2026</title>
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

        /* HERO SECTION */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><radialGradient id="a" cx="50%" cy="50%"><stop offset="0%" stop-color="%23ffffff11"/><stop offset="50%" stop-color="%2322c55e22"/><stop offset="100%" stop-color="%23000000"/></radialGradient></defs><rect width="100%" height="100%" fill="url(%23a)"/></svg>') center/cover;
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        .hero-content {
            max-width: 800px;
            padding: 0 2rem;
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: clamp(3rem, 8vw, 6rem);
            font-weight: 800;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, white 0%, #22c55e 50%, #4f46e5 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            opacity: 0;
            transform: translateY(50px);
            animation: fadeUp 1s ease forwards;
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 2.5rem;
            opacity: 0.9;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 1s ease 0.3s forwards;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 1s ease 0.6s forwards;
        }

        .btn {
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: linear-gradient(135deg, #22c55e, #16a34a);
            color: white;
            box-shadow: 0 10px 30px rgba(34, 197, 94, 0.4);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(34, 197, 94, 0.6);
        }

        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid #4f46e5;
        }

        .btn-secondary:hover {
            background: #4f46e5;
            transform: translateY(-3px);
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

        /* FEATURED PRODUCTS */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 4rem;
        }

        .product-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            transition: all 0.4s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
            opacity: 0;
            transform: translateY(50px);
        }

        .product-card:hover {
            transform: translateY(-10px) scale(1.02);
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5);
        }

        .product-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 1.5rem;
            transition: transform 0.4s ease;
        }

        .product-card:hover .product-image {
            transform: scale(1.05);
        }

        .product-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .product-price {
            font-size: 1.8rem;
            font-weight: 800;
            color: #22c55e;
            margin-bottom: 1.5rem;
        }

        /* PROMO SECTION */
        .promo {
            background: linear-gradient(135deg, rgba(34, 197, 94, 0.2), rgba(79, 70, 229, 0.2));
            border-radius: 30px;
            padding: 4rem;
            text-align: center;
            margin: 4rem 0;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .promo h3 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
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

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .products-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
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
                <li><a href="/beranda" class="nav-link active">Beranda</a></li>
                <li><a href="/tentang" class="nav-link">Tentang</a></li>
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

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-content">
            <h1>JERSEY BOLA<br>PREMIUM 2026</h1>
            <p>Koleksi jersey original dari klub-klub terbaik dunia. Kualitas premium, harga terjangkau.</p>
            <div class="cta-buttons">
                <a href="gallery.html" class="btn btn-primary">Beli Sekarang</a>
                <a href="#featured" class="btn btn-secondary">Lihat Koleksi</a>
            </div>
        </div>
    </section>

    <!-- FEATURED PRODUCTS -->
    <section class="section" id="featured">
        <h2 class="section-title">🏆 Featured Jerseys</h2>
        <div class="products-grid">
            <div class="product-card">
                <img src="/images/barcelona.jpg" alt="Barcelona Jersey">
                <h3 class="product-title">FC Barcelona Home 2026</h3>
                <div class="product-price">Rp 800.000</div>
                <a href="gallery.html" class="btn btn-primary">Add to Cart</a>
            </div>
            <div class="product-card">
                <img src="/images/madrid.jpg" alt="Real Madrid Jersey">
                <h3 class="product-title">Real Madrid Home 2026</h3>
                <div class="product-price">Rp 900.000</div>
                <a href="gallery.html" class="btn btn-primary">Add to Cart</a>
            </div>
            <div class="product-card">
                <img src="/images/mu.jpg" alt="Manchester United Jersey" class="product-image">
                <h3 class="product-title">Man United Home 2026</h3>
                <div class="product-price">Rp 500.000</div>
                <a href="gallery.html" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </section>

    <!-- PROMO SECTION -->
    <section class="promo">
        <h3>🔥 DISKON 20% UNTUK 50 PEMBELI PERTAMA!</h3>
        <p>Gunakan kode: <strong>JERSEY2026</strong> di checkout</p>
        <a href="gallery.html" class="btn btn-primary" style="margin-top: 2rem;">Pesan Sekarang</a>
    </section>

    <script>
        // Mobile menu toggle
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');

        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.style.background = 'rgba(15, 23, 42, 0.98)';
                navbar.style.padding = '0.8rem 0';
            } else {
                navbar.style.background = 'rgba(15, 23, 42, 0.95)';
                navbar.style.padding = '1rem 0';
            }
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Fade-up animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe product cards
        document.querySelectorAll('.product-card').forEach(card => {
            observer.observe(card);
        });
    </script>
</body>
</html>