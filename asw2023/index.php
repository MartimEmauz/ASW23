<?php
    include("Model/connection.php");
    include("View/header.php");

    session_start();
    if(isset($_SESSION['email'])) {
        //if($_SESSION['email'] == 'administrador');

        if(isset($_SESSION["user_pref"]) && $_SESSION["user_pref"] == $_SESSION["email"]) {
            echo('<a href="View/user_preferences.php">Preferencias</a><br>');
        }else {
            echo('<a href="View/preferences.php">Preferencias</a><br>');
        }

        
        //include('View/preferences.php');

        echo('<a href="View/logout.php">Logout</a>');
        //pagina utilizador registado
    }else {
        echo('<a href="View/register.php">Register</a><br>');
        echo('<a href= "View/login.php">login</a>');
        //pagina se nao tiver registado/login
    }
    include("View/footer.php");
?>