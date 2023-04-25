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
            $product = get_user_products($_SESSION['email']);
            echo('<tr>');
            echo('<td>');
            echo('<div class="media">');
            echo('<div class="d-flex">');
            print_r($product);
        
        ?>
        




        
        
        
            <tr>
            <td>
                <div class="media">
                <div class="d-flex">
                    <img src="assets/img/gallery/card1.png" alt="" />
                </div>
                <div class="media-body">
                    <p>Minimalistic shop for multipurpose use</p>
                </div>
                </div>
            </td>
            <td>
                <h5>$360.00</h5>
            </td>
            <td>
                <a class="btn_3" href="View/delete_product.php">Delete</a>
            </td>
            </tr>




            <tr>
            <td>
                <div class="media">
                    <div class="d-flex">
                        <img src="assets/img/gallery/card2.png" alt="" />
                    </div>
                    <div class="media-body">
                        <p>Minimalistic shop for multipurpose use</p>
                    </div>
                </div>
            </td>
            <td>
            <h5>$360.00</h5>
            </td>
            <td>
                <a class="btn_3" href="View/delete_product.php">Delete</a>
            </td>
            </tr>




            <tr class="bottom_button">
            <td>
                <a class="btn_1" href="add_product.php">Adicionar nova peça</a>
            </td>
    </div>
</div>
