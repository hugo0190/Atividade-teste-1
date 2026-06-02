<?php

// Inicia uma sessão no servidor para armazenar dados do usuário logado
session_start();

// Inclui o arquivo responsável pela conexão com o banco de dados
include("infra/db/connect.php");

// Verifica se o formulário foi enviado utilizando o método POST
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Captura o valor digitado no campo "usuario"
    $usuario = $_POST["usuario"];

    // Captura o valor digitado no campo "senha"
    $senha = $_POST["senha"];

    // Exibe no console do navegador o usuário digitado (utilizado para testes)
    echo "<script> console.log('usuario captado com sucesso $usuario') </script>";

    // Exibe no console do navegador a senha digitada (utilizado para testes)
    echo "<script> console.log('senha captado com sucesso $senha') </script>";

    // Cria uma consulta SQL para verificar se o usuário e senha existem no banco
    $sql = "SELECT * FROM users WHERE username ='$usuario' AND password ='$senha'";

    // Executa a consulta SQL no banco de dados
    $resultado = $conn->query($sql);

    // Verifica se foi encontrado pelo menos um registro
    if($resultado->num_rows > 0){

        // Armazena o nome do usuário na sessão
        $_SESSION["usuario"] = $usuario;

        // Redireciona o usuário para a página inicial do sistema
        header("Location: public/home.php");

        // Encerra a execução do script
        exit();

    }else{

        // Cria uma mensagem de erro caso o login seja inválido
        $erro = "Usuário ou senha inválidos.";
    }
}
?>

<html lang="en">
<head>
    <!-- Define a codificação de caracteres da página -->
    <meta charset="UTF-8">

    <!-- Faz a página se adaptar a dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título exibido na aba do navegador -->
    <title>Tela de Login</title>

    <!-- Importa o arquivo CSS responsável pela estilização -->
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

    <?php
    // Inclui o componente da barra de navegação
    include("public/components/navbar.php");
    ?>

    <!-- Título principal da página -->
    <h1>Tela de Login - PHP</h1>

    <!-- Formulário de login utilizando o método POST -->
    <form method="POST">

        <!-- Texto que identifica o campo de usuário -->
        <label>Usuario</label>

        <!-- Campo para digitar o nome de usuário -->
        <input type="text" name="usuario"> <br>

        <!-- Texto que identifica o campo de senha -->
        <label>Senha</label>

        <!-- Campo para digitar a senha (oculta os caracteres) -->
        <input type="password" name="senha"> <br>

        <?php

        // Verifica se existe uma mensagem de erro
        if(isset($erro)){

            // Exibe a mensagem de erro na tela
            echo $erro;
        }

        ?>

        <br>

        <!-- Botão que envia o formulário para realizar o login -->
        <button type="submit">Entrar</button>

    </form>

</body>
</html>