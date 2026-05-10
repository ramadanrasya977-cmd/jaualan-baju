```html id="f4x8qa"
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kontak - JerseyBola Premium</title>

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

        /* CONTACT */

        .contact-section{
            max-width:1200px;
            margin:auto;
            padding:0 2rem 100px;
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:3rem;
        }

        .contact-info,
        .contact-form{
            background:rgba(255,255,255,0.05);
            border:1px solid rgba(255,255,255,0.1);
            border-radius:25px;
            padding:2rem;
            backdrop-filter:blur(15px);
        }

        .contact-info h2,
        .contact-form h2{
            margin-bottom:2rem;
            font-size:2rem;
        }

        .info-box{
            margin-bottom:2rem;
        }

        .info-box h3{
            color:#22c55e;
            margin-bottom:0.5rem;
        }

        .info-box p{
            opacity:0.8;
        }

        .form-group{
            margin-bottom:1.5rem;
        }

        .form-group input,
        .form-group textarea{
            width:100%;
            padding:1rem;
            border:none;
            border-radius:15px;
            background:rgba(255,255,255,0.08);
            color:white;
            outline:none;
            font-size:1rem;
        }

        textarea{
            min-height:150px;
            resize:none;
        }

        .btn{
            width:100%;
            padding:1rem;
            border:none;
            border-radius:15px;
            background:linear-gradient(135deg,#22c55e,#16a34a);
            color:white;
            font-size:1rem;
            font-weight:600;
            cursor:pointer;
            transition:0.3s;
        }

        .btn:hover{
            transform:translateY(-3px);
        }

        /* MAP */

        .map{
            margin-top:2rem;
            border-radius:20px;
            overflow:hidden;
        }

        .map iframe{
            width:100%;
            height:250px;
            border:none;
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

        @media(max-width:900px){

            .contact-section{
                grid-template-columns:1fr;
            }

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

        <h1>HUBUNGI KAMI</h1>

        <p>Kami siap membantu kebutuhan jersey premium favoritmu.</p>

    </section>

    <!-- CONTACT -->

    <section class="contact-section">

        <!-- INFO -->

        <div class="contact-info">

            <h2>Informasi Toko</h2>

            <div class="info-box">
                <h3>📍 Alamat</h3>
                <p>Jl. Fashion Bola No. 10, Indonesia</p>
            </div>

            <div class="info-box">
                <h3>📞 WhatsApp</h3>
                <p>+62 812-3456-7890</p>
            </div>

            <div class="info-box">
                <h3>📧 Email</h3>
                <p>jerseybola@gmail.com</p>
            </div>

            <div class="info-box">
                <h3>📸 Instagram</h3>
                <p>@jerseybola.premium</p>
            </div>

            <div class="map">

                <iframe 
                src="https://maps.google.com/maps?q=jakarta&t=&z=13&ie=UTF8&iwloc=&output=embed">
                </iframe>

            </div>

        </div>

        <!-- FORM -->

        <div class="contact-form">

            <h2>Kirim Pesan</h2>

            <form>

                <div class="form-group">
                    <input type="text" placeholder="Nama Lengkap">
                </div>

                <div class="form-group">
                    <input type="email" placeholder="Email">
                </div>

                <div class="form-group">
                    <textarea placeholder="Tulis pesan kamu..."></textarea>
                </div>

                <button class="btn">Kirim Pesan</button>

            </form>

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
