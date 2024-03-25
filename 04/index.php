<?php
// FLOATS E BOOLEANOS

// NUMEROS DECIMAIS(Floats)
$altura = 1.78;
$peso = 76;
echo "Altura: $altura metros - Peso $peso quilogramas <br>";

// Operações com floats
$precoProduto = 19.99;
$quantidade = 3;

$total = $precoProduto * $quantidade;
echo "Total da Compra de $quantidade itens do produto que custa: R$ $precoProduto valor total: R$ $total . <br>";

echo "<hr>";
// booleans
$temIdade = true;
$temCartao = false;

$podeEntrar = $temIdade && $temCartao;
echo "Pode Entrar na festa?<br>" . ($podeEntrar? " Sim<br>" : "Não <br>"); // opeador lógico AND

//esta seria uma outra opçao para a variavel $podeEntrar utlizando IF
// if ($temIdade && $temCartao){
//    $podeEntrar = true;
//}
#

$temPassaporte = true;
$temVisto = true;

$podeViajar = $temPassaporte || $temVisto; // Operador lógico OR
echo "Pode viajar para exterior: " . ($podeViajar? "Sim <br>": "Não <br>"); 

//echo "Pode viajar? <br>" . ($temPassaporte? "Sim" : "Não <br>"); 

#
$semCnh = true;
$podeDirigir = !$semCnh;
echo "Pode Dirigir: " . ($podeDirigir? "Sim<br>" : "Não<br>");
#

$ehMaior = 5>7;
echo "5 é maior do que 7? :" . ($ehMaior? "Sim<br>" : "Não<br>");

$ehMaior = 7>5;
if($ehMaior) {
    echo "Resultado pela variável <br>";
}

if (7 > 5) {
    echo "Resultado por comparação lógica <br>";
}

if (true) {
    echo "Resultado HARD CODED";
}


echo "<hr>";

?>