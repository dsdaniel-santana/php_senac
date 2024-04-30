<?php

require_once'DatabaseRepository.php';
require_once'model/pedido.php';

class PedidoRepository{
    public static function getallPedidos(){
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM pedido");

        $pedidos = [];
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $pedido = new Pedido($row['id'], $row['data_pedido'], $row['status']);
                $pedidos[] = $pedido;
            }
        }
            $connection->close();
            return $pedidos;
    }

    public static function getPedidosById($id){
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM pedido WHERE id=$id");
        $pedido = null;

        if($result->num_rows >0){
            $row = $result->fetch_assoc();
            $pedido = new Pedido($row['id'], $row['data_pedido'], $row['status']);
        }
        $connection->close();
        return $pedido;

    }

    public static function inserirPedido (Pedido $pedido){
        $connection = DatabaseRepository::connect();

        $data_pedido = $pedido->getData();
        $status = $pedido->getStatus();
        
        $sql = "INSERT INTO pedido (data_pedido, status)VALUES ('$data_pedido','$status')";
        $success = $connection->query($sql);
        $connection->close();
        return $success;

    
    }

    public static function updatePedido(Pedido $pedido){
        $connection = DatabaseRepository::connect();
        $id = $pedido->getID();
        $data_pedido = $pedido->getData();
        $status = $pedido->getStatus();

        $sql = "UPDATE produto SET data_pedido='$data_pedido',status='$status' WHERE id=$id";
        $success = $connection->query($sql);
        $connection->close();

        return $success;
    }


    public static function deletePedido($id){
        $connection = DatabaseRepository::connect();
        $success = $connection->query("DELETE FROM pedido WHERE id=$id");
        $connection->close();
        return $success;
    }

}
?> 