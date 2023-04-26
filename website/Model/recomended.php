<?php
    $curr_user_id = get_user_info($_SESSION['email'], "id");
    $curr_user_gender = get_user_info($_SESSION['email'], "genero");
    $pref = get_user_preferences($curr_user_id);
    $same_size = get_same_size_gender($pref['tamanho'], $curr_user_id, $curr_user_gender);
    $result = [];
    if(!empty($same_size)) {
        
        foreach($same_size as $p) {
            $counter = 0;
            if(in_array($p["estado"], $pref["estado"])) {
                $counter +=1; 
            }
            if(in_array($p["cor"], $pref["cor"])) {
                $counter +=1;
            }
            if(in_array($p["marca"], $pref["marca"])) {
                $counter +=1; 
            }
            if(in_array($p["tipo"], $pref["tipo"])) {
                $counter +=1; 
            }
            if(in_array($p["categoria"], $pref["categoria"])) {
                $counter +=1; 
            }

            if($counter >= 2) {
                array_push($result, $p);
            }
        }
        
        if(empty($result)) {
            for($i=0; $i<count($same_size) && $i<6; $i++) {
                array_push($result, $same_size[$i]);
            }
        }
    }
?>