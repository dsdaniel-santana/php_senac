<?php
// Definindo constantes para conexão com o banco de dados
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'usuario_contatos');
define('DB_PASSWORD', 'Senha@123');
define('DB_NAME', 'contatos');

// Criar uma conexão com o banco de dados
$connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//verificando se ocorreu algum erro de conexão
if($connection->connect_error){
    die("Erro de coneão" . $connection->connect_error);
}

// Exemplo de consulta SQL para selecionar todos os registros da tabela
$sql = "SELECT * FROM contatos_info";

// Metodo 1: utilizando fetch_assoc()
$result = $connection->query($sql);
print_r($result);

if($result->num_rows>0){
        while ($row = $result->fetch_assoc()){
            //Exibe os valores dos campos utilizando o métdo fetch_assoc
            echo "ID: " . $row ['id'] . "<br>";
            echo "Nome: " . $row ['nome'] . "<br>";
            echo "Email:" . $row ['email'] . "<br>";
            echo "<hr>";}


        } else {
            echo "Nenhum Registro encontrado";
    }
        
//Fechando a conexão com o banco de dados
$connection->close();
    



?>