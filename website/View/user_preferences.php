<?php
    $user_pref = return_preferences();
    foreach($user_pref as $key=>$value) {
        echo($key);
        echo(' --> ');
        foreach($value as $v) {
            echo($v);
            echo(' | ');
        }
        echo('<br>');
    }
?>
