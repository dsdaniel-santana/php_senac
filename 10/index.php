<?php
class Car {
    //Propriedades
    public $brand;
    public $model;
    public $year;

    //Método Construtor
    public function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }   

    //Função - comportamento - Método
    public function engineOn (){
        echo " the car is running <br> ";
    }

}

$myCar = new Car("Ford", "Ranger", 2018);
echo "$myCar->brand, $myCar->model, $myCar->year";
$myCar-> engineOn();
?>

