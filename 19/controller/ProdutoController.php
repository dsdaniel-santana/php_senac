<?php

require_once 'database/ProdutoRepository.php';

class ProdutoController {
    public static function handleRequest($action) {
        switch ($action) {
            case 'listar':
                self::listarProdutos();
                break;
            case 'buscar':
                self::buscarProdutoPorId();
                break;
            default:
                http_response_code(400);
                echo json_encode(['error' => 'Ação inválida!']);
                break;
        }
    }

    public static function listarProdutos() {
        $produtos = ProdutoRepository::getAllProdutos();
        echo json_encode($produtos);
    }

    public static function buscarProdutoPorId() {
        if($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $produto = ProdutoRepository::getProdutoById($id);

            if($produto) {
                echo json_encode($produto);
            } else {
                http_response_code(404);
                echo json_encode(['error' => 'Produto não econtrado']);
            }
        } else {
            http_response_code(405); 
        }
    }
}
?>