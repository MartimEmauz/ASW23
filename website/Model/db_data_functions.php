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
            return false;
        }
    }

    function get_user_info($email, $info) {
        $conn = connect();
        $q = "SELECT $info FROM Utilizador WHERE email = '$email'";
        $r = mysqli_query($conn, $q);
        disconnect($conn);
        if ($row = $r->fetch_assoc()) {
            return $row[$info];
        }
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


    function get_user_preferences($id) {
        $conn = connect();
        $table = ['categoria', 'cor', 'estado', 'marca', 'tamanho', 'tipo'];
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

    function delete_user_preferences($id) {
        $table = ['categoria', 'cor', 'estado', 'marca', 'tamanho', 'tipo'];
        $conn = connect();
        foreach($table as $t) {
            $t_name = 'Preferencia_' . $t;
            $q = "DELETE FROM $t_name WHERE id_utilizador = '$id'";
            $r = mysqli_query($conn, $q);
        }
        disconnect($conn);
    }


    function update_field($id, $field, $value) {
        $conn = connect();
        $t_name = 'Utilizador';
        $q = "UPDATE Utilizador SET $field = '$value' WHERE id = '$id'";
        $r = mysqli_query($conn, $q);
        disconnect($conn);
    }


    function search_field($column, $value) {
        $conn = connect();
        $q = "SELECT * FROM Utilizador WHERE $column = '$value'";        
        $r = mysqli_query($conn, $q);
        disconnect($conn);
        return $r;
    }

    function search_fields($fields, $values) {
        $conn = connect();
        $q = "SELECT * FROM Utilizador WHERE ";
        for($i = 0; $i < count($fields); $i++) {
            $q .= $fields[$i] . " = '" . $values[$i] . "'";
            if($i < count($fields) - 1) {
                $q .= " AND ";
            }
        }
        $r = mysqli_query($conn, $q);
        disconnect($conn);
        if (mysqli_num_rows($r) > 0) {
            while($row = mysqli_fetch_assoc($r)) {
                echo "nome: " . $row["nome"] . "<br>";
                echo "email: " . $row["email"] . "<br>";
                echo "passe: " . $row["passe"] . "<br>";
                echo "data de nascimento: " . $row["data_nascimento"] . "<br>";
                echo "genero: " . $row["genero"] . "<br>";
                echo "localidade: " . $row["localidade"] . "<br>";
                echo "morada: " . $row["morada"] . "<br>";
                echo "codigo postal: " . $row["codigo_postal"] . "<br><br><br>";
            }
        } else {
            echo "0 results";
        }
    }

    

    function insert_piece($u_id, $titulo, $preco, $imagem, $data, $descricao, $genero, $estado, $cor, $marca, $tipo, $tamanho, $categoria) {
        $conn = connect();
        $q = "INSERT INTO peca (id_utilizador, titulo, preco, imagem, data_registo, descricao, genero, estado, cor, marca, tipo, tamanho, categoria) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        if($stmt = mysqli_prepare($conn, $q)) {
            mysqli_stmt_bind_param($stmt, "isdssssssssss", $u_id, $titulo, $preco, $imagem, $data, $descricao, $genero, $estado, $cor, $marca, $tipo, $tamanho, $categoria);
            mysqli_stmt_execute($stmt);
        }else {
            disconnect($conn);
            header('Location: ../View/error.php');
        }
        disconnect($conn);
    }

    function get_user_products($user_id) {
        $conn = connect();
        $q = "SELECT * FROM peca WHERE id_utilizador = '$user_id'";
        $r = mysqli_query($conn, $q);
        $result = [];
        if (mysqli_num_rows($r) > 0) {
            while($row = mysqli_fetch_assoc($r)) {
                array_push($result, $row);
            }
        }
        disconnect($conn);
        return $result;
    }


    function delete_product($id) {
        $conn = connect();
        $q = "DELETE FROM peca WHERE id = '$id'";
        $r = mysqli_query($conn, $q);
        disconnect($conn);
    }
    

    function get_same_size_gender($sizes, $u_id, $genero) {
        $conn = connect();
        $q = "SELECT * FROM peca WHERE (id_utilizador != '$u_id') AND (genero = '$genero' OR genero = 'O') AND (";
        foreach($sizes as $k=>$v) {
            $q .= "tamanho = '$v'";
            if(count($sizes)>$k+1) {
                $q .= " OR ";
            }
        }
        $q .=")";
        $r = mysqli_query($conn, $q);
        $result = [];
        if (mysqli_num_rows($r) > 0) {
            while($row = mysqli_fetch_assoc($r)) {
                array_push($result, $row);
            }
        }
        disconnect($conn);
        return $result;
    }
?>