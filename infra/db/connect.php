<?php

    // Define o endereço do servidor do banco de dados
    $host = "localhost";

    // Define o nome do usuário que terá acesso ao banco
    $user = "root";

    // Define a senha do usuário do banco de dados
    $pass = "root";

    // Define o nome do banco de dados que será utilizado
    $db = "sistema_simples";

    // Cria uma nova conexão com o banco de dados MySQL
    $conn = new mysqli($host, $user, $pass, $db);

    // Verifica se ocorreu algum erro durante a conexão
    if ($conn->connect_error){

        // Exibe uma mensagem de erro no console do navegador
        echo "<script> console.log('erro na conexão com o banco') </script>";

    }else{

        // Exibe uma mensagem de sucesso no console do navegador
        echo "<script> console.log('conexão com o banco foi um sucesso')</script>";
    }

?>