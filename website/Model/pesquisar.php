<?php
    $search_args = [];
    if(isset($_POST['nome_vendedor_p']) && !empty($_POST['nome_vendedor_p'])) {
        $u_id = get_user_info_with_name($_POST['nome_vendedor_p'], "id");
        if(!empty($u_id)) {
            $search_args['id_utilizador'] = $u_id;
        }else {
            header('Location: ../error.php');
        }
        
    }
    if(isset($_POST['preco_min_p']) && !empty($_POST['preco_min_p'])) {
        $search_args['preco_min'] = $_POST['preco_min_p'];
    }
    if(isset($_POST['preco_max_p']) && !empty($_POST['preco_max_p'])) {
        $search_args['preco_max'] = $_POST['preco_max_p'];
    }

    if(isset($_POST['preco_min_p']) && !empty($_POST['preco_min_p']) && isset($_POST['preco_max_p']) && !empty($_POST['preco_max_p'])) {
        if($_POST['preco_min_p'] >= $_POST['preco_max_p']) {
            header('Location: ../error.php');
        }
    }

    if(isset($_POST['genero_p']) && !empty($_POST['genero_p'])) {
        $search_args['genero'] = $_POST['genero_p'];
    }
    if(isset($_POST['estado_p']) && !empty($_POST['estado_p'])) {
        $search_args['estado'] = $_POST['estado_p'];
    }
    if(isset($_POST['cor_p']) && !empty($_POST['cor_p'])) {
        $search_args['cor'] = $_POST['cor_p'];
    }
    if(isset($_POST['marca_p']) && !empty($_POST['marca_p'])) {
        $search_args['marca'] = $_POST['marca_p'];
    }
    if(isset($_POST['tipo_p']) && !empty($_POST['tipo_p'])) {
        $search_args['tipo'] = $_POST['tipo_p'];
    }
    if(isset($_POST['tamanho_p']) && !empty($_POST['tamanho_p'])) {
        $search_args['tamanho'] = $_POST['tamanho_p'];
    }
    if(isset($_POST['categoria_p']) && !empty($_POST['categoria_p'])) {
        $search_args['categoria'] = $_POST['categoria_p'];
    }


    $u_loged = 'no_user';
    if(isset($_SESSION['email']) && !empty($_SESSION['email'])) {
        $u_loged = get_user_info($_SESSION['email'], "id");
    }

    $result = get_search_products($search_args, $u_loged);
?>