<?php
    function check_data_register($email, $conn) {
        $q = "SELECT * FROM Utilizador WHERE email = '$email'";
        $r = mysqli_query($conn, $q);

        if(mysqli_num_rows($r)) {
            echo('<br><p> mail already in use! </p><br>');
            echo('<a href="../view/login.php">Login Instead</a>');
            return false;
        }else {
            return true;
        }
    }

    function check_data_login($email, $passwd, $conn) {
        $q = "SELECT * FROM Utilizador WHERE email = '$email' AND passwd = '$passwd'";
        $r = mysqli_query($conn, $q);

        if(mysqli_num_rows($r)) {
            return true;
        }else {
            echo('<br><p> Wrong email or passord </p><br>');
            echo('<a href="../view/signup.php">Not Registered? Signup Here</a>');
        }
    }
?>