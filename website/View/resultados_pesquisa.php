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
            foreach($result as $r) {
                echo('<tr>');
                echo('<td>');
                echo('<div class="media">');
                echo('<div class="d-flex">');
                echo('<img src="assets/img/gallery/' . $r["imagem"] . '"alt="" />');
                echo('</div>');
                echo('<div class="media-body">');
                echo('<p>' . $r["descricao"] . '</p>');
                echo('</div>');
                echo('</div>');
                echo('</td>');
                echo('<td>');
                echo('<h5>' . $r["preco"] . '€</h5>');
                echo('</td>');
                if($u_loged != 'no_user') {
                    echo('<td>');
                    echo('<form action="Model/add_to_cart.php" method="post">');
                    echo('<button class="btn_3" name="add_to_cart" type="submit" value=' . $r["id"] . '-' . $u_loged . '> Adiciona ao carrinho</button>');
                    echo('</form>');
                    echo('<form action="Model/add_to_fav.php" method="post">');
                    echo('<button class="btn_3" name="add_to_fav" type="submit" value=' . $r['id']  . '-' . $u_loged . '> Adiciona aos favoritos</button>');
                    echo('</form>');
                    echo('</td>');
                }
                echo('</tr>');
            }
        ?>
    </div>
</div>