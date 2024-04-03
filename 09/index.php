<?php

function nomeDaFuncao(){
    // Bloco de código da função
}

//Declaração de função sem parâmetros e sem retorno
//Funções são utilizadas para isolar trechos de códigos
function saudacao(){
    echo "Palmeiras não tem mundial! <br>";
}

saudacao(); // Chamada da função

// Declaração de uma fução que retorna valor
function saudacaoRetorno(){
    return "Vai Corinthians! <br>";
}

echo saudacaoRetorno();

function saudacao_parametro($nome){
    echo "Olá, $nome <br>";
}

saudacao_parametro("timaooooo");

//Declaração de uma função que recebe um parâmetro e retorna algo
function saudacaoParaRet($nome){
    return "Olá, $nome <br>";
}

echo saudacaoParaRet("vai timaooo");

//Declaração de uma função que recebe dois parametros e realiza um retorno
function soma($a, $b){
    return $a + $b;
}

$res = soma(8, 20);
echo "A soma de 8 + 20 é $res <br>";

#ESCOPO DAS VAIÁVEIS
$msg = "Hello "; //variavel global
function showMsg(){
    $msg = "World <br>"; //variavel local
    echo $msg;
}

showMsg();
echo $msg;




?>