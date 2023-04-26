<?php
    function return_preferences() {
        $user_id = get_user_info($_SESSION["email"], "id");
        $user_pref = get_user_preferences($user_id);
        return $user_pref;
    }
?>