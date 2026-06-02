<?php

    // Inicia a sessão atual para que ela possa ser manipulada
    session_start();

    // Remove todos os dados armazenados na sessão do usuário
    session_destroy();

    // Redireciona o usuário para a página de login (index.php)
    header("Location: ../index.php");

    // Encerra a execução do script após o redirecionamento
    exit();

?>