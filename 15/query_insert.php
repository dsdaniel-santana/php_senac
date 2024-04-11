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


//Criação dos dados para inserção
$nome_produto = "bolacha";
$quantidade = 10;


//Query para inserir um contato(utilizando uma consutla preparada)
$meuInsert = "INSERT INTO itens_compra (nome_produto, quantidade) VALUES(?, ?)";
$stmt = $connection->prepare($meuInsert);

//Verifica se a consulta preparada foi bem sucedida
if ($stmt) {
    //Associa os parâmetros a consulta preparada
    $stmt->bind_param("si", $nome_produto, $quantidade,);

    // Executa a consulta
    if($stmt->execute()){
        echo "Contatinho inserido com sucesso";

    }else {
        echo "Erro ao inserir o contato: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Erro na consulta preparada: " . $connection->error;
}

//Feacha a Conexão com o banco de dados
$connection->close();




?>