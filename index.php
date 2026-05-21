<?php


session_start();


$host = "local host";
$user = "root";
$pass = "";
$db = "Sistema_simples";

$conn = new mysqli($host, $user, $pass, $db);

if ($com -> connect_error){

echo"<script> console.log('erro na conexao cpm o banco')</script>";


}else{

echo "<script> console.log('conexão com o banco foi um sucesso!')</script>";

}

?>
















<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
</head>
<body>
    <h1>Tela de login PHP</h1>
    <form method="POST">

<label>Usuario<label>
<input type="text"> name="Usuario"> <br>
<label> Senha</label>
<input type= "password" name="senha"> <br>

<button type+ "submit"> Entrar</button>
</form>
</body>
</html>