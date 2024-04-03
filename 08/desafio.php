<?php
//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO

// Desafio 1: Verificar se a soma de A + B é igual a C
/*
    Solicita três números inteiros ao usuário (A, B e C) e verifica se a soma de A e B é igual a C.
*/
$a = 1;
$b = 2;
$c = 4;
if($a + $b == $c){
    echo  "Verdadeiro";
} else {
    echo "Não é verdadeiro";
}
echo "<br>";

// Implementação da Verificação de Soma
// Desafio 2: Calcular o quadrado de um número
/*
    Solicita ao usuário um número inteiro e calcula o quadrado desse número.
*/

// Implementação do Cálculo do Quadrado
<<<<<<< HEAD
$nQ = 10;
echo "o quadrado de $nQ é:" . ($nQ * $nQ);
=======
>>>>>>> 8d3d00301eeb8518171ad25b769bf777fc2540e9

<<<<<<< HEAD
echo "<br>";
=======
//RESOLUÇÃO 
$nQ = 10;
echo "O quadrado de $nQ é: " . ($nQ * $nQ);
echo "<br>";
>>>>>>> 8d3d00301eeb8518171ad25b769bf777fc2540e9



// Desafio 3: Verificar se um número é par ou ímpar
/*
Solicita ao usuário um número inteiro e verifica se ele é par ou ímpar.
*/
// Implementação da Verificação de Paridade

$numV = 15;
if ($numV % 2 == 0){
    echo "O $numV é par";

} else {
    echo "O $numV é impar";
}
echo "<br>";

// Desafio 4: Calcular a média de três números
/*
    Solicita ao usuário três números e calcula a média aritmética entre eles.
*/

// Implementação do Cálculo da Média

$nA = 9;
$nB = 10;
$nC = 11;
echo "A média entre $nA, $nB e $nC é: " . (($nA + $nB + $nC) / 3);
echo "<br>";




// Desafio 5: Verificar se um número é múltiplo de outro
/*
    Solicita ao usuário dois números e verifica se o primeiro é múltiplo do segundo.
*/

// Implementação da Verificação de Múltiplo


$nMa = 7;
$nMb = 3;
if ($nMa % $nMb != 0 ) {
    echo "Os números $nMa e $nMb não são múltiplos.\n";
} else {
    echo "Os números $nMa e $nMb são múltiplos.\n";
}
echo "<br>";





//// Exercício 2: Números Primos em um Intervalo
/*
    Solicita dois números inteiros ao usuário (N e M, onde N < M) e exibe todos os números primos no intervalo de N a M.
*/
$numeroN = 1;
$numeroM = 25;

// Implementação de Números Primos em um Intervalo
function ehPrimo($numero){
    if($numero <= 1){
        return false;
    }

    for($i = 2; $i <= sqrt($numero); $i++){
        if($numero % $i == 0){
            return false;
        } 
    }
    return true;
}



echo "Números primos no intervalo de $numeroN até $numeroM: ";
for ($i = $numeroN; $i <= $numeroM; $i++){
    if (ehPrimo($i)) {
        echo "$i ";
    }
}

echo "<br>";


//// Exercício 3: Conversão de Horas em Minutos
/*
    Solicita ao usuário a quantidade de horas e minutos e converte isso para o equivalente total de minutos.
*/

// Implementação de Conversão de Horas em Minutos

$time = "01:35";

// Extrair horas e minutos do tempo
list($horas, $minutos) = explode(":", $time);

// Converter o tempo para minutos
$conversao = $horas * 60 + $minutos;

// Exibir o resultado
echo "O tempo $time em minutos é: $conversao";
echo "<br>";



/// Exercício 4: Desenho de Pirâmide
/*
    Solicita ao usuário a altura de uma pirâmide (número de linhas) e desenha-a na tela usando asteriscos (*) em cada linha.
*/

// Implementação de Desenho de Pirâmide

$alturaPiramide = 5;
for($i = 1; $i <= $alturaPiramide; $i++){
    echo str_repeat("* ", $i) . "<br>";
}
echo "<br>";




//// Exercício 6: Contagem de Dígitos em um Número
/*
    Solicita ao usuário um número inteiro positivo e conta quantos dígitos esse número possui.
*/

// Implementação de Contagem de Dígitos em um Número
$numemoroSolic = 2024;
echo "A contagem de digitos de: $numemoroSolic são: " .strlen($numemoroSolic) ." digitos.";
echo "<br>";




//// Exercício 7: Verificação de Palíndromo
/*
    Solicita ao usuário uma palavra e verifica se ela é um palíndromo.
*/

// Implementação de Verificação de Palíndromo
$palavra = "bolacha";
$palavraRev = strrev($palavra);
if ($palavra == $palavraRev){
    echo "A palavra $palavra é Palíndromo";
} else{
    echo "A palavra $palavra não é Palíndromo";
}
 echo "<br>";


//// Exercício 8: Ordenação de Números
/*
    Solicita ao usuário três números inteiros e os exibe em ordem crescente.
*/

// Implementação de Ordenação de Números

$nCa = 8;
$nCb = 7;
$nCc = 6;

// Criar um array com os valores
$valores = array($nCa, $nCb, $nCc);

// Ordenar o array em ordem crescente
sort($valores);

// Exibir os valores em ordem crescente
echo "Valores em ordem crescente: ";
foreach ($valores as $valor) {
    echo "$valor ";
}

echo "<br>";

//// Exercício 9: Soma de Dígitos
/*
    Solicita ao usuário um número inteiro positivo e calcula a soma de todos 
    os seus dígitos.
*/
// Implementação de Soma de Dígitos
$n1 = 5;
$n2 = 150;
$sum = $n1 + $n2;
echo "A Soma de $n1 + $n2 = $sum<br>";
$nSa = str_split($sum);
$sd = array_sum($nSa);
echo "A soma dos dígitos de $sum é $sd.<br>";
echo "<br>";
/*$n1 = 5;
$n2 = 150;
$sum = $n1 + $n2;
echo "A Soma de $n1 + $n2 = $sum<br>";
$nSa = str_split($sum);
$sd = array_sum($nSa);
echo "A soma dos dígitos de $sum é $sd.<br>";
 */



//// Exercício 10: Geração de Sequência Numérica
/*
    Solicita ao usuário um número inteiro N e exibe os primeiros N números da 
    sequência: 1, 3, 6, 10, 15, 21, ...
*/
// Implementação de Geração de Sequência Numérica

$numeroSolicitado = 10;
$faixa = range($numeroSolicitado - 3, $numeroSolicitado + 3);

echo " A faixa de numeros em torno de <b>$numeroSolicitado</b> é: ";
echo implode(", ", $faixa);





?>
