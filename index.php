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
    <!-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> -->

    <!-- App -->

</head>
<style>

</style>


<body>



    <!-- Navbar  start-->
    <nav class="navbar" id="navbar">
        <a href="#" class="navbar-logo">Azarel<span>NET</span>.</a>
        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Promosi</a>
            <a href="#Products">Produk</a>
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
    <!-- Search Form Start  -->
    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box"><i data-feather="search"></i></label>
    </div>

    <!-- Search Form end  -->
    <!-- Shopping Cart Start -->
    <div class="shopping-cart">
        <template x-for="(item, index) in $store.cart.items" x-keys="index">
            <div class="cart-item">
                <img :src="`img/Products/${item.img}`" :alt="item.name">
                <div class="item-detail">
                    <h3 class="item.name"></h3>
                    <div class="item-price">
                        <span x-text="rupiah(item.price)"></span> &times;
                        <button id="remove" @click="$store.cart.remove(item.id)">&minus;</button>
                        <span x-text="item.quantity"></span>
                        <button id="add" @click="$store.cart.add(item)">&plus;</button> &equals;
                        <span x-text="rupiah(item.total)"></span>
                    </div>
                </div>
            </div>
        </template>
        <h4 x-show="!$store.cart.items.length" style="margin-top: 1.5rem;"> Cart is Empty </h4>
        <h4 x-show="$store.cart.items.length">Total : <span x-text="rupiah($store.cart.total)"></span> </h4>

        <div class="form-countainer" x-show="$store.cart.items.length">
            <form action="" id="checkoutForm">
                <h5>Customer Detail</h5>

                <label for="name">
                    <span>Name</span>
                    <input type="text" name="name" id="name">
                </label>

                <label for="email">
                    <span>Email</span>
                    <input type="email" name="email" id="email">
                </label>

                <label for="phone">
                    <span>Phone</span>
                    <input type="number" name="phone" id="phone" autocomplete="off">
                </label>

                <button class="checkout-button" type="submit" id="checkout-button" value="Checkout">Checkout</button>
            </form>
        </div>
    </div>
    <!-- Shopping Cart end -->

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

    <section class="menu" id="menu">
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
                        Full carbon fiber.
                        Up to 10 Mbps.
                        Download and Upload.
                        Unlimited Quota.
                    </p>
                    <h3>Rp.125.000,-</h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="order.php" class="menu_btn">Langganan</a>
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
                        Full carbon fiber.
                        Up to 20 Mbps.
                        Download and Upload.
                        Unlimited Quota.
                    </p>
                    <h3>Rp.235.000,-</h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="order.php" class="menu_btn">Langganan</a>
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
                        Full carbon fiber.
                        Up to 50 Mbps.
                        Download and Upload.
                        Unlimited Quota.
                    </p>
                    <h3>Rp.325.000,-</h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="order.php" class="menu_btn">Langganan</a>
                </div>
            </div>
        </div>
    </section>


    <!-- menu section end -->


</body>

</html>