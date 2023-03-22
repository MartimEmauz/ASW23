<?php
    include("../View/header.php");
    include("../Model/db_data_functions.php");
    include("../Model/user_preferences.php");

    session_start();
    $user_id = get_user_id($_SESSION["email"]);
    echo('<a href="../View/preferences.php">Editar Preferencias</a><br><br>');

    $user_pref = get_user_preferences($user_id, ['categoria', 'cor', 'estado', 'marca', 'tamanho', 'tipo']);
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
<br>
<a href="../index.php">home</a>


<?php include("../View/footer.php")?>