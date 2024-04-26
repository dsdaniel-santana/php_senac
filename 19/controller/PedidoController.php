<?php
require_once 'database/pedidoRepository.php';

class PedidoController{
    public static function handleRequest($action){
        switch($action){
            case'listar';
                self::listarPedidos();
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

?>