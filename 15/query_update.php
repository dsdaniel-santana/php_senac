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

// Criação dos dados para update
$nome_produto = "Trakinas";
$quantidade = 5;
$id = 6;

// Query para atualizar um contato (utilizando consulta preparada)
$meu_update = "UPDATE itens_compra SET nome_produto = ?, quantidade = ? WHERE id = ?";
$stmt = $connection->prepare($meu_update);

/*
$nome_produto = "bolacha";
$quantidade = 10;
*/

if ($stmt) {
    //Associa os parâmetros à consulta preparada
    $stmt->bind_param("sii", $nome_produto, $quantidade, $id);

    // Executa a consulta
    if($stmt->execute()) {
        echo "Contato atualizado com sucesso";
    }
    else {
        echo "Erro ao atualizar o contato: " . $stmt->error;
    }

    // Fecha a consulta preparada
    $stmt->close();
} else {
    echo "Erro na consulta preparada: " . $connection->error;
}

$connection->close();



?>