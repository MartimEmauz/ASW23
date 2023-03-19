<?php
    include("Model/connection.php");
    include("View/header.php");

    session_start();
    if(isset($_SESSION['email'])) {
        echo('<p>Loged in!</p>');
        echo('<a href="View/logout.php">Logout</a>');
    }else {
        echo('<a href="View/register.php">Register</a><br>');
        echo('<a href= "View/login.php">login</a>');
    }
    
    include("View/footer.php");
?>