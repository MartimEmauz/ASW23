<?php
    if(!isset($_POST['email_login'], $_POST['pass_login']) || empty($_POST['email_login']) || empty($_POST['pass_login'])) {
        exit('Please complete the registation form to procede');
    }

    $email = $_POST['email_login'];
    $pass = $_POST['pass_login'];

    if(check_data_login($email, $pass)) {
        $_SESSION['email'] = $email;
        header('Location: ../index.php');
    }else {
        header('Location: ../View/error.php');
    }
?>