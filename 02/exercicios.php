<?php
/*
      
   

    

    
    Exercício 6 - Posição da Primeira Ocorrência:
    Crie uma variável contendo uma lista de compras. Use a função strpos() para encontrar a posição da primeira ocorrência do item "leite" na lista de compras e exiba a posição encontrada.

    Exercício 7 - Inversão de uma String:
    Crie uma variável contendo uma palavra. Inverta a palavra e exiba o resultado.
*/
//Exercício 1 - Concatenação de Strings:
//Crie duas variáveis contendo o nome e a profissão de uma pessoa. Em seguida, concatene as duas variáveis para formar uma frase que descreva a pessoa. Por exemplo, se o nome for "Ana" e a profissão for "engenheira", a frase resultante será "Ana é engenheira".
   
$nome = "Daniel";
$profissao = "Analyst";
echo $nome. ' ' .$profissao;
echo "<br>";

//Exercício 2 - Comprimento de uma String:
//Crie uma variável contendo uma senha. Em seguida, verifique se a senha tem pelo menos 8 caracteres de comprimento. 
//Se tiver, exiba uma mensagem indicando que a senha é válida; caso contrário, exiba uma mensagem de erro.
$senha = "Root";
 
if (strlen($senha) >=8){
    echo "Senha correta" .strlen($sennha); 
} else{
    echo "Senha incorreta";
}
echo "<br>";
// Exercício 3 - Substituição de Caracteres:
// Crie uma variável contendo uma frase. 
//Substitua todas as ocorrências da palavra "cachorro" por "gato" na frase e 
//exiba o resultado.
$frase = "O dog latiu";
$newPhrase = str_replace("dog", "cat", $frase);
echo $newPhrase;
echo "<br>";

//Exercício 4 - Conversão de Case:
//Crie uma variável contendo uma palavra. 
//Converta a palavra para letras minúsculas e depois para letras maiúsculas. 
//Exiba ambas as versões da palavra.
$frase = "O dog latiu";
$texto_min = strtolower($frase);
$texto_mai = strtoupper($frase);

echo $texto_min;
echo "<br>";

echo $texto_mai;
echo "<br>";

// Exercício 5 - Remoção de Espaços em Branco:
// Crie uma variável contendo uma URL. 
// Remova todos os espaços em branco no início e no final da URL e exiba o resultado.
$url = "www .chaves .br";
$urlSemEsp = trim($url);

echo $urlSemEsp;
echo "<br>";

// 6 
$listaCompras = "Arroz, feirjão, Batata";
$posiccao_batata = strpos ($listaCompras, "Batata");

echo "<br>";


?>