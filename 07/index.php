<?php
// ESTRUTURS CONDICIONAIS EM PHP

// FIRST EXAMPLE IF-ELSE
$number = 10;
if($number){
    echo "o numero é mais que 5.<br>";
} else{
    echo "o numero é menor ou igual 5.<br>";
}

// Second Example: IF-ELSEIF-ELSE
$hour = (int) date("h");
if($hour <10){
    echo "Bom dia <br>";
    
} elseif ($hour <19){
    echo "boa tarde <br>";
} else {
    echo "boa noite <br>";
}

//THIRD EXAMPLE: operador ternario
$age = 18;
$message = ($age >= 18) ? "Maior de idade" : "Menor de idade";
echo "Mensagem: $message <br>";

// exemplo 4: Swirch-Case
$weekDays = date("D");
switch($weekDays){
    case "Mon":
        echo "Hoje é segunda-feira. <br>";
        break;
    case "Tue":
        echo "Hoje é terça-feira. <br>";
        break;
    case "Wed":
        echo "Hoje é quarta-feira. <br>";
        break;
    case "Thu":
        echo "Hoje é quinta-feira. <br>";
        break;
    case "Fri":
        echo "Hoje é sexta-feira. <br>";
        break;
    case "Sat":
        echo "Hoje é sábado. <br>";
        break;
    case "Sun":
        echo "Hoje é domingo. <br>";
        break;
    default:
        echo "Erro ao obter o dia da semana. <br>";
}


?>