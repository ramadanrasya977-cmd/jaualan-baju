```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koleksi Jersey - JerseyBola Premium</title>

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
            background:linear-gradient(135deg,#ffffff,#22c55e,#4f46e5);
            -webkit-background-clip:text;
            -webkit-text-fill-color:transparent;
            margin-bottom:1rem;
        }

        .hero p{
            opacity:0.8;
            font-size:1.2rem;
        }

        /* SEARCH */
        .search-box{
            max-width:600px;
            margin:40px auto;
            display:flex;
            gap:1rem;
        }

        .search-box input{
            flex:1;
            padding:1rem;
            border:none;
            border-radius:15px;
            background:rgba(255,255,255,0.08);
            color:white;
            font-size:1rem;
            outline:none;
        }

        .search-box button{
            padding:1rem 2rem;
            border:none;
            border-radius:15px;
            background:linear-gradient(135deg,#22c55e,#16a34a);
            color:white;
            font-weight:600;
            cursor:pointer;
        }

        /* FILTER */
        .filter-buttons{
            display:flex;
            justify-content:center;
            flex-wrap:wrap;
            gap:1rem;
            margin-bottom:4rem;
        }

        .filter-btn{
            padding:0.8rem 1.5rem;
            border:none;
            border-radius:50px;
            background:rgba(255,255,255,0.08);
            color:white;
            cursor:pointer;
            transition:0.3s;
        }

        .filter-btn:hover{
            background:#22c55e;
            transform:translateY(-3px);
        }

        /* PRODUCTS */
        .products{
            max-width:1200px;
            margin:auto;
            padding:0 2rem 100px;
        }

        .products-grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
            gap:2rem;
        }

        .product-card{
            background:rgba(255,255,255,0.06);
            border:1px solid rgba(255,255,255,0.1);
            backdrop-filter:blur(10px);
            border-radius:25px;
            overflow:hidden;
            transition:0.4s;
            position:relative;
        }

        .product-card:hover{
            transform:translateY(-10px);
            box-shadow:0 25px 50px rgba(0,0,0,0.4);
        }

        .badge{
            position:absolute;
            top:15px;
            left:15px;
            background:#22c55e;
            color:white;
            padding:0.4rem 1rem;
            border-radius:50px;
            font-size:0.8rem;
            font-weight:600;
            z-index:2;
        }

        .product-image{
            width:100%;
            height:320px;
            object-fit:cover;
        }

        .product-content{
            padding:1.5rem;
        }

        .product-title{
            font-size:1.4rem;
            font-weight:700;
            margin-bottom:0.5rem;
        }

        .product-desc{
            opacity:0.7;
            font-size:0.95rem;
            margin-bottom:1rem;
        }

        .price{
            font-size:1.8rem;
            color:#22c55e;
            font-weight:800;
            margin-bottom:1.5rem;
        }

        .btn{
            width:100%;
            padding:1rem;
            border:none;
            border-radius:15px;
            background:linear-gradient(135deg,#22c55e,#16a34a);
            color:white;
            font-weight:600;
            cursor:pointer;
            transition:0.3s;
        }

        .btn:hover{
            transform:scale(1.03);
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

        @media(max-width:768px){

            .hero h1{
                font-size:2.8rem;
            }

            .nav-menu{
                display:none;
            }

            .search-box{
                flex-direction:column;
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
                <li><a href="/tentang" class="nav-link">tentang</a></li>
                <li><a href="/produk" class="nav-link">Produk</a></li>
                <li><a href="/blog" class="nav-link">Blog</a></li>
                <li><a href="/kontak" class="nav-link">Kontak</a></li>
                 
            </ul>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero">
        <h1>KOLEKSI JERSEY 2026</h1>
        <p>Pilih jersey klub favoritmu dengan kualitas premium.</p>

        <div class="search-box">
            <input type="text" placeholder="Cari jersey favoritmu...">
            <button>Cari</button>
        </div>
    </section>

    <!-- FILTER -->
    <div class="filter-buttons">
        <button class="filter-btn">Semua</button>
        <button class="filter-btn">Barcelona</button>
        <button class="filter-btn">Real Madrid</button>
        <button class="filter-btn">Manchester</button>
        <button class="filter-btn">PSG</button>
    </div>

    <!-- PRODUCTS -->
    <section class="products">

        <div class="products-grid">

            <div class="product-card">
                <div class="badge">NEW</div>

                <img src="https://images.unsplash.com/photo-1572613606611-8f1a170a2f50?w=400"
                class="product-image">

                <div class="product-content">
                    <h3 class="product-title">Barcelona Home 2026</h3>

                    <p class="product-desc">
                        Jersey terbaru Barcelona dengan material premium dan nyaman digunakan.
                    </p>

                    <div class="price">Rp 899.000</div>

                    <button class="btn">Tambah ke Keranjang</button>
                </div>
            </div>

            <div class="product-card">
                <div class="badge">HOT</div>

                <img src="https://images.unsplash.com/photo-1600612414856-065d4ef3bd2f?w=400"
                class="product-image">

                <div class="product-content">
                    <h3 class="product-title">Real Madrid Away</h3>

                    <p class="product-desc">
                        Desain elegan dengan kualitas original grade premium.
                    </p>

                    <div class="price">Rp 949.000</div>

                    <button class="btn">Tambah ke Keranjang</button>
                </div>
            </div>

            <div class="product-card">
                <div class="badge">SALE</div>

                <img src="https://images.unsplash.com/photo-1593342220-0e310792ad00?w=400"
                class="product-image">

                <div class="product-content">
                    <h3 class="product-title">Manchester United</h3>

                    <p class="product-desc">
                        Jersey home terbaru dengan detail bordir premium.
                    </p>

                    <div class="price">Rp 879.000</div>

                    <button class="btn">Tambah ke Keranjang</button>
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
