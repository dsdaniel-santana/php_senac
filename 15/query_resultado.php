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

//exemplo consulta
$sql = "SELECT * FROM itens_compra";

// Metodo 1: utilizando fetch_assoc()
$result = $connection->query($sql);
print_r($result);

if($result->num_rows>0){
    while ($row = $result->fetch_assoc()){
        //Exibe os valores dos campos utilizando o métdo fetch_assoc
        echo "ID: " . $row ['id'] . "<br>";
        echo "Nome: " . $row ['nome_produto'] . "<br>";
        echo "Quantidade:" . $row ['quantidade'] . "<br>";
        echo "Comprado: " . $row ['comprado'] . "<br>";
        echo "<hr>";}


    } else {
        echo "Nenhum Registro encontrado";
}
    
//Fechando a conexão com o banco de dados
$connection->close();


/*
CREATE TABLE IF NOT EXISTS itens_compra (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_produto VARCHAR(100) NOT NULL,
    quantidade INT NOT NULL,
    comprado BOOLEAN DEFAULT FALSE
);


 */


?>