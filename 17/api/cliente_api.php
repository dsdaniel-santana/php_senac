<?php

require_once '../database/ClienteRepository.php';

$action = $_GET['action'];

switch($action) {
    case 'listar':
        echo json_encode(ClienteRepository::getAllClientes());
        break;

    case 'buscar':
        buscarClinteID();
        break;
    case 'cadastrar':
        cadastrarCliente();
    break;
    case 'atualizar':
        atualizarCliente();
    case 'excluir':
        excluirCliente();
    break;
       
    default:
        http_response_code(400); // Requisição inválida
        echo json_encode(['error' => 'Ação inválida']);
}

function listarClientes(){
    $clientes = ClienteRepository::getAllClientes();
    echo json_encode($clientes);
}

function buscarClinteID(){
    $id = $_GET['id'];

}

function cadastrarCliente(){

}

function atualizarCliente(){

}

function excluirCliente(){

}

