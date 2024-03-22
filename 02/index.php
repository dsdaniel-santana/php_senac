<?php
// STRINGS

// Para unir duas ou mais strings em PHP, usamos o operador de concatençã
$nome = "Chapolin";
$sobrenome = "Colorado";

echo $nome.' '.$sobrenome; // Saída: Chapolin Colorado
echo "<br>";

// Para obter o comprimento da string em PHP, usamos a função strlen()
$texto = "Hello World";
echo strlen($texto); //Saída: 12
echo "<br>";

//Para substir parte partes de uma string, usamos a função str_replace
$texto = "O rato roeu a roupa do rei";
$novo_texto = str_replace("rato", "gato", $texto);

echo $novo_texto; // Saída: O gato roeu a roupa do rei 
echo "<br>";
// strtolower(): Converte uma string para letras minúsculas
// strtoupper(): Converte uma string para letras maiúsculas
$texto = "Olá, Mundo";
$texto_minusculo = strtolower($texto);
$texto_maiusculo = strtoupper($texto);

echo $texto_minusculo;
echo "<br>";

echo $texto_maiusculo;
echo "<br>";

echo $texto;
echo "<br>";

//trim(): remove espaços em branco no início e no final de uma string
$texto = " Olá, Mundo!   ";
$texto_sem_espaco = trim($texto);
echo  $texto_sem_espaco; //Saída: Olá, Mundo!
echo "<br>";

// strops(): Encontra a posição da primeira ocorrência de uma substring em uma string
$texto = "o rato roeu a roupa do rei";
$posicao = strpos($texto, "rato"); // Saída: 2 (posição da primeira letra da palavra)
echo $posicao;
echo "<br>";

// strrev(): Inverte uma string
$texto = "Socorram-me subi no onibus em Marrocos";
$texto_invertido = strrev($texto);
echo $texto_invertido;
?>