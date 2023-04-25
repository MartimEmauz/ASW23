<?php
    session_start();
    include("db_data_functions.php");
    if(!isset($_POST['email_login'], $_POST['pass_login']) || empty($_POST['email_login']) || empty($_POST['pass_login'])) {
        exit('Please complete the registation form to proceed');
    }

    $email = htmlspecialchars($_POST['email_login']);
    $pass = htmlspecialchars($_POST['pass_login']);

    if(check_data_login($email, $pass)) {
        $_SESSION['email'] = $email;
        $_SESSION['user_pref'] = $email;
        header('Location: index.php');
    }else {
        header('Location: login.html');
    }
?>