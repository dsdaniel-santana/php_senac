<?php

function test (){
    $a = 0;
    $a++;

    echo "$a <br>";
}

test();
test();
test();

echo "teste estático <br>";
function testeStatic(){
    static $a = 0;
    $a++;

    echo "$a <br>";

}

testeStatic();
testeStatic();
testeStatic();

?>