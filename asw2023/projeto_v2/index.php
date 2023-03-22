<?php
    include("Model/connection.php");
    include('check_data_functions.php');
    include('db_data_functions.php');
    include("View/header.php");
    $conn = connect();

    session_start();
    if(isset($_SESSION['email'])) {
        echo('<p>Loged in!</p>');
        echo('<a href="view/logout.php">Logout</a>');
    }else {
        echo("<a href='view/signup.php'>Signup</a><br>");
        echo("<a href='view/login.php'>login</a>");
    }
    
    include("View/footer");
?>