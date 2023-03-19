<?php include("../View/header.php")?>

<form action="../Model/logout.php" method="post">
    <label>Do you wish to logout?</label><br>
    <input type="submit" name= "confirm" value="Yes">
    <input type="submit" name= "confirm" value="No">
</form>

<?php include("../View/footer.php")?>