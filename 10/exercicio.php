<?php

class Vehicles {
    public $brands;
    public $models;
    public $years;
    public $ligado;

    public function __construct($brands, $models, $years, $areOn) {
        $this->brands = $brands;
        $this->models = $models;
        $this->years = $years;
        $this->ligado  = false;
    }

    public function ligar($areOn = true){
        return "o veiculo esta ligado";
    }

    public function desligar($areOn = false){
        return "o veiculo esta desligado";
    }

}

$meuCarro = new Vehicles("chevete", "chevrolet", 1986);
echo "$meuCarro->brands, $meuCarro->models, $meuCarro->years";


/*
1 - Defina uma classe chamada Veiculo com as seguintes propriedades:
- marca
- modelo
- ano
- ligado (indicando se o veículo está ligado ou desligado)

2 - Implemente um método construtor na classe Veiculo que inicialize 
as propriedades marca, modelo e ano. O método construtor também deve definir a 
propriedade "ligado" como false por padrão.
3 - Implementar métodos na classe Veículo:
- ligar(): Este método deve alterar a propriedade "ligado" pra true,
 se o veículo estiver desligado.
- desligar(): Este método deve alterar a propriedade "ligado" para false, se o veículo estiver ligado.
- exibirDados(): Este método deve exibir as informações do veículo(marca, modelo, ano, e status de ligado ou desligado)
*/

// Exibindo dados do veículo
$meuCarro->exibirDados(); // Marca: Toyota, Modelo: Corolla, Ano: 2022, Ligado: false

// Ligando o veículo
$meuCarro->ligar();

// Exibindo dados atualizados
$meuCarro->exibirDados(); // Marca: Toyota, Modelo: Corolla, Ano: 2022, Ligado: true

// Desliga o veículo
$meuCarro->ligar();

// Exibindo dados atualizados
$meuCarro->exibirDados(); // Marca: Toyota, Modelo: Corolla, Ano: 2022, Ligado: false

?>