<?php
require_once 'database/pedidoRepository.php';

class PedidoController{

    public static function handleRequest($action){
        switch($action){
            case'listar';
                self::listarPedidos();
                break;
            
            case'buscar';
                self::buscarPedidoPorId();
            break;
            case 'cadastrar';
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

    public static function listarPedidos() {
        $pedidos = PedidoRepository::getallPedidos();
        echo json_encode($pedidos);
    }

    public static function buscarPedidoPorId() {
        if($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $pedido = PedidoRepository::getPedidosById($id);

            if($pedido) {
                echo json_encode($pedido);
            } else {
                http_response_code(404);
                echo json_encode(['error' => 'Pedido não econtrado']);
            }
        } else {
            http_response_code(405); 
        }
    } 

    public static function cadastrarPedido(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $data = json_decode(file_get_contents("php://input"));
            $data_pedido = $data->data_pedido;
            $status = $data->status;
            $pedido = new Pedido(null, $data_pedido, $status);


            $success = PedidoRepository::inserirPedido($pedido);
            echo json_encode(['successes' => $success]);
        } else {
            http_response_code(405);
        }
    }

    public static function atualizarPedido(){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents("php://input"));
            $pedido = new Pedido($data->id, $data->data_pedido, $data->status);

            $success = PedidoRepository::updatePedido($pedido);
            echo json_encode(['success' => $success]);         
        } else {
        http_response_code(405);
        }
    }

    public static function excluirPedido(){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents("php://input"));
            $id = $data->id;
        
            $success = PedidoRepository::deletePedido($id);
            echo json_encode(['success'=> $success]);

        } else {
            http_response_code(405);
        }
    }
}

