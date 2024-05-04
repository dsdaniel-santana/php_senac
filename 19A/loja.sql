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
('2024-05-03','pendente'),
('2024-04-01','concluido');

-- Criar Tabela produto_pedido
CREATE TABLE IF NOT EXISTS produto_pedido(
    id INT AUTO_INCREMENT PRIMARY KEY,
    produto_id INT NOT NULL,
    pedido_id INT NOT NULL,
    quantidade INT NOT NULL,
    FOREIGN KEY (produto_id) REFERENCES produto(id),
    FOREIGN KEY (pedido_id) REFERENCES pedido(id)

);

-- Inserir alguns itens nos pedidos de exemplo
INSERT INTO produto_pedido(produto_id, pedido_id, quantidade) values
(1, 1, 2),
(2, 1, 5),
(3, 2, 8);



