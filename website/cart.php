<?php
    session_start();
    include("Model/db_data_functions.php");
    include("View/header.php");
    include("View/top_menu.php");

    if(isset($_SESSION["email"])) {
        $cart = get_cart(get_user_info($_SESSION['email'], "id"));//
        include("View/cart.php");
    }else {
        $inf_title = '<h2>Carrinho</h2>';
        $inf_text = '<p>Para aceder a esta pagina por favor faça login</p>';
        include("View/login_required.php");
    }
?>