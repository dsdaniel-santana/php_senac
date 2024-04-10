<?php
// Definindo constantes para a conexão com o banco de dados
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'usuario_contatos');
define('DB_PASSWORD', 'Senha@123');
define('DB_NAME', 'contatos');

// Criar uma conexão com o banco de dados
$connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verificando se ocorreu algum erro de conexão
if ($connection->connect_error) {
    die("Erro de conexão: " . $connection->connect_error);
}

//Criação dos dados para inserção
$nome = "Romero";
$telfone = "987654321";
$email = "fulana@x.com";

//Query para inserir um contato(utilizando uma consutla preparada)
$meuInsert = "INSERT INTO contatos_info(nome, telefone, email) VALUES(?, ?, ?)";
$stmt = $connection->prepare($meuInsert);

//Verifica se a consulta preparada foi bem sucedida
if ($stmt) {
    //Associa os parâmetros a consulta preparada
    $stmt->bind_param("sss", $nome, $telfone, $email);

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