<?php
    require_once('db_data_functions.php');
    session_start();
    $args_del_cart = explode('-', $_REQUEST['del_cart']);
    del_cart($args_del_cart[0], $args_del_cart[1]);
    header('Location: ../cart.php');
?>