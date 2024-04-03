<?php
class Calculator{
    public static function somar ($a, $b){
        return $a + $b;
    }

    public static function multiplicar($a, $b){
        return $a * $b;
    }
   
}


echo Calculator::multiplicar(6, 5);
?>