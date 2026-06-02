<?php

    // Inicia a sessão para acessar os dados do usuário logado
    session_start();

    // Verifica se existe um usuário armazenado na sessão
    if(!isset($_SESSION["usuario"])){

        // Caso não exista, redireciona para a tela de login
        header("Location: ../index.php");

        // Encerra a execução do código
        exit();
    }

    // Inclui o arquivo de conexão com o banco de dados
    include("../infra/db/connect.php");

    // Verifica se o formulário foi enviado pelo método POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Captura o novo usuário digitado no formulário
        $novoUsuario = $_POST["usuario"];

        // Captura a nova senha digitada no formulário
        $novaSenha = $_POST["senha"];

        // Cria a consulta SQL para inserir um novo usuário no banco de dados
        $sql = "INSERT INTO users(username, password) VALUES ('$novoUsuario','$novaSenha')";

        // Executa a consulta SQL e verifica se foi realizada com sucesso
        if($conn->query($sql) === TRUE){

            // Exibe uma mensagem de sucesso para o usuário
            echo "<script> alert('Usuário Cadastrado com Sucesso!');</script>";

        }else{

            // Exibe uma mensagem de erro caso o cadastro falhe
            echo "<script> alert('Erro: Usuário Não Cadastrado!');</script>";
        }

    }

?>

<html lang="en">
<head>

    <!-- Título exibido na aba do navegador -->
    <title>Home</title>

    <!-- Importa o arquivo CSS responsável pela estilização da página -->
    <link rel="stylesheet" href="../styles/style.css">

</head>

<body>

    <?php

    // Inclui o componente da barra de navegação
    include("components/navbar.php");

    ?>

    <!-- Exibe uma mensagem de boas-vindas com o nome do usuário logado -->
    <h1>Bem vindo, <?php echo $_SESSION["usuario"]; ?> </h1>

    <!-- Link para realizar logout do sistema -->
    <a href="logout.php">Sair</a>

    <!-- Linha horizontal para separar o conteúdo -->
    <hr>

    <!-- Título da área de cadastro -->
    <h3>Cadastrar Novos Usuários</h3>

    <!-- Formulário para cadastrar novos usuários -->
    <form method="POST">

        <!-- Texto que identifica o campo de usuário -->
        <label>Usuario</label>

        <!-- Campo para digitar o nome do novo usuário -->
        <input type="text" name="usuario"> <br>

        <!-- Texto que identifica o campo de senha -->
        <label>Senha</label>

        <!-- Campo para digitar a senha do novo usuário -->
        <input type="password" name="senha"> <br>

        <br>

        <!-- Botão que envia o formulário para cadastrar o usuário -->
        <button type="submit">cadastrar</button>

    </form>

    <!-- Linha horizontal para separar as seções -->
    <hr>

    <?php

    // Inclui o componente responsável por exibir a tabela de usuários
    include("components/table.php");

    ?>

</body>
</html>