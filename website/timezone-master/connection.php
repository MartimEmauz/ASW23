<?php
    function connect() {
        //$dbhost = "appserver-01.alunos.di.fc.ul.pt";
        //$dbuser = "asw05";
        //$dbpass = "briangriffin";
        //$dbname = "asw05";
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "asw";
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        if (!$conn) {
            die("Database connection failed:" . mysqli_connect_error());
        }else {
            return $conn;
        }
    }

    function disconnect($conn) {
        mysqli_close($conn);
    }
?>