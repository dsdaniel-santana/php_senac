<?php
/*
    Exercício 1 - Soma:
    Declare duas variáveis contendo números inteiros e exiba a soma dos dois números.

    Exercício 2 - Subtração:
    Declare duas variáveis contendo números inteiros e exiba a diferença entre eles.

    Exercício 3 - Multiplicação:
    Declare duas variáveis contendo números inteiros e exiba o produto dos dois números.

    Exercício 4 - Divisão:
    Declare duas variáveis contendo números inteiros e exiba o resultado da divisão do primeiro pelo segundo.

    Exercício 5 - Módulo (Resto da Divisão):
    Declare duas variáveis contendo números inteiros e exiba o resto da divisão do primeiro pelo segundo.

    Exercício 6 - Incremento e Decremento:
    Declare uma variável contendo um número inteiro. 
    Em seguida, incremente o valor dessa variável em 1 e exiba o resultado. 
    Depois, decremente o valor da variável em 1 e exiba o resultado.

    Exercício 7 - Operadores de Comparação:
    Declare duas variáveis contendo números inteiros e utilize operadores de comparação para determinar se o primeiro número é igual, diferente, maior, menor, maior ou igual ou menor ou igual ao segundo número. Exiba o resultado de cada comparação.
*/

//1 
$number1 = 8;
$number2 = 10;

$sum = $number1 + $number2;
echo "A Soma de $number1 + $number2 = $sum<br>";

//2
$number1 = 8;
$number2 = 10;

$sub = $number1 - $number2;
echo "A Subtração de $number1 - $number2 = $sub<br>";

//3
$number1 = 8;
$number2 = 10;

$mult = $number1 * $number2;
echo "A Multiplicação de $number1 * $number2 = $mult<br>";

// 4 
$number1 = 10;
$number2 = 2;

$div = $number1 / $number2;
echo "A Subtração de $number1 / $number2 = $div<br>";

// 5
$number1 = 10;
$number2 = 2;

$mod = $number1 % $number2;
echo "A Subtração de $number1 / $number2 = $mod<br>";

// 6
$n = 8;
echo "Incremento $n = " .++$n . "<br>";


// 7
$n = 8;
echo "Decremento $n = " .--$n . "<br>";





?>