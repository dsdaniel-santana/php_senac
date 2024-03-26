<?php
// INTRODUÇÃO  A ARRAYS EM PHP

// DEFINIÇÃO DE ARRAYS
$fruits = array("apple", "banana", "orange", "strawberry");
$numbers = [1, 2, 3, 4, 5];
$students = array("John" => 18, "Mary" => 20, "Peter" => 19);

//Acessando elementos do array
echo "A segunda fruta é: " . $fruits[1] . "<br>";
echo "A terceira fruta é: " . $fruits[2] . "<br>";
echo "John tem: " . $students["John"] . "<br>";

// Alterar ELementos do Array
$frutis [0] = "pear";
$numbers[4] = 10;
$students["mary"] = 11;

// Adcionando Elementos ao array
$fruits[] = "Pineapple";
$numbers [] = 6;
$students["Ana"] = 22;

// Percorrendo um Array com o Foreach
echo "Lista de frutas: ";
foreach($fruits as $fruit){
    echo $fruit . " " ;

}
echo "<br>";

echo "Lista de numeros: ";
foreach($numbers as $number){
    echo $number ;
}
echo "<br>";

echo "List of Students: <br> ";
foreach($students as $name => $age){
    echo $name . " is " . $age . " years old. ";
    echo "<br>";
}

// Funcções úteis para Arrays

echo "Number of elements in the fruit array: " . count($fruits) . "<br>";
echo "Index of the 'orange' swipe in the array: " . array_search("orange", $fruits) . "<br>";
echo "Última fruta do array: " . end($fruits) . "<br>";
echo "Array de frutas antes de reverter: ";
print_r($fruits);
echo "<br>";
echo "Array de frutas depois de reverter: ";
$frutis_rev = array_reverse($fruits);
print_r($frutis_rev);


// comando para exibir dados do array
// var_dump($students);


?>