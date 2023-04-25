<?php
    session_start();
    include("db_data_functions.php");

    $user_id = get_user_info($_SESSION['email'], "id");

    if(isset($_SESSION["user_pref"]) && $_SESSION["user_pref"] == $_SESSION["email"]) {
        delete_user_preferences($user_id, ['categoria', 'cor', 'estado', 'marca', 'tamanho', 'tipo']);
    }


    function add_user_preferences($p) {
        $result = [];
        if(isset($_POST[$p]) && !empty($_POST[$p])) {
            foreach($_POST[$p] as $x) {
                array_push($result, $x);
            }
            return $result;
        }else {
            return [];
        }
    }

    $pref = [
        "categoria" => [],
        "cor" => [],
        "estado" => [],
        "marca" => [],
        "tamanho" => [],
        "tipo" => []
    ];


    $pref["categoria"] = add_user_preferences('categoria');
    $pref["cor"] = add_user_preferences('cor');
    $pref["estado"] = add_user_preferences('estado');
    $pref["marca"] = add_user_preferences('marca');
    $pref["tamanho"] = add_user_preferences('tamanho');
    $pref["tipo"] = add_user_preferences('tipo');

    foreach($pref as $p => $v) {
        if($v) {
            insert_preferences($p, $v, $user_id);
        }
    }

    $_SESSION["user_pref"] = $_SESSION["email"];
    header('Location: ../user_preferences.php');
?>