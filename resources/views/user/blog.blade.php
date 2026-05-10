```html id="m4x7qp"
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blog - JerseyBola Premium</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Poppins',sans-serif;
            background:linear-gradient(135deg,#0f172a 0%,#1e293b 50%,#334155 100%);
            color:white;
            overflow-x:hidden;
        }

        /* NAVBAR */

        .navbar{
            position:fixed;
            top:0;
            width:100%;
            background:rgba(15,23,42,0.95);
            backdrop-filter:blur(20px);
            z-index:1000;
            padding:1rem 0;
        }

        .nav-container{
            max-width:1200px;
            margin:auto;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:0 2rem;
        }

        .logo{
            font-size:1.8rem;
            font-weight:800;
            background:linear-gradient(135deg,#22c55e,#4f46e5);
            -webkit-background-clip:text;
            -webkit-text-fill-color:transparent;
        }

        .nav-menu{
            display:flex;
            list-style:none;
            gap:2rem;
        }

        .nav-link{
            text-decoration:none;
            color:white;
            transition:0.3s;
        }

        .nav-link:hover{
            color:#22c55e;
        }

        /* HERO */

        .hero{
            padding-top:140px;
            text-align:center;
            padding-bottom:80px;
        }

        .hero h1{
            font-size:4rem;
            font-weight:800;
            margin-bottom:1rem;
            background:linear-gradient(135deg,#ffffff,#22c55e,#4f46e5);
            -webkit-background-clip:text;
            -webkit-text-fill-color:transparent;
        }

        .hero p{
            opacity:0.8;
            font-size:1.2rem;
        }

        /* BLOG */

        .blog-section{
            max-width:1200px;
            margin:auto;
            padding:0 2rem 100px;
        }

        .blog-grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
            gap:2rem;
        }

        .blog-card{
            background:rgba(255,255,255,0.05);
            border:1px solid rgba(255,255,255,0.1);
            border-radius:25px;
            overflow:hidden;
            transition:0.4s;
            backdrop-filter:blur(15px);
        }

        .blog-card:hover{
            transform:translateY(-10px);
            box-shadow:0 25px 50px rgba(0,0,0,0.4);
        }

        .blog-image{
            width:100%;
            height:240px;
            object-fit:cover;
        }

        .blog-content{
            padding:2rem;
        }

        .blog-date{
            color:#22c55e;
            font-size:0.9rem;
            margin-bottom:1rem;
        }

        .blog-title{
            font-size:1.5rem;
            font-weight:700;
            margin-bottom:1rem;
        }

        .blog-desc{
            opacity:0.75;
            line-height:1.7;
            margin-bottom:1.5rem;
        }

        .btn{
            display:inline-block;
            padding:0.9rem 1.8rem;
            border-radius:15px;
            background:linear-gradient(135deg,#22c55e,#16a34a);
            color:white;
            text-decoration:none;
            font-weight:600;
            transition:0.3s;
        }

        .btn:hover{
            transform:translateY(-3px);
        }

        /* FOOTER */

        footer{
            text-align:center;
            padding:3rem 2rem;
            background:rgba(0,0,0,0.2);
        }

        footer h3{
            margin-bottom:1rem;
        }

        footer p{
            opacity:0.7;
        }

        /* RESPONSIVE */

        @media(max-width:768px){

            .hero h1{
                font-size:2.8rem;
            }

            .nav-menu{
                display:none;
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
             <li><a href="/tentang" class="nav-link">Tentang</a></li>
                <li><a href="/produk" class="nav-link">Produk</a></li>
                <li><a href="/blog" class="nav-link">Blog</a></li>
                <li><a href="/kontak" class="nav-link">Kontak</a></li>
            </ul>

        </div>

    </nav>

    <!-- HERO -->

    <section class="hero">

        <h1>BLOG & NEWS</h1>

        <p>Update terbaru dunia jersey dan fashion sepak bola premium.</p>

    </section>

    <!-- BLOG SECTION -->

    <section class="blog-section">

        <div class="blog-grid">

            <!-- BLOG 1 -->

            <div class="blog-card">

                <img 
                src="https://images.unsplash.com/photo-1517466787929-bc90951d0974?w=800"
                class="blog-image">

                <div class="blog-content">

                    <div class="blog-date">
                        10 Mei 2026
                    </div>

                    <h2 class="blog-title">
                        Jersey Terbaik Musim 2026
                    </h2>

                    <p class="blog-desc">
                        Daftar jersey sepak bola paling keren dan paling banyak dicari tahun 2026 dengan desain modern dan kualitas premium.
                    </p>

                    <a href="#" class="btn">
                        Baca Selengkapnya
                    </a>

                </div>

            </div>

            <!-- BLOG 2 -->

            <div class="blog-card">

                <img 
                src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?w=800"
                class="blog-image">

                <div class="blog-content">

                    <div class="blog-date">
                        7 Mei 2026
                    </div>

                    <h2 class="blog-title">
                        Cara Membedakan Jersey Original
                    </h2>

                    <p class="blog-desc">
                        Pelajari tips penting membedakan jersey original dan KW agar tidak salah membeli produk sepak bola premium.
                    </p>

                    <a href="#" class="btn">
                        Baca Selengkapnya
                    </a>

                </div>

            </div>

            <!-- BLOG 3 -->

            <div class="blog-card">

                <img 
                src="/images/mu.jpg" alt="Manchester United Jersey"
                class="blog-image">

                <div class="blog-content">

                    <div class="blog-date">
                        2 Mei 2026
                    </div>

                    <h2 class="blog-title">
                        Trend Fashion Jersey Streetwear
                    </h2>

                    <p class="blog-desc">
                        Jersey sepak bola kini menjadi bagian fashion streetwear modern yang dipakai oleh banyak anak muda.
                    </p>

                    <a href="#" class="btn">
                        Baca Selengkapnya
                    </a>

                </div>

            </div>

        </div>

    </section>

    <!-- FOOTER -->

    <footer>

        <h3>⚽ JerseyBola Premium</h3>

        <p>© 2026 All Rights Reserved</p>

    </footer>

</body>
</html>
```
