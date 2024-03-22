<?php

//Exercício 1 - Concatenação de Strings:
//Crie duas variáveis contendo o nome e a profissão de uma pessoa. Em seguida, concatene as duas variáveis para formar uma frase que descreva a pessoa. Por exemplo, se o nome for "Ana" e a profissão for "engenheira", a frase resultante será "Ana é engenheira".
   
$nome = "Daniel";
$profissao = "Analyst";
$frase = $nome. ' ' .$profissao;
echo "$frase . <br>";

//Exercício 2 - Comprimento de uma String:
//Crie uma variável contendo uma senha. Em seguida, verifique se a senha tem pelo menos 8 caracteres de comprimento. 
//Se tiver, exiba uma mensagem indicando que a senha é válida; caso contrário, exiba uma mensagem de erro.

$senha = "Root";
 
if (strlen($senha) >=8){
    echo "Senha correta. <br>"; 
} else{
    echo "Senha deve conter 8 caracteres <br>";
}

// Exercício 3 - Substituição de Caracteres:
// Crie uma variável contendo uma frase. 
//Substitua todas as ocorrências da palavra "cachorro" por "gato" na frase e 
//exiba o resultado.
$phrase = "O dog latiu";
$newPhrase = str_replace("dog", "cat", $phrase);
echo $newPhrase. "<br>";

//Exercício 4 - Conversão de Case:
//Crie uma variável contendo uma palavra. 
//Converta a palavra para letras minúsculas e depois para letras maiúsculas. 
//Exiba ambas as versões da palavra.
$frase = "ExemPLO";
$texto_min = strtolower($frase);
$texto_mai = strtoupper($frase);

echo "Palavras minúsculas: $texto_min <br>";
echo "Palavras maiúsculas: $texto_mai <br>";

// Exercício 5 - Remoção de Espaços em Branco:
// Crie uma variável contendo uma URL. 
// Remova todos os espaços em branco no início e no final da URL e exiba o resultado.
$url = "www .chaves .br";
$urlSemEsp = trim($url);
echo "$urlSemEsp <br>";

// Exercício 6 - Posição da Primeira Ocorrência:
// Crie uma variável contendo uma lista de compras. 
//Use a função strpos() para encontrar a posição da primeira ocorrência do item "leite" na lista de compras e exiba a posição encontrada 6.
 
$listaCompras = "Arroz, feirjão, Batata";
$posiccao_batata = strpos ($listaCompras, "Batata");
echo "A posição do item:'Batata' na lista de compras é: $posiccao_batata <br>";

// Exercício 7 - Inversão de uma String:
// Crie uma variável contendo uma palavra. 
//Inverta a palavra e exiba o resultado.
$word = "abcd1234";
$invertWord = strrev($palavra);
echo $invertWord;


?>