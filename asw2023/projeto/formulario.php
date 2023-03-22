<?php

if(isset($_POST['submit'])){

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if(!preg_match("/^[a-zA-Z]*$/",$nome)){
                echo "<p>Nome deve conter apenas letras.</p>";
        }

	if(!is_numeric($idade)){
                echo "<p>Idade deve ser um número.</p>";
        }

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<p>Email inválido.</p>";
        }

	if(strlen($senha) < 8){
                echo "<p>A senha deve ter no mínimo 8 caracteres.</p>";
        }

        $senha = $_POST['senha'];

        if(!preg_match("/^[a-zA-Z]*$/",$nome)){
                echo "<p>Nome deve conter apenas letras.</p>";
        }

	if(!is_numeric($idade)){
                echo "<p>Idade deve ser um número.</p>";
        }

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<p>Email inválido.</p>";
        }

	if(strlen($senha) < 8){
                echo "<p>A senha deve ter no mínimo 8 caracteres.</p>";
        }

        // Conectar ao banco de dados e inserir os dados do usuário
}

?>

