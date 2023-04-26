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
            $product = get_user_products(get_user_info($_SESSION['email'], "id"));
            foreach($product as $p) {
                echo('<tr>');
                echo('<td>');
                echo('<div class="media">');
                echo('<div class="d-flex">');
                echo('<img src="assets/img/gallery/' . $p["imagem"] . '"alt="" />');
                echo('</div>');
                echo('<div class="media-body">');
                echo('<p>' . $p["descricao"] . '</p>');
                echo('</div>');
                echo('</div>');
                echo('</td>');
                echo('<td>');
                echo('<h5>' . $p["preco"] . '€</h5>');
                echo('</td>');
                echo('<td>');
                echo('<form action="Model/delete_product.php" method="post">');
                echo('<button class="btn_3" name="delete_p" type="submit" value=' . $p["id"] . '> Delete</button>');
                echo('</form>');
                echo('</td>');
                echo('</tr>');
            }
        ?>

        <tr class="bottom_button">
        <td>
            <a class="btn_1" href="add_product.php">Adicionar nova peça</a>
        </td>
    </div>
</div>
