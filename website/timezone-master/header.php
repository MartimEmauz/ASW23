<head>
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>


<header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>                                                
                                <ul id="navigation">  
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="shop.html">Anúncios</a></li>
                                    <li><a href="about.php">Sobre</a></li>
                                    <li class="hot"><a href="#">Ultimos anúncios</a>
                                        <ul class="submenu">
                                            <li><a href="shop.html"> Lista de Produtos</a></li>
                                            <li><a href="product_details.html"> Detalhes </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Preferências</a>
                                        <ul class="submenu">
                                            <li><a href="blog.php">Definir Preferências</a></li>
                                            <li><a href="user_preferences.php">As minhas preferências</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Páginas</a>
                                        <ul class="submenu">
                                            <li><a href="login.php">Login</a></li>
                                            <li><a href="cart.html">Carrinho</a></li>
                                            <li><a href="elements.html">\\Temp</a></li>
                                            <li><a href="confirmation.html">Confirmação</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                <li>
                                    <div class="nav-search search-switch">
                                        <span class="flaticon-search"></span>
                                    </div>
                                </li>
                                <?php
                                    if(isset($_SESSION["email"])) {
                                        echo('<li><a href="logout.php"><span class="flaticon-user"></span></a></li>');
                                    } else {
                                        echo('<li><a href="login.php"><span class="flaticon-user"></span></a></li>');
                                    }
                                ?>
                                <!--<li><a href="login.php"><span class="flaticon-user"></span></a></li>-->
                                <li><a href="cart.html"><span class="flaticon-shopping-cart"></span></a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>