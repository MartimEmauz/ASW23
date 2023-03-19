<?php
    function check_data_register($email) {
        include("connection.php");
        $conn = connect();
        $q = "SELECT * FROM Utilizador WHERE email = '$email'";
        $r = mysqli_query($conn, $q);
        disconnect($conn);

        if(mysqli_num_rows($r)) {
            echo('<br><p> mail already in use! </p><br>');
            echo('<a href="../View/login.php">Login Instead</a>');
            return false;
        }else {
            return true;
        }
    }

    function check_data_login($email, $pass) {
        include("connection.php");
        $conn = connect();
        $q = "SELECT * FROM Utilizador WHERE email = '$email' AND pass = '$pass'";
        $r = mysqli_query($conn, $q);
        disconnect($conn);

        if(mysqli_num_rows($r)) {
            return true;
        }else {
            echo('<br><p> Wrong email or passord </p><br>');
            echo('<a href="../View/register.php">Not Registered? Register Here</a>');
        }
    }
?>