<?php
    function return_preferences() {
        $user_id = get_user_info($_SESSION["email"], "id");
        $user_pref = get_user_preferences($user_id, ['categoria', 'cor', 'estado', 'marca', 'tamanho', 'tipo']);
        return $user_pref;
    }
?>