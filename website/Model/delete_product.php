<?php             /////////////////////////////////////acabar esta funcao depois de contruir os user_products
    session_start();
    if(isset($_POST["delete_product"])) {
        if($_POST["delete_product"] == 'Yes') {
            delete_product(get_user_info($email, $info));
        }
    }
    header('Location: ../user_products.php');
?>