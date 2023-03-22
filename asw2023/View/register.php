<?php include("../View/header.php")?>
<form action="../Model/register.php" method="post">
    nome: <input type="text" name="nome"><br>
    passe: <input type="password" name="pass"><br>
    localidade: <input type="text" name="localidade"><br>
    morada: <input type="text" name="morada"><br>
    codigo_postal: <input type="text" name="codigo_postal"><br>
    <label for="genero">genero:</label>
    <select name="genero">
        <option value="M">Male</option>
        <option value="F">Female</option>
        <option value="O">Other</option>
    </select><br>
    data_nascimento: <input type="date" name="data_nascimento"><br>
    email: <input type="text" name="email"><br>
    <input type="submit" value="Register"><br>
    <a href="login.php">Login</a><br>
</form>

<?php include("../View/footer.php")?>