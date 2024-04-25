<?php
require_once 'database/pedidoRepository.php';

//print_r(PedidoRepository::getallPedidos());

$action = $_GET['action'];

switch($action){
    case'listar':
        echo json_encode(PedidoRepository::getallPedidos());
        break;
    default:
        break;
}
?>