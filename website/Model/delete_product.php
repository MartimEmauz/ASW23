<?php
    require_once('db_data_functions.php');
    session_start();
    delete_product($_REQUEST['delete_p']);

    header('Location: ../user_products.php');
?>