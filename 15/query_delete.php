<?php

//Definindo banco de dados:
define('DB_SERVER', 'localhost');
define('DB_USERNAME','usuario_lista_compras');
define('DB_PASSWORD', 'Senha@123');
define('DB_NAME', 'lista_compras');

//criando conexao
$connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//verificação
if($connection->connect_error){
    die("Erro de conexão: " . $connect->connect_error);
}

$id = 5; // ID do registro que será excluído

// Query para excluir um contato (utilizando consulta preparada)
$meu_delete = "DELETE FROM itens_compra WHERE id = ?";
$stmt = $connection->prepare($meu_delete);

if($stmt) {
    // Associa o parâmetro à consulta preparada
    $stmt->bind_param("i", $id);

    // Executar a consulta
    if($stmt->execute()) {
        echo "Contato de id $id excluído com sucesso.";
    } else {
        echo "Erro ao excluir o contato de id $id: " . $stmt->error;
    }

    $stmt->close();
    
} else {
    echo "Erro na consulta preparada " . $connection->error;
}

$connection->close();




?>