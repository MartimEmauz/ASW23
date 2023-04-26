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

    function get_user_info_with_name($name, $info) {
        $conn = connect();
        $q = "SELECT $info FROM Utilizador WHERE nome = '$name'";
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



    function get_search_products($args, $u_loged) {
        $conn = connect();
        $no_price_args = $args;
        $q = "SELECT * FROM peca WHERE id_utilizador != '$u_loged'";
        if(!empty($args)) {
            $q .= " AND ";
        }
        if(array_key_exists('preco_min', $args)) {
            $min = $args['preco_min'];
            $q .= "preco >= '$min'" ;
            unset($no_price_args['preco_min']);
            if(count($no_price_args)>0){
                $q .=" AND ";
            }
        }
        if(array_key_exists('preco_max', $args)) {
            $max = $args['preco_max'];
            $q .= "preco <= '$max'";
            unset($no_price_args['preco_max']);
            if(count($no_price_args)>0){
                $q .=" AND ";
            }
        }
        $updated_args = $no_price_args;
        foreach($no_price_args as $k=>$v) {
            $q .= "$k = '$v'";
            unset($updated_args[$k]);
            if(!empty($updated_args)) {
                $q .= " AND ";
            }
        }
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


    function in_fav($id_peca, $id_u) {
        $conn = connect();
        $q = "SELECT * FROM utilizador_favoritos WHERE id_utilizador = '$id_u' AND id_peca = '$id_peca'";
        $r = mysqli_query($conn, $q);
        if(mysqli_num_rows($r)) {
            return true;
        }else {
            return false;
        }
    }

    function add_fav($id_peca, $id_u) {
        $conn = connect();
        $q = "INSERT INTO utilizador_favoritos (id_utilizador, id_peca) VALUES (?, ?)";
        if($stmt = mysqli_prepare($conn, $q)) {
            mysqli_stmt_bind_param($stmt, "ii", $id_u, $id_peca);
            mysqli_stmt_execute($stmt);
        }else {
            disconnect($conn);
            header('Location: ../View/error.php');
        }
        disconnect($conn);
    }

    function get_fav($u_id) {
        $conn = connect();
        $q = "SELECT * FROM utilizador_favoritos WHERE id_utilizador = '$u_id'";
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

    function del_fav($id_peca, $u_id) {
        $conn = connect();
        $q = "DELETE FROM utilizador_favoritos WHERE id_peca = '$id_peca' AND id_utilizador = '$u_id'";
        $r = mysqli_query($conn, $q);
        disconnect($conn);
    }


    function get_peca($id) {
        $conn = connect();
        $q = "SELECT * FROM Peca WHERE id = '$id'";
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



    function in_cart($id_peca, $id_u) {
        $conn = connect();
        $q = "SELECT * FROM utilizador_carrinho WHERE id_utilizador = '$id_u' AND id_peca = '$id_peca'";
        $r = mysqli_query($conn, $q);
        if(mysqli_num_rows($r)) {
            return true;
        }else {
            return false;
        }
    }


    function add_cart($id_peca, $id_u) {
        $conn = connect();
        $q = "INSERT INTO utilizador_carrinho (id_utilizador, id_peca) VALUES (?, ?)";
        if($stmt = mysqli_prepare($conn, $q)) {
            mysqli_stmt_bind_param($stmt, "ii", $id_u, $id_peca);
            mysqli_stmt_execute($stmt);
        }else {
            disconnect($conn);
            header('Location: ../View/error.php');
        }
        disconnect($conn);
    }



    ////
    function get_cart($u_id) {
        $conn = connect();
        $q = "SELECT * FROM utilizador_carrinho WHERE id_utilizador = '$u_id'";
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

    function del_cart($id_peca, $u_id) {
        $conn = connect();
        $q = "DELETE FROM utilizador_carrinho WHERE id_peca = '$id_peca' AND id_utilizador = '$u_id'";
        $r = mysqli_query($conn, $q);
        disconnect($conn);
    }

    function move_to_transaction($id_peca, $id_comprador, $id_vendedor) {
        $conn = connect();
        $q = "INSERT INTO Transacao (id_peca, id_comprador, id_vendedor) VALUES (?, ?, ?)";
        if($stmt = mysqli_prepare($conn, $q)) {
            mysqli_stmt_bind_param($stmt, "iii", $id_peca, $id_comprador, $id_vendedor);
            mysqli_stmt_execute($stmt);
        }else {
            disconnect($conn);
            header('Location: ../View/error.php');
        }
        disconnect($conn);
    }


    function delete_peca($id) {
        $conn = connect();
        $q = "DELETE FROM Peca WHERE id = '$id'";
        $r = mysqli_query($conn, $q);
        disconnect($conn);
    }

    //function del_full_cart($u_id) {
    //    $conn = connect();
    //    $q = "DELETE FROM utilizador_carrinho WHERE id_utilizador = '$u_id'";
    //    $r = mysqli_query($conn, $q);
    //    disconnect($conn);
    //}
?>