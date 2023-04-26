<div class="cart_inner">
    <div class="table-responsive">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Product</th>
            <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            
        <?php

            if(!empty($cart)) {
                print_r($cart);
                $u_loged = get_user_info($_SESSION['email'], "id");
                $preco_total = 0;
                $pecas_eliminadas = [];
                foreach($cart as $fv) {
                    $f = get_peca($fv["id_peca"])[0];
                    $preco_total += $f["preco"];
                    array_push($pecas_eliminadas, [$f["id"], $u_loged, $f["id_utilizador"]]);
                    echo('<br><br>');
                    echo('<tr>');
                    echo('<td>');
                    echo('<div class="media">');
                    echo('<div class="d-flex">');
                    echo('<img src="assets/img/gallery/' . $f["imagem"] . '"alt="" />');
                    echo('</div>');
                    echo('<div class="media-body">');
                    echo('<p>' . $f["descricao"] . '</p>');
                    echo('</div>');
                    echo('</div>');
                    echo('</td>');
                    echo('<td>');
                    echo('<h5>' . $f["preco"] . '€</h5>');
                    echo('</td>');
                    echo('<td>');
                    echo('<form action="Model/delete_cart.php" method="post">');
                    echo('<button class="btn_3" name="del_cart" type="submit" value=' . $f['id']  . '-' . $u_loged . '> Retirar do carrinho</button>');
                    echo('</form>');
                    echo('</td>');
                    echo('</tr>');
                }
                echo('<tr>');
                echo('<td></td>');
                echo('<td>');
                echo('<h5>total</h5>');
                echo('</td>');
                echo('<td>');
                echo('<h5>' . $preco_total . '€</h5>');
                echo('</td>');
                echo('</tr>');
                
                $pecas_eliminadas_string = '';
                foreach($pecas_eliminadas as $k=>$v) {
                    $pecas_eliminadas_string .= implode("-", $v);
                    if($k < count($pecas_eliminadas)-1) {
                        $pecas_eliminadas_string .= "-";
                    }
                }

                echo('<tr>');
                echo('<td></td><td></td>');
                echo('<td>');
                echo('<form action="Model/checkout.php" method="post">');
                echo('<button class="btn_1 checkout_btn_1" name="checkout" type="submit" value=' . $pecas_eliminadas_string . '>Proceed to checkout</button>');
                echo('</form>');
                echo('<td>');
                echo('</tr>');

            }else {
                $inf_title = '<h2>Carrinho</h2>';
                $inf_text = '<p>Nao têm ainda favoritos registados</p>';
                include("View/login_required.php");
            }
        ?>

    </div>
</div>