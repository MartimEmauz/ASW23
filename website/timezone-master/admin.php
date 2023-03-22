<?php
session_start();
include('header.php');
?>

<h2>Admin</h2>
<p>Search for users</p>

<form class="row contact_form" action="admin1.php" method="post" novalidate="novalidate">
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="nome" name="nome1" value=""
                                            placeholder="Nome de utilizador">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="pass" class="form-control" id="pass" name="pass1" value=""
                                            placeholder="Password">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="localidade" name="localidade1" value=""
                                            placeholder="Localidade">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="morada" name="morada1" value=""
                                            placeholder="Morada">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="localidade" name="localidade1" value=""
                                            placeholder="Localidade">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="codigopostal" name="codigo_postal1" value=""
                                            placeholder="Código Postal">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <label for="genero" class="form-control">Género</label>
                                            <select name="genero1">
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                                <option value="O">Other</option>
                                            </select>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="date" class="form-control" id="datanasc" name="data_nascimento1" value=""
                                            placeholder="Data de nascimento">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="email" name="email1" value=""
                                            placeholder="Email">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <button type="submit" value="submit" class="btn_3">
                                            Search
                                        </button>
                                        <a class="lost_pass" href="#">forgot pass?</a>
                                    </div>
                                </form>

                                
<?php
include('footer.php');
?>