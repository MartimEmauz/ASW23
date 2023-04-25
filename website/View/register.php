<section class="login_part section_padding ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                        <h3>Crie a sua conta<br>

                        <form class="row contact_form" action="Model/register.php" method="post" novalidate="novalidate">
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="nome" name="nome" value=""
                                    placeholder="Nome de utilizador">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="pass" class="form-control" id="pass" name="pass" value=""
                                    placeholder="Password">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="localidade" name="localidade" value=""
                                    placeholder="Localidade">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="morada" name="morada" value=""
                                    placeholder="Morada">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="codigopostal" name="codigo_postal" value=""
                                    placeholder="Código Postal">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label for="genero" class="form-control">Género</label>
                                    <select name="genero">
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                        <option value="O">Other</option>
                                    </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="date" class="form-control" id="datanasc" name="data_nascimento" value=""
                                    placeholder="Data de nascimento">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="email" name="email" value=""
                                    placeholder="Email">
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="btn_3">
                                    Signup
                                </button>
                                <a class="lost_pass" href="#">forgot pass?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
