<?php
    session_start();
    include("Model/db_data_functions.php");
    include("View/header.php");
    include("View/top_menu.php");

    if(isset($_SESSION["email"])) {
        include("View/user_products.php");
    } 
    else {
        $inf_text = '<p>Para aceder a esta pagina por favor faça login</p>';
        include("View/login_required.php");
    }

?>