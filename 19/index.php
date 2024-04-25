<?php
require_once 'database/pedidoRepository.php';
require_once 'database/produtoRepository.php';

//print_r(PedidoRepository::getallPedidos());

$action = $_GET['action'];

switch($action){
    case'listarpedido':
        echo json_encode(PedidoRepository::getallPedidos());
        
        break;

    case'listarproduto':
          echo json_encode(ProdutoRepository::getallprodutos());
            
    break;
    default:
        break;


        
}
?>