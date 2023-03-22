<?php
    if(!isset($_POST['email'], $_POST['nome'], $_POST['pass']) || empty($_POST['email']) || empty($_POST['nome']) || empty($_POST['pass'])) {
        exit('Please complete the registation form to procede');
    }
    
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $pass = $_POST['pass'];
    
    if(check_data_register($email)) {
        $query = "INSERT INTO Utilizador (email, pass, nome) VALUES ('$email', '$pass', '$nome')";
        $result = mysqli_query($conn, $query);
        disconnect($conn);
    
        if($result) {
            header('Location: ../view/login.php');
        } else {
            header('Location: ../view/error.php');
        }
    }else {
        disconnect($conn);
    }
?>