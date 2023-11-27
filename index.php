<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEDAI KOPI KAMI</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- Navigasi Bar Start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Kenangan <span>Senja</span></a>


        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="circle"></i></a>
            <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- Navigasi Bar END -->

    <!-- Hero Section Start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Mari Nikmati Secangkir <span>KOPI</span></h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non, vel.</p>
            <a href="#" class="cta">Beli Sekarang</a>
        </main>
    </section>
    <!-- Hero Section END -->
    <!-- About Section Start -->
    <section id="about" class="about">

        <h2><span>Tentang </span>Kami</h2>

        <div class="row">
            <div class="about-img">
                <img src="img/vote.jpg" alt="Tentang Kami">
            </div>
            <div class="content">
                <h3>Kenapa memilih KOPI KAMI</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eum, voluptates maiores consequuntur
                    laborum cumque.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error eveniet ea corporis odio similique
                    illo nostrum sint aperiam veritatis id!</p>
            </div>
        </div>
    </section>
    <!-- About Section END -->

    <!-- Menu Section Start -->
    <section id="menu" class="menu">

        <h2><span>Menu </span>Kami</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque explicabo vel reprehenderit asperiores
            temporibus aspernatur non quisquam inventore vitae officiis?</p>

        <div class="row">
            <div class="menu-card">
                <img src="img/indonesia-flag.jpg" alt="Bendera" class="menu-card-image">
                <h3 class="menu-card-title">- Bendera Indonesia -</h3>
                <p class="menu-card-price">100K IDR</p>
            </div>
            <div class="menu-card">
                <img src="img/indonesia-flag.jpg" alt="Bendera" class="menu-card-image">
                <h3 class="menu-card-title">- Bendera Indonesia -</h3>
                <p class="menu-card-price">100K IDR</p>
            </div>
            <div class="menu-card">
                <img src="img/indonesia-flag.jpg" alt="Bendera" class="menu-card-image">
                <h3 class="menu-card-title">- Bendera Indonesia -</h3>
                <p class="menu-card-price">100K IDR</p>
            </div>
            <div class="menu-card">
                <img src="img/indonesia-flag.jpg" alt="Bendera" class="menu-card-image">
                <h3 class="menu-card-title">- Bendera Indonesia -</h3>
                <p class="menu-card-price">100K IDR</p>
            </div>
        </div>

    </section>
    <!-- Menu Section END -->


    <!-- Kontak Section Start -->

    <section id="contact" class="contact">

        <h2><span>Kontak </span>Kami</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, consequatur.</p>

        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15816.544688127586!2d111.0761456802086!3d-7.668506111619024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a20af40596f67%3A0xf6e2da843399852d!2sBandardawung%2C%20Kec.%20Tawangmangu%2C%20Kabupaten%20Karanganyar%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1701059752073!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

            <form action="">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="nama">
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" placeholder="email">
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="text" placeholder="no hp">
                </div>
                <button type="submit" class="btn">Kirim Pesan</button>
            </form>
        </div>
    </section>
    <!-- Kontak Section END -->

    <!-- Footer Start -->
    <footer>
        <div class="social">
            <a href=""><i data-feather="instagram"></i></a>
            <a href=""><i data-feather="facebook"></i></a>
            <a href=""><i data-feather="twitter"></i></a>
        </div>
        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
        </div>
        <div class="credit">
            <p>Created by <span>Panitia Pemungutan Suara </span><a href="">Desa Bandardawung</a>. | &copy; 2023</p>
        </div>
    </footer>
    <!-- Footer Start -->

    <!-- Feather Icon End -->
    <script>
    feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
</body>

</html>