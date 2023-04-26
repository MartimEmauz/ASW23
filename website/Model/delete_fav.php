<?php
    require_once('db_data_functions.php');
    session_start();
    $args_del_fav = explode('-', $_REQUEST['del_fav']);
    del_fav($args_del_fav[0], $args_del_fav[1]);
    header('Location: ../favoritos.php');
?>