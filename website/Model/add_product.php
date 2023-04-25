<?php
    session_start();
    require_once("db_data_functions.php");
    if(!isset($_POST["titulo_ap"], $_POST["preco_ap"], $_FILES["imagem_ap"], $_POST["descricao_ap"], $_POST["estado_ap"], $_POST["cor_ap"], $_POST["marca_ap"], $_POST["tipo_ap"], $_POST["tamanho_ap"], $_POST["categoria_ap"])
    || empty($_POST["titulo_ap"]) || empty($_POST["preco_ap"]) || empty($_FILES["imagem_ap"]) || empty($_POST["descricao_ap"]) || empty($_POST["estado_ap"]) || empty($_POST["cor_ap"]) || empty($_POST["marca_ap"])
    || empty($_POST["tipo_ap"]) || empty($_POST["tamanho_ap"]) || empty($_POST["categoria_ap"])) {
        header('Location: ../error.php');
    }else {
        //imagem
        if(!empty($_FILES["imagem_ap"]["name"])) { 
            $fileName = $_FILES["imagem_ap"]["name"]; 
            $tempname = $_FILES["uploadfile"]["tmp_name"];
            $folder = "../img/gallery" . $filename;
            move_uploaded_file($tempname, $folder);
                


        }else {
            header('Location: ../error.php');
        }
        //$allowTypes = array('jpg','png','jpeg','gif'); 
        //if(in_array($fileType, $allowTypes)){ 
        //    $image = $_FILES['imagem_ap']['tmp_name']; 
        //    $imgContent = addslashes(file_get_contents($image));
        //}else {
        //    header('Location: ../error.php');
        //}

        insert_piece(get_user_info($_SESSION["email"], "id"), $_POST["titulo_ap"], $_POST["preco_ap"], $fileName, date('Y-m-d'), $_POST["descricao_ap"], $_POST["estado_ap"], $_POST["cor_ap"], $_POST["marca_ap"], $_POST["tipo_ap"], $_POST["tamanho_ap"], $_POST["categoria_ap"]);
        header('Location: ../user_products.php');
    }
?>