<?php
    require_once('db_data_functions.php');
    session_start();
    $args_cart = explode('-', $_REQUEST['add_to_cart']);
    if(in_cart($args_cart[0], $args_cart[1]) == false) {
        add_cart($args_cart[0], $args_cart[1]);
    }
    header('Location: ../cart.php');
?>