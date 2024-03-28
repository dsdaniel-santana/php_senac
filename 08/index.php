<?php
// ESTRUTURAS DE REPETIÇÃO EM PHP

// EXEMPLO 1: FOR (INICIAR UMA VARIÁVEL ; TESTAR UMA CONDIÇÃO - INCREMENTAR/DECREMENTAR)
echo "Exemplo 1: FOR <br>";
for ($i = 1; $i <=5; $i++ ){
    echo "Numero $i <br>";

}
echo "<br>";

// Exemplo 2 While
echo "Exemplo 2: WHILE";

$cont = 1;
while($cont <= 5){
    echo "Numero $cont <br>";
    $cont++;
}
echo "<br>";

//EXEMPLO 3: DO-WHILE
echo "Exemplo 3: DO-WHILE <br>";
$contDo = 1;
do{
    echo "numero: $contDo <br>";
    $contDo++;
} while ($contDo <= 5);

echo "<br>";

// Exemplo 4: FOREACH
echo "Exemplo 4: FOREACH <br>";
$array_vogais = ["a", "e", "i", "o", "u"];
foreach($array_vogais as $vogal) {
    echo "Vogal: $vogal <br>";
}


?>