<form class="row contact_form" action="pesquisar.php" method="post" novalidate="novalidate">
    <div class="col-md-12 form-group p_star">
        <input type="text" class="form-control" id="nome_vendedor_p" name="nome_vendedor_p" value=""
            placeholder="Nome do/a Vendedor/a">
    </div>
    <div class="col-md-12 form-group p_star">
        <input type="number" min="0" step="1.00" class="form-control" id="preco_min_p" name="preco_min_p" value=""
            placeholder="Preço Minimo">
    </div>
    <div class="col-md-12 form-group p_star">
        <input type="number" min="0" step="1.00" class="form-control" id="preco_max_p" name="preco_max_p" value=""
            placeholder="Preço Maximo">
    </div>
    <div class="col-md-12 form-group p_star">
        <label for="genero_p" class="form-control">Género</label>
            <select name="genero_p">
                <option value=""></option>
                <option value="M">Male</option>
                <option value="F">Female</option>
                <option value="O">Other</option>
            </select>
    </div>
    <div class="col-md-12 form-group p_star">
        <label for="estado_p" class="form-control">Estado</label>
            <select name="estado_p">
                <option value=""></option>
                <option value="velho">velho</option>
                <option value="usado">usado</option>
                <option value="bom">bom</option>
                <option value="perfeito">perfeito</option>
            </select>
    </div>
    <div class="col-md-12 form-group p_star">
        <label for="cor_p" class="form-control">Cor</label>
            <select name="cor_p">
                <option value=""></option>
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
        <label for="marca_p" class="form-control">Marca</label>
            <select name="marca_p">
                <option value=""></option>
                <option value="zara">zara</option>
                <option value="pullandbear">pullandbear</option>
                <option value="vans">vans</option>
                <option value="nike">nike</option>
                <option value="adidas">adidas</option>
                <option value="gap">gap</option>
            </select>
    </div>
    <div class="col-md-12 form-group p_star">
        <label for="tipo_p" class="form-control">Tipo</label>
            <select name="tipo_p">
                <option value=""></option>
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
        <label for="tamanho_p" class="form-control">Tamanho</label>
            <select name="tamanho_p">
                <option value=""></option>
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>
    </div>
    <div class="col-md-12 form-group p_star">
        <label for="categoria_p" class="form-control">Categoria</label>
            <select name="categoria_p">
                <option value=""></option>
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
        <button type="submit" value="submit_p" class="btn_3">
            Confirmar
        </button>
    </div>
</form>
<br><br><br><br>
