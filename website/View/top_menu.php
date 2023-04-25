<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper">
                    <!-- Logo -->
                    <div class="logo">
                        <?php
                            if(isset($_SESSION["email"])) {
                                echo("<a>Bem vindo ". get_user_info($_SESSION["email"], "nome") . "</a>");
                            }
                        ?><br>
                        <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                    </div>
                    
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <nav>                                                
                            <ul id="navigation">  
                                <li><a href="index.php">Home</a></li>
                                <li><a href="user_products.php">Meus Produtos</a></li>
                                    <ul class="submenu">
                                        <li><a href="shop.php"> coco</a></li>
                                        <li><a href="product_details.html"> xixi </a></li>
                                    </ul>
                                <li><a href="about.php">Sobre</a></li>
                                <li class="hot"><a href="#">Ultimos anúncios</a>
                                    <ul class="submenu">
                                        <li><a href="shop.php"> Lista de Produtos</a></li>
                                        <li><a href="product_details.html"> Detalhes </a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Perfil</a>
                                    <ul class="submenu">
                                        <li><a href="preferences.php">Editar Perfil</a></li>
                                        <li><a href="user_preferences.php">As minhas preferências</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Páginas (tempórario)</a>
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