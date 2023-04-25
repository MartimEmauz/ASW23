<section class="login_part section_padding ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                        <h3>Complete as informações sobre o seu produto<br>
                        <form class="row contact_form" action="Model/add_product.php" method="post" enctype="multipart/form-data" novalidate="novalidate">
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="titulo_ap" name="titulo_ap" value=""
                                    placeholder="Titulo">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="number" min="0" step="0.01" class="form-control" id="preco_ap" name="preco_ap" value=""
                                    placeholder="Preço">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="file" class="form-control" id="imagem_ap" name="imagem_ap" value=""
                                    placeholder="Imagem">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="descricao_ap" name="descricao_ap" value=""
                                    placeholder="Descricao">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label for="estado_ap" class="form-control">Estado</label>
                                    <select name="estado_ap">
                                        <option value="velho">velho</option>
                                        <option value="usado">usado</option>
                                        <option value="bom">bom</option>
                                        <option value="perfeito">perfeito</option>
                                    </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label for="cor_ap" class="form-control">Cor</label>
                                    <select name="cor_ap">
                                        <option value="vermelho">vermelho</option>
                                        <option value="amarelo">amarelo</option>
                                        <option value="azul">azul</option>
                                        <option value="laranja">laranja</option>
                                        <option value="verde">verde</option>
                                        <option value="violeta">violeta</option>
                                        <option value="rosa">rosa</option>
                                        <option value="castanho">castanho</option>
                                        <option value="cinzento">cinzento</option>
                                        <option value="branco">branco</option>
                                        <option value="preto">preto</option>
                                    </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label for="marca_ap" class="form-control">Marca</label>
                                    <select name="marca_ap">
                                        <option value="zara">zara</option>
                                        <option value="pullandbear">pullandbear</option>
                                        <option value="vans">vans</option>
                                        <option value="nike">nike</option>
                                        <option value="adidas">adidas</option>
                                        <option value="gap">gap</option>
                                    </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label for="tipo_ap" class="form-control">Tipo</label>
                                    <select name="tipo_ap">
                                        <option value="classico">classico</option>
                                        <option value="casual">casual</option>
                                        <option value="vintage">vintage</option>
                                        <option value="retro">retro</option>
                                        <option value="confortavel">confortavel</option>
                                        <option value="desportivo">desportivo</option>
                                        <option value="gotico">gotico</option>
                                    </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label for="tamanho_ap" class="form-control">Tamanho</label>
                                    <select name="tamanho_ap">
                                        <option value="XS">XS</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                    </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label for="categoria_ap" class="form-control">Categoria</label>
                                    <select name="categoria_ap">
                                        <option value="roupa_interior">roupa interior</option>
                                        <option value="calcado">calçado</option>
                                        <option value="calcas">calças</option>
                                        <option value="calcoes">calções</option>
                                        <option value="cintos">cintos</option>
                                        <option value="t-shirt">t-shirt</option>
                                        <option value="camisola">camisola</option>
                                        <option value="casaco">casaco</option>
                                        <option value="blusao">blusão</option>
                                        <option value="chapeu">chapeu</option>
                                        <option value="pijama">pijama</option>
                                    </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit_ap" class="btn_3">
                                    Confirmar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>