<?php
    
    // Conexão Direta
    $connection = new mysqli("localhost", "usuario_contatos", "senha123", "contatos");

    // Cerficando a conexao
    if(!$connection->connect_errno){
        echo "Sucesso na conexao! <br> ";
    }


    // Cerficando a conexao
    if($connection->connect_errno){
        echo "Erro de conexao <br> ";
        echo "Erro: " . mysqli_connect_error();
    }
?>