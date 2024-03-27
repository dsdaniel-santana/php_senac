<?php
/*
    Exercício 1 - Acesso a Elementos:
    Crie um array contendo os dias da semana. Em seguida, exiba o terceiro dia da semana.

    Exercício 2 - Alteração de Elementos:
    Crie um array contendo os meses do ano. Altere o valor do último elemento para "Dezembro".

    Exercício 3 - Adição de Elementos:
    Crie um array vazio. Adicione os números de 1 a 5 ao array. Depois, adicione o número 6 ao final do array.

    Exercício 4 - Percorrendo um Array:
    Crie um array contendo os nomes dos meses do ano. Utilize um loop foreach para exibir todos os meses.

    Exercício 5 - Contagem de Elementos:
    Crie um array contendo os dias da semana. Conte quantos elementos o array possui e exiba o resultado.

    Exercício 6 - Busca de Elemento:
    Crie um array contendo os dias da semana. Utilize a função array_search() para encontrar a posição do dia "Sábado" no array e exiba o resultado.

    Exercício 7 - Reversão de Array:
    Crie um array contendo os números de 1 a 10. Inverta a ordem dos elementos do array e exiba o resultado.



*/

// 1
$days = ["mon", "tue", "wed", "thu", "fru", "sat", "sun"];
echo "O terceiro dia da semana é: " . $days[2];
echo "<br>";

// 2 
$months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
$months [count($months) - 1] = "Dezembro";
echo "Último mês do ano alterado para: " . end($months);

echo "<br>";

// 3
$vazio = [];
$vazio  = [1, 2, 3, 4, 5];
print_r($vazio);
echo "<br>";
$vazio [] = 6;
print_r($vazio);

// OUTRA FORMA
//$array_numeros = [];
//for($i = 1; $i <= 5; $i++) {
//    $array_numeros[] = $i;
//}
//$array_numeros[] = 6;
//echo "Array de números: ";
//print_r($array_numeros);
//echo "<br>";

echo "<br>";


//4 
$months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
echo "Lista de meses: ";
foreach($months as $month){
    echo $month . " " ;
}

echo "<br>";

//Exercício 5 - Contagem de Elementos:
// Crie um array contendo os dias da semana. 
//Conte quantos elementos o array possui e exiba o resultado.
$days = ["mon", "tue", "wed", "thu", "fru", "sat", "sun"];
echo "A contagem dos dias da semana é: " . count($days);

echo "<br>";

//Exercício 6 - Busca de Elemento:
//Crie um array contendo os dias da semana. 
//Utilize a função array_search() para encontrar a posição do dia "Sábado" no array e exiba o resultado.
$dayss = ["mon", "tue", "wed", "thu", "fru", "sat", "sun"];
echo "Selecionando o dia: " . array_search("sat", $dayss);

echo "<br>";
//Exercício 7 - Reversão de Array:
// Crie um array contendo os números de 1 a 10. 
//Inverta a ordem dos elementos do array e exiba o resultado.
$num = [1,2,3,4,5,6,7,8,9,10];
$numRev = array_reverse($num);
print_r($numRev);

# 7 Solução Normal
/*$numeros_de_1_a_10 = range(1, 10);
$numeros_de_1_a_10_reverso = array_reverse($numeros_de_1_a_10);
echo "Numeros revertidos: ";
print_r($numeros_de_1_a_10_reverso);*/


?>