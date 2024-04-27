<?php
require_once 'database/pedidoRepository.php';

class PedidoController{
    public static function handleRequest($action){
        switch($action){
            case'listar';
                self::listarPedidos();
                break;
            
            case'buscar';
                self::cadastrarPedido();
            break;
            case'atualizar';
                self::atualizarPedido();
            break;
            case'excluir';
                self::excluirPedido();
            break;

                default:
                http_response_code(400); //requisição inválida
                echo json_encode(['error' => 'Ação inválida']);
                break;
        }
    }
        public static function listarPedidos(){
            $pedidos = PedidoRepository::getallPedidos();
            echo json_encode($pedidos);
        }
        
    }       
    
    public static function buscarPedidoPorId() {
        if($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $produto = PedidoRepository::getPedidoById($id);

            if($pedido) {
                echo json_encode($pedido);
            } else {
                http_response_code(404);
                echo json_encode(['error' => 'Produto não econtrado']);
            }
        } else {
            http_response_code(405); 
        }
    } 

?>