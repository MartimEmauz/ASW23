
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
            $u_loged = get_user_info($_SESSION['email'], "id");
            foreach($favs as $fv) {
                $f = get_peca($fv["id_peca"])[0];
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
                echo('<form action="Model/add_to_cart.php" method="post">');
                echo('<button class="btn_3" name="add_to_cart" type="submit" value=' . $f["id"] . '-' . $u_loged . '> Adiciona ao carrinho</button>');
                echo('</form>');
                echo('<form action="Model/delete_fav.php" method="post">');
                echo('<button class="btn_3" name="del_fav" type="submit" value=' . $f['id']  . '-' . $u_loged . '> Retirar dos favoritos</button>');
                echo('</form>');
                echo('</td>');
                echo('</tr>');
            }
        ?>
    </div>
</div>