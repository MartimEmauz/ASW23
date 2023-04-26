<?php
    require_once('db_data_functions.php');
    session_start();
    $pecas_to_purchase_s = $_REQUEST['checkout'];
    $pecas_to_purchase = explode("-", $pecas_to_purchase_s);
    $pecas_arr = array_chunk($pecas_to_purchase, 3);

    foreach($pecas_arr as $p) {
        move_to_transaction($p[0], $p[1], $p[2]);
        delete_peca($p[0]);
    }
    
    header('Location: ../index.php');
?>