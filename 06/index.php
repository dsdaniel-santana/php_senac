<?php
// VERIFICAÇÃO DE TIPOS DE DADOS E PALAVRAS RESERVADAS

// Verificação de Tipo de Dados
$number = 10;
$string = "Hello World";
$booleano = true;
$array =[1,2,3]; 


// no exemplo abaixo foi colocado aspas simples para eveitar a concatenação
echo 'Tipo de dado da variável $number : ' . gettype($number) . "<br>";
echo 'Tipo de dado da variável $string : ' . gettype($string) . "<br>";
echo 'Tipo de dado da variável $booleano : ' . gettype($booleano) . "<br>";
echo 'Tipo de dado da variável $array : ' . gettype($array) . "<br>";

// Verificação de Tipo de Dados com Funções
echo 'Verificação se $numero é do tipo int : ' . (is_int($number)? "Sim" : "Não") . "<br>";
echo 'Verificação se $string é do tipo string: ' . (is_string($string)? "Sim" : "Não") . "<br>";
echo 'Verificação se $booleano é do tipo boolean: ' . (is_bool($booleano)? "Sim" : "Não") . "<br>";
echo 'Verificação se $array é do tipo array: ' . (is_array($array)? "Sim" : "Não") . "<br>";

// Conversão de tipos de dados
$numberString = "456";
$convertNumber = (int)$numberString;
echo "Número convertido  de string para int $convertNumber <br>";

// Demais conversões 
$n = 456;
$sN = (string)$n;
echo "Número convertido  de int para string $sN <br>";

$boolString = "true";
$boolConvert = (bool)$boolString;
echo "Booleano  convertido  de string para booleano $boolConvert <br>";

$arryStr = "5,2,9";
$arrayConvert = explode(",", $arryStr);
echo "Numeros em uma string antes da conversão : $arryStr <br> ";
echo "Array convertido de string para array <br> ";
print_r($arrayConvert);
echo "<br>";

# EXEMPLO ADCIONAL CONVERSÃO PARA ARRAY
$hour = "20:02:56"; // hora lida de um log
$arrayHoraMinuto = explode(":", $hour);
echo "Evento ocorreu as: $arrayHoraMinuto[0] horas e $arrayHoraMinuto[1] minutos e $arrayHoraMinuto[2] segundos.  ";
echo "<br>";

# EXEMPLO ADCIONAL 2 - CONVERSÃO PARA ARRAY (os 3 patetas e dama)
$contact = "Chaves-Chapolin-Kiko-Chiquinha";
echo "A lista de contatos é: $contact";
echo "<br>";
$arrayContact = explode("-", $contact);
print_r($arrayContact);

?>