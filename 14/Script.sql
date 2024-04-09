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

-- criando um usuário para acessar o Banco de Dados
CREATE USER 'usuario_contatos'@'localhost' IDENTIFIED BY 'senha123' 

-- Concendo permissões para o usuário no banco "contatos"
GRANT ALL PRIVILEGES ON contatos. * TO 'usuario_contatos'@'localhost';
FLUSH PRIVILEGES;

-- Inserindo dados no banco
INSERT INTO contatos_info (nome, telefone, email) VALUES
('Joao', '12345789', 'joao@email.com');