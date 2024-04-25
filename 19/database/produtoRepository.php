<?php

require_once'DatabaseRepository.php';
require_once'model/produto.php';

class ProdutoRepository{
    public static function getallprodutos(){
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM produto");

        $produtos = [];
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $produto = new Pedido($row['id'], $row['nome'], $row['descricao'], $row['preco']);
                $produtos[] = $produto;
            }
        }
            $connection->close();
            return $produtos;
    }
}
?> 