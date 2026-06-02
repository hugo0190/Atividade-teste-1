-- Cria um novo banco de dados chamado sistema_simples
CREATE DATABASE sistema_simples;

-- Seleciona o banco de dados sistema_simples para utilização
USE sistema_simples;

-- Cria uma tabela chamada users para armazenar os usuários do sistema
CREATE TABLE users (

    -- Cria a coluna id do tipo inteiro
    -- AUTO_INCREMENT faz o número aumentar automaticamente a cada novo registro
    -- PRIMARY KEY define essa coluna como identificador único da tabela
    id INT AUTO_INCREMENT PRIMARY KEY,

    -- Cria a coluna username para armazenar o nome do usuário
    -- VARCHAR(255) permite armazenar até 255 caracteres
    -- NOT NULL impede que o campo fique vazio
    username VARCHAR(255) NOT NULL,

    -- Cria a coluna password para armazenar a senha do usuário
    -- VARCHAR(255) permite armazenar até 255 caracteres
    -- NOT NULL impede que o campo fique vazio
    password VARCHAR(255) NOT NULL

);

-- Insere um usuário padrão na tabela users
INSERT INTO users (username, password)

-- Define os valores que serão inseridos
VALUES ('admin', '123');