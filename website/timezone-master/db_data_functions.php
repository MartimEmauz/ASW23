<?php
    include("connection.php");
    function check_data_register($email) {
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
        $conn = connect();
        $q = "SELECT * FROM Utilizador WHERE email = '$email' AND passe = '$pass'";
        $r = mysqli_query($conn, $q);
        disconnect($conn);

        if(mysqli_num_rows($r)) {
            return true;
        }else {
            echo('<br><p> Wrong email or passord </p><br>');
            echo('<a href="../View/register.php">Not Registered? Register Here</a>');
        }
    }

    function get_user_id($email) {
        $conn = connect();
        $q = "SELECT id FROM Utilizador WHERE email = '$email'";
        $r = mysqli_query($conn, $q);
        disconnect($conn);
        if ($row = $r->fetch_assoc());
        return $row["id"];

    }

    function insert_preferences($pref, $user_p, $user_id) {
        $table = 'Preferencia_' . $pref;
        $conn = connect();
        foreach($user_p as $p) {
            $q = "INSERT INTO $table (id_utilizador, $pref) VALUES (?, ?)";
            if($stmt = mysqli_prepare($conn, $q)) {
                mysqli_stmt_bind_param($stmt, "is", $user_id, $p);
                mysqli_stmt_execute($stmt);
            }else {
                disconnect($conn);
                header('Location: ../View/error.php');
            }
        }
        disconnect($conn);
    }


    function get_user_preferences($id, $table) {
        $conn = connect();
        $result = [
            "categoria" => [],
            "cor" => [],
            "estado" => [],
            "marca" => [],
            "tamanho" => [],
            "tipo" => []
        ];
        foreach($table as $t) {
            $t_name = 'Preferencia_' . $t;
            $q = "SELECT $t FROM $t_name WHERE id_utilizador = '$id'";
            $r = mysqli_query($conn, $q);

            while($row = $r->fetch_assoc()) {
                array_push($result[$t], $row[$t]);
            }
        }
        disconnect($conn);
        return $result;
    }

    function delete_user_preferences($id, $table) {
        $conn = connect();
        foreach($table as $t) {
            $t_name = 'Preferencia_' . $t;
            $q = "DELETE FROM $t_name WHERE id_utilizador = '$id'";
            $r = mysqli_query($conn, $q);
        }
        disconnect($conn);
    }
?>