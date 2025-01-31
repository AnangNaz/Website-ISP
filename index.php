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
    <link rel="stylesheet" href="css/style2.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- alpineJS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- App -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <style>
        #result {
            border: 1px solid #ccc;
            background-color: white;
            z-index: 1000;
            color: black;
            width: 100%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-height: 200px;
            overflow-y: auto;
            position: absolute;
            top: 100%;
            left: 0;
            display: none;
        }

        #result div {
            padding: 8px;
            cursor: pointer;
        }

        #result div:hover {
            background-color: grey;
        }
    </style>


    <!-- Navbar  start-->
    <nav class="navbar" id="navbar">
        <a href="#" class="navbar-logo">Azarel<span>NET</span>.</a>
        <div class="navbar-nav">
            <a href="#">Home</a>
            <a href="#Gallary">Promosi</a>
            <a href="#menu">Produk</a>
            <a href="#team">CEO</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search-button"><i data-feather="search"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>


        <!-- Search Form Start  -->
        <div class="search-form">
            <input type="search" id="search" placeholder="search here...">
            <label for="search"><i data-feather="search"></i></label>
            <div id="result" style="display: none;"></div>
        </div>

        <!-- Search Form end  -->

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
                    Jaringan kami sudah menggunakan teknologi 5G
                </p>
                <a href="#menu" class="gallary_btn">Order Now</a>
            </div>

            <div class="gallary_image">
                <img src="img/wifi2.jpg">

                <h3>Wifi</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi sint eveniet laboriosam
                </p>
                <a href="#menu" class="gallary_btn">Order Now</a>
            </div>

            <div class="gallary_image">
                <img src="img/wifi3.jpg">

                <h3>Wifi</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi sint eveniet laboriosam
                </p>
                <a href="#menu" class="gallary_btn">Order Now</a>
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

    <!--Team-->

    <div class="team" id="team">
        <h1>Our<span>FOUNDER</span></h1>

        <div class="team_box">
            <div class="profile">
                <img src="img/anang1.jpg">

                <div class="info">
                    <h2 class="name">Anang</h2>
                    <p class="bio">CEO</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <a href="https://www.instagram.com/anang.nazarudin" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>

                </div>

            </div>

            <div class="profile">
                <img src="img/nizar.jpg">

                <div class="info">
                    <h2 class="name">Nizar</h2>
                    <p class="bio">COO</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <a href="https://www.instagram.com/anang.nazarudin" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>

                </div>

            </div>

            <div class="profile">
                <img src="image/chef3.jpg">

                <div class="info">
                    <h2 class="name">Rafael</h2>
                    <p class="bio">CTO</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <a href="https://www.instagram.com/anang.nazarudin" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>

                </div>

            </div>

            <div class="profile">
                <img src="image/chef4.jpg">

                <div class="info">
                    <h2 class="name">Ali</h2>
                    <p class="bio">CFO</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <a href="https://www.instagram.com/anang.nazarudin" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!--Footer-->

    <footer>
        <div class="footer_main">

            <div class="footer_tag">
                <h2>Location</h2>
                <p>Lampung</p>
                <p>Serang</p>
                <p>Cilegon</p>
                <p>Pandeglang</p>
                <p>Rangkas</p>
            </div>

            <div class="footer_tag">
                <h2>Quick Link</h2>
                <a href="#">Home</a></p>
                <a href="#Gallery">Promation Gallery</a></p>
                <a href="#menu">Layanan Kami</a></p>
                <a href="#contact">Kontak</a></p>
            </div>

            <div class="footer_tag">
                <h2>Contact</h2>
                <p>+94 12 3456 789</p>
                <p>+94 25 5568456</p>
                <p>NEETAzarel123@gmail.com</p>
                <p>AzarelNEET@gmail.com</p>
            </div>

            <div class="footer_tag">
                <h2>Our Service</h2>
                <p>Fast Maintenance</p>
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

        <p class="end">Nizar Zaidan Syafruddin | Anang Nazarudin | Muhammad Ali Syahbana | Rafael Andhika Permana</p>

    </footer>


    <!-- Footer Section end -->

    <!-- feather icons -->
    <script>
        feather.replace();
    </script>

    <!-- My javascript -->
    <script src="js/script1.js"></script>

    <script>
        const searchInput = document.querySelector('#search');
        const resultContainer = document.querySelector('#result');

        searchInput.addEventListener('input', function() {
            const query = this.value;

            resultContainer.innerHTML = '';

            if (query) {
                fetch(`search.php?query=${encodeURIComponent(query)}`)
                    .then(response => {
                        console.log('Response:', response); 
                        return response.json();
                    })
                    .then(data => {
                        console.log('Data:', data); 
                        if (data.length > 0) {
                            resultContainer.style.display = 'block';
                            data.forEach(item => {
                                const div = document.createElement('div');
                                div.textContent = item;
                                div.onclick = () => {
                                    searchInput.value = item; 
                                    resultContainer.style.display = 'none';
                                };
                                resultContainer.appendChild(div);
                                console.log('Item added:', item); 
                            });
                        } else {
                            resultContainer.style.display = 'none'; 
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            } else {
                resultContainer.style.display = 'none'; 
            }
        });


        document.querySelector('label[for="search"]').addEventListener('click', function() {
            const query = searchInput.value;
            if (query) {
                fetch(`search.php?query=${encodeURIComponent(query)}`)
                    .then(response => response.json())
                    .then(data => {
                        console.log('Data:', data);
                        resultContainer.innerHTML = '';
                        if (data.length > 0) {
                            resultContainer.style.display = 'block'; 
                            data.forEach(item => {
                                const div = document.createElement('div');
                                div.textContent = item;
                                div.onclick = () => {
                                    searchInput.value = item;
                                    resultContainer.style.display = 'none'; 
                                };
                                resultContainer.appendChild(div);
                            });
                        } else {
                            resultContainer.style.display = 'none'; 
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }
        });
    </script>