<?php
//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO




// Desafio 1: Contagem Regressiva
/*
    Crie um programa que solicite ao usuário um número inteiro positivo N e realize uma contagem regressiva até zero.
    Após cada contagem, exiba a mensagem "Falta X segundos" onde X representa o número de segundos restantes para chegar a zero.
*/

$number = 5; //Número fornecido pelo usuário
echo"Contagem regressiva (com for): <br>";

// Solução com for
for($i = $number; $i >=0; $i-- ){
    echo "Faltam $i segundos <br>";
}

echo"Contagem regressiva (com while): <br>";
// Solução com while
$i = $number;
while($i>=0){
    echo "Faltam $i segundos <br>";
    $i--;
}

echo"Contagem regressiva (com do-while): <br>";
// Solução com do-while
$i = $number;
do{
    echo "Faltam $i segundos <br>";
    $i--;
} while($i>=0);


// Desafio 2: Tabuada
/*
    Crie um programa que exiba a tabuada de multiplicação de um número fornecido 
    pelo usuário.
    A tabuada deve ser exibida de 1 até 10.
*/

// Solução com for
$nT = 7;
for($i = 1; $i <=10; $i++ ){
    $res = $nT * $i;
    echo "$nT X $i = $res  <br>";
}
echo "<br>";

// Solução com while
$i = 1;
while ($i<=10  ){
    $res = $nT * $i;
    echo "$nT X $i = $res  <br>";
    $i++;

}




// Desafio 3: Sequência Fibonacci
/*
    A sequência de Fibonacci é uma sequência de números inteiros em que cada termo é a soma dos dois anteriores.
    Crie um programa que solicite ao usuário um número N e exiba os N primeiros termos da sequência de Fibonacci.
*/



// Solução com for
echo "Sequência Fibonacci (com for): <br>";
$anterior = 0;
$atual = 1;
$term = 13;

echo "$anterior $atual";

for ($i = 2; $i < $term; $i++) {
    $prox = $anterior + $atual;
    echo " $prox";
    $anterior = $atual;
    $atual = $prox;
}

echo "<br>";

// Solução com while
echo"Sequência Fibonacci (com do-while): <br>";
$anterior = 0;
$atual = 1;
$i = 2;
$term = 13;

echo "$anterior $atual";

while ($i < $term){
    $prox = $anterior + $atual;
    echo "$prox";
    $anterior = $atual;
    $atual = $prox;
    $i++;
}



?>