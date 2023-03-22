<?php include("../View/header.php")?>
<form action="../Model/login.php" method="post">
    email: <input type="text" name="email_login"><br>
    passe: <input type="password" name="pass_login"><br>
    <input type="submit" value="Login"><br>

    <a href="register.php">SignUp</a>
</form>

<?php include("../View/footer.php")?>