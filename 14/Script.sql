-- Criando o banco de dados "Contato"
CREATE DATABASE IF NOT EXISTS contatos;

-- Usando o banco de dados "contatos"
USE contatos;

-- Criando a tabela "contatos_info"
CREATE TABLE IF NOT EXISTS contatos_info (
	id INT AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR (100) NOT NULL,
	telefone VARCHAR (10) NOT NULL,
	email VARCHAR (100) NOT NULL
);