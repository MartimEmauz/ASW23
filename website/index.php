<?php
    session_start();
    include("Model/db_data_functions.php");
    include("View/header.php");
    include("View/top_menu.php");
    if(isset($_SESSION['email']) && !empty($_SESSION['email'])) {
        $user_id = get_user_info($_SESSION["email"], "id");
        $counter = 0;
        $user_prefs = get_user_preferences($user_id);
        foreach($user_prefs as $key=>$value) {
            if($value) {
                $counter+=1;
            }
        }
        if($counter >0) {
            include("Model/recomended.php");
            include('View/home.php');
        }else {
            include('View/home_no_login.php');
        }
        
    }else {
        include('View/home_no_login.php');
    }
    
    include("View/footer.php");
?>