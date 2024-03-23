<?php 
// NÚMEROS E OPERADORES

// Operações Básicas
$num1 = 10;
$num2 = 5;
echo "Valor A = $num1 e Valor B = $num2<br>";

// Soma
$soma = $num2 + $num1;
echo "Soma: $soma <br>";

//Subtração
$subtracao = $num1 - $num2;
echo "Subtração: $subtracao <br>";

//Multiplicação
$mult = $num1 * $num2;
echo "Multiplicação: $mult <br>";

//Divisão
$div = $num1 / $num2;
echo "Divisão: $div <br>";

// Módulo(Resto da divisão)
$modulo = $num1 % $num2;
echo "Módulo: $modulo <br>";

// Operações de Incremento e Decremento
$num = 5;
echo "Valor base para incremento e drecremento = $num <br>";

// Incremento
$num++;
echo "Incremento: $num <br>";

// Decremento
$num--;
echo "Decremento: $num <br>";

// Operadores de Comparação
$num1 = 10;
$num2 = 5;

// Igualdade
echo "Igual a: ";
echo $num1 == $num2 ? "Verdadeiro <br>" : "Falso <br>"; 
// pode ser também o IF
// TEM QUE USAR O ==

// Diferente
echo "Diferente de: ";
echo $num1 != $num2 ? "Verdadeiro <br>" : "Falso <br>";

// Maior
echo "Maior que: ";
echo $num1 > $num2 ? "Verdadeiro <br>" : "Falso <br>";

// Menor
echo "Maior que: ";
echo $num1 < $num2 ? "Verdadeiro <br>" : "Falso <br>";

echo "<hr>";
// Operadores Lógicos
$estaChovendo = true;
$estaCalor = true;


// E lógico(AND) - Neste caso todas as condições tem que ser verdadeiras
echo "Verdadeiro e Verdadeiro: ";
echo true && true ? "Verdadeiro <br>" : "Falso<br>";

echo "Verdadeiro e Falso: ";
echo true && false ? "Verdadeiro <br>" : "Falso<br>";

echo "Falso e Verdadeiro: ";
echo false && true ? "Verdadeiro <br>" : "Falso<br>";

echo "Falso e Falso: ";
echo false && false ? "Verdadeiro <br>" : "Falso<br>";

echo "<hr>";

// OR lógico(ou ||)
echo "Verdadeiro e Verdadeiro: ";
echo true || true ? "Verdadeiro <br>" : "Falso<br>";

echo "Verdadeiro e Falso: ";
echo true || false ? "Verdadeiro <br>" : "Falso<br>";

echo "Falso e Verdadeiro: ";
echo false || true ? "Verdadeiro <br>" : "Falso<br>";

echo "Falso e Falso: ";
echo false || false ? "Verdadeiro <br>" : "Falso<br>";

//Não lógico(NOT)
echo "Negando algo que é vedadeiro: ";
echo !true ? "Verdadeiro <br>" : "False <br>";

?>