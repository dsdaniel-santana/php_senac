<?php

#Encapsulamento
class Product {
    private $nome;
    private $price;
    private static $quantidadeVendia  = 0;

    public function __construct($nome, $price)
    {
        $this->nome = $nome;
        $this->price = $price;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome ($novoNome){
        if(strlen($novoNome) >= 3) {
            $this->nome = $novoNome;
        } else {
            echo "Nome do produto precisa ter 3 caracteres";
        }
    }

    public function venda(){
        self::$quantidadeVendia++;
        echo "Produto Vendido <br>";

    }

    public static function exibirQuantidadeVendida(){
        echo "Quantidade de produtos vendidos:" . self::$quantidadeVendia . "<br>";
    }
}


$product1 = new Product("Book - Php ", 29.99);
$product2 = new Product("Laptop - Ausus ", 4999.99);


echo $product1->getNome();

#exemplo utlizado para mostrar que os dados podem ser manipulados fora da variavel na class public.
// $product1->nome = "Radio";
// echo $product1->nome;
$product1->setNome("Tablet <br>" );
echo "<br>";
echo $product1->getNome();


$product1->venda();
$product2->venda();

Product::exibirQuantidadeVendida();
?>