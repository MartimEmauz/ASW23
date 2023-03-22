<?php include("../View/header.php")?>
<form action="../Model/register.php" method="post">
    email: <input type="text" name="email"><br>
    nome: <input type="text" name="nome"><br>
    passe: <input type="password" name="pass"><br>
    <input type="submit" value="Signup"><br>

    <a href="login.php">Login</a><br>
</form>

<?php include("../View/footer.php")?>