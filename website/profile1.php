<?php
    session_start();
    include("db_data_functions.php");

    $user_id = get_user_id($_SESSION['email']);

    if(isset($_POST["novo_nome"]) && !empty($_POST["novo_nome"])) {
        update_field($user_id, 'nome', $_POST["novo_nome"]);
    }

    if(isset($_POST["nova_pass"]) && !empty($_POST["nova_pass"])) {
        update_field($user_id, 'passe', $_POST["nova_pass"]);
    }

    if(isset($_POST["nova_localidade"]) && !empty($_POST["nova_localidade"])) {
        update_field($user_id, 'localidade', $_POST["nova_localidade"]);
    }

    if (isset($_POST["nova_morada"]) && !empty($_POST["nova_morada"])) {
        update_field($user_id, 'morada', $_POST["nova_morada"]);
    }

    if (isset($_POST["novo_codigo_postal"]) && !empty($_POST["novo_codigo_postal"])) {
        update_field($user_id, 'codigo_postal', $_POST["novo_codigo_postal"]);
    }

    if (isset($_POST["nova_data_nascimento"]) && !empty($_POST["nova_data_nascimento"])) {
        update_field($user_id, 'data_nascimento', $_POST["nova_data_nascimento"]);
    }

    header('Location: blog.php');
?>