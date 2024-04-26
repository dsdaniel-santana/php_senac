<?php

require_once'database/produtoRepository.php';

class ProdutoContoller{
    public static function handleRequest($action){
        switch($action){
            case 'listar':
                $produtos = ProdutoRepository::getallprodutos();
                echo json_encode($produtos);
                break;
            default:
                http_response_code(404);
                echo json_encode(['error' => 'Ação Inválida']);
                break;
        }
    }
}

?>