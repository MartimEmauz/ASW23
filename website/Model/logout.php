<?php
    session_start();
    if(isset($_POST["confirm"])) {
        if($_POST["confirm"] == 'Yes') {
            session_unset();
            session_destroy();
        }
    }
    header('Location: ../index.php');
?>