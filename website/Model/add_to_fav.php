<?php
    require_once('db_data_functions.php');
    session_start();
    $args_fav = explode('-', $_REQUEST['add_to_fav']);
    if(in_fav($args_fav[0], $args_fav[1]) == false) {
        add_fav($args_fav[0], $args_fav[1]);
    }
    header('Location: ../pesquisar.php');
?>