<!-- Título da seção que exibe os usuários cadastrados -->
<h3>Usuários Cadastrados</h3>

<!-- Cria uma tabela com borda de tamanho 1 e espaçamento interno de 3 pixels -->
<table border="1" cellpadding="3">

    <!-- Linha de cabeçalho da tabela -->
    <tr>

        <!-- Coluna para exibir o ID do usuário -->
        <th>ID</th>

        <!-- Coluna para exibir o nome do usuário -->
        <th>Nome</th>

        <!-- Coluna para exibir a senha do usuário -->
        <th>Senha</th>

    </tr>

    <?php

    // Cria uma consulta SQL para buscar todos os usuários da tabela users
    $sqlUsuarios = "SELECT * FROM users";

    // Executa a consulta SQL e armazena o resultado
    $resultadoUsuarios = $conn->query($sqlUsuarios);

    // Percorre todos os registros encontrados no banco de dados
    while($linha = $resultadoUsuarios->fetch_assoc()){

        // Exibe cada usuário em uma nova linha da tabela
        echo "
        <tr>
            <td>" . $linha["id"] . "</td>
            <td>" . $linha["username"] . "</td>
            <td>" . $linha["password"] . "</td>
        </tr>
        ";

    }

    ?>

</table>