<?php


// Definição da classe abstrata Jogador 
 abstract class Jogador {
    //Atributos protegidos para encapsulamento
    private $nome;
    private $score;
    private $defesa;
    private $ataque;


}

class Cassio extends Jogador{

}

// Não é possível instanciar um objeto a partir de uma classe abstrata
// $jogador1 = new Jogador();

$cassio = new Cassio();

?>