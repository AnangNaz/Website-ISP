<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">

    <!-- feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My style -->
    <link rel="stylesheet" href="css/style1.css"> 

    <!-- alpineJS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- App -->
     <script src="src/app.js"></script>
</head>
<body>



 <!-- Navbar  start-->
    <nav class="navbar" x-data>
        <a href="#" class="navbar-logo">Azarel<span>NET</span>.</a>
        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#Gallary">Promosi</a>
            <a href="#menu">Produk</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search-button"><i data-feather="search"></i></a>
            <a href="#" id="shopping-cart-button"><i data-feather="shopping-cart"></i>
                <span class="quantity-badge" x-show="$store.cart.quantity" x-text="$store.cart.quantity"></span>
            </a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
</nav>
<!-- Navbar End -->

<!-- Hero Section Start -->
<section class="hero" id="home">
    <main class="content">
        <h1>Internetan Tanpa FUP <span>AzarelNET Solusinya</span></h1>
        <p>"Internet Cepat Buat Apa ?" - Entitas Tidak Di kenal</p>
        <a href="https://wa.me/6282339705798?text=Halo%20saya%20ingin%20berlangganan" class="cta">Langganan Sekarang</a>
    </main>
</section>
<!-- Hero Section End -->

    <!--Gallary-->

    <div class="gallary" id="Gallary">
        <h1>Promotion<span>Gallary</span></h1>

        <div class="gallary_image_box">
            <div class="gallary_image">
                <img src="img/wifi.jpg">

                <h3>Wifi</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi sint eveniet laboriosam 
                </p>
                <a href="#" class="gallary_btn">Order Now</a>
            </div>

            <div class="gallary_image">
                <img src="img/wifi2.jpg">

                <h3>Wifi</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi sint eveniet laboriosam 
                </p>
                <a href="#" class="gallary_btn">Order Now</a>
            </div>

            <div class="gallary_image">
                <img src="img/wifi3.jpg">

                <h3>Wifi</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi sint eveniet laboriosam 
                </p>
                <a href="#" class="gallary_btn">Order Now</a>
            </div>
            </div>

</div>

<!--Menu-->

    <section class ="menu" id="menu">
    <h1>Layanan<span>Kami</span></h1>
    

    <div class="menu_box">
        <div class="menu_card">

            <div class="menu_image">
                <img src="img/SPEED-1.png">
            </div>

            <div class="small_card">
                <i class="fa-solid fa-heart"></i>
            </div>

            <div class="menu_info">
                <h2>10 Mbps</h2>
                <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat accusamus illo voluptates impedit consequatur
                </p>
                <h3>Rp.125.000,-</h3>
                <div class="menu_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <a href="#" class="menu_btn">Langganan</a>
            </div>

        </div> 
        
        <div class="menu_card">

            <div class="menu_image">
                <img src="img/20-Mbps.png">
            </div>

            <div class="small_card">
                <i class="fa-solid fa-heart"></i>
            </div>

            <div class="menu_info">
                <h2>20 Mbps</h2>
                <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat accusamus illo voluptates impedit consequatur
                </p> 
                <h3>Rp.235.000,-</h3>
                <div class="menu_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <a href="#" class="menu_btn">Langganan</a>
            </div>

        </div> 

        <div class="menu_card">

            <div class="menu_image">
                <img src="img/50-Mbps.png">
            </div>

            <div class="small_card">
                <i class="fa-solid fa-heart"></i>
            </div>

            <div class="menu_info">
                <h2>50 Mbps</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat accusamus illo voluptates impedit consequatur 
                </p>
                <h3>$Rp.325.000,-</h3>
                <div class="menu_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <a href="#" class="menu_btn">Langganan</a>
            </div>
        </div> 
        </div> 
</section>
        

<!-- menu section end -->

    <!--Footer-->

    <footer>
        <div class="footer_main">

            <div class="footer_tag">
                <h2>Location</h2>
                <p>Sri Lanka</p>
                <p>USA</p>
                <p>India</p>
                <p>Japan</p>
                <p>Italy</p>
            </div>

            <div class="footer_tag">
                <h2>Quick Link</h2>
                <a href="#home">Home</a></p>
                <a href="#about">Tentang Kami</a></p>
                <a href="#menu">Menu</a></p>
                <a href="#contact">Kontak</a></p>
            </div>

            <div class="footer_tag">
                <h2>Contact</h2>
                <p>+94 12 3456 789</p>
                <p>+94 25 5568456</p>
                <p>johndeo123@gmail.com</p>
                <p>foodshop123@gmail.com</p>
            </div>

            <div class="footer_tag">
                <h2>Our Service</h2>
                <p>Fast Delivery</p>
                <p>Easy Payments</p>
                <p>24 x 7 Service</p>
            </div>

            <div class="footer_tag">
                <h2>Follows</h2>
                <i data-feather="facebook"></i></a>
                <i data-feather="twitter"></i></a>
                <i data-feather="instagram"></i></a>
                <i data-feather="linkedin"></i></a>
            </div>

        </div>

        <p class="end">Nizar Zaidan Syafruddin | 11223062 | 2024</p>

    </footer>


<!-- Footer Section end -->

    <!-- feather icons -->
    <script>
        feather.replace();
        </script>