<?php
    session_start();
    include("Model/db_data_functions.php");
    include("Model/user_preferences.php");
    include("View/header.php");
    include("View/top_menu.php");
    
    if(!isset($_SESSION["email"])) {
        $inf_text = '<p>Para aceder a esta pagina por favor faça login</p>';
        include("View/login_required.php");
    }else {
        $user_id = get_user_info($_SESSION["email"], "id");
        $counter = 0;
        $user_prefs = get_user_preferences($user_id, ['categoria', 'cor', 'estado', 'marca', 'tamanho', 'tipo']);
        foreach($user_prefs as $key=>$value) {
            if($value) {
                $counter+=1;
            }
        }
        if($counter > 0) {
            include('View/user_preferences.php');
        }else {
            $inf_text = '<p>Sem preferencias, vá a editar preferencias primeiro</p>';
            include("View/login_required.php");
        }
    }

    include("View/footer.php");
?>