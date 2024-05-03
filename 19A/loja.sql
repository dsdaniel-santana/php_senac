-- Criar Banco de Dados
CREATE DATABASE IF NOT EXISTS loja;

-- Usar Banco de Dados
use loja;

-- Criar Tabela Produto

CREATE TABLE IF NOT EXISTS produto(
    id INT auto_increment primary key,
    nome varchar(100) not null,
    descricao text, 
    preco decimal (10,2) not null
);

-- Inserir Alguns Produtos
INSERT INTO (nome, descricao, preco)values
('Computador Desktop','i7 13th',4.999),
('LapTop','i9 13th', 7.999),
('MacBook pro','256gb', 9.999)

-- Inserir Pedidos
INSERT INTO pedido(data_pedido, status) values
('',''),
('','')

