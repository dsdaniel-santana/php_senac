<?php
require_once 'DatabaseRepository.php';

class ContaRepository {

    public static function getAllContas() {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM conta");

        $contas = [];
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $contas[] = $row;
            }
        }
        $connection->close();
        return $contas;
    }

    public static function getContasById($id) {
        $connection = DatabaseRepository::connect();
        $sql = "SELECT * FROM conta WHERE id = $id";
        $result = $connection->query($sql);

        $conta = null;
        if($result->num_rows > 0) {
            $conta = $result->fetch_assoc();
        }
        $connection->close();
        return $conta;
    }

    


}
?>