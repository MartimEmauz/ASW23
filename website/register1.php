<?php
    include("db_data_functions.php");
    if(!isset($_POST['email'], $_POST['nome'], $_POST['pass']) || empty($_POST['email']) || empty($_POST['nome']) || empty($_POST['pass'])) {
        exit('Please complete the registation form to proceed');
    }
    $email = $_POST['email'];
    if(check_data_register($email)) {
        $conn = connect();
        $query = "INSERT INTO Utilizador (nome, passe, localidade, morada, codigo_postal, genero, data_nascimento, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        if($stmt = mysqli_prepare($conn, $query)) {
            mysqli_stmt_bind_param($stmt, "ssssssss", $nome, $pass, $localidade, $morada, $codigo_postal, $genero, $data_nascimento, $email);
            $nome = htmlspecialchars($_POST['nome']);
            $pass = htmlspecialchars($_POST['pass']);
            $localidade = htmlspecialchars($_POST['localidade']);
            $morada = htmlspecialchars($_POST['morada']);
            $codigo_postal = htmlspecialchars($_POST['codigo_postal']);
            $genero = htmlspecialchars($_POST['genero']);
            $data_nascimento = htmlspecialchars(date('Y-m-d', strtotime($_POST['data_nascimento'])));
            mysqli_stmt_execute($stmt);
        }else {
            header('Location: error.php');
        }
        header('Location: login.php');
        disconnect($conn);
    }else {
        header('Location: error.php');
    }
?>