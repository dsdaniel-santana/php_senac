<?php

class Cliente {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}


abstract class Conta {
    protected $numero;
    protected $saldo;

    
    public function __construct($numero, $saldo)
    {
        $this->numero - $numero;
        $this->saldo - $saldo;        
    }

    public function sacar($valorSaque) {
        if ($this->saldo >= $valorSaque && $valorSaque > 0) {
            $this->saldo -= $valorSaque;
            return true;
        }

        return false;
    }

    public function depositar($valorDeposito) {
        if ($valorDeposito > 0) {
            $this->saldo += $valorDeposito;
            return true;
        }

        return false;
    }

    public function transferir($valorTransferencia, $contaDestino) {
        if ($this->sacar($valorTransferencia)) {
            $contaDestino->depositar($valorTransferencia);
            return true;
        }

        return false;
    }



}

class ContaCorrente extends Conta {
    public $limiteChequeEspecial;

    public function __construct($cliente, $numero, $saldo, $limiteChequeEspecial) {
        parent::__construct($cliente, $numero, $saldo);
        $this->limiteChequeEspecial = $limiteChequeEspecial;
    }

    public function sacar($valorSaque) {
        $valorLimiteEspecial = $this->saldo + $this->limiteChequeEspecial;

        if ($valorSaque <= $valorLimiteEspecial) {
            return parent::sacar($valorSaque);
        }

        return false;
    }
}

class ContaPoupanca extends Conta {
    public $taxaRendimento;

    public function __construct($cliente, $numero, $saldo, $taxaRendimento) {
        parent::__construct($cliente, $numero, $saldo);
        $this->taxaRendimento = $taxaRendimento;
    }

    public function aplicarRendimento() {
        $this->saldo += $this->saldo * $this->taxaRendimento;
    }
}




/*
<?php



// Exemplo de uso:
// Definindo a classe Cliente


?>


*/



/*
<?php

class Conta {
    public $cliente;
    public $numero;
    public $saldo;

    public function __construct($cliente, $numero, $saldo) {
        $this->cliente = $cliente;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    
    public function __toString() {
        return "Numero: {$this->numero} - Saldo: {$this->saldo} - Cliente: {$this->cliente->nome}";
    }
}

// Exemplo de uso:
// Definindo a classe Cliente
class Cliente {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}

// Criando um cliente e uma conta para o cliente
$cliente = new Cliente("João");
$conta = new Conta($cliente, "123456", 1000);

// Testando os métodos da classe Conta
echo "Saldo inicial: " . $conta->saldo . "<br>";
$conta->depositar(500);
echo "Saldo após depósito: " . $conta->saldo . "<br>";
$conta->sacar(300);
echo "Saldo após saque: " . $conta->saldo . "<br>";

// Exibindo informações da conta
echo $conta;
?>



*/


/*
class Conta {
    constructor(cliente, numero, saldo) {
        this.cliente = cliente; não incluso cliente
        this.numero = numero;
        this.saldo = saldo;
    }
-------------------------------------------------------------------
    sacar(valorSaque) {
        if (this.saldo >= valorSaque && valorSaque > 0) {
            this.saldo -= valorSaque;
            return true;
        }

        return false;
    }

    depositar(valorDeposito) {
        if (valorDeposito > 0) {
            this.saldo += valorDeposito;
            return true;
        }

        return false;
    }

    transferir(valorTransferencia, contaDestino) {
        if (this.sacar(valorTransferencia)) {
            contaDestino.depositar(valorTransferencia)
            return true;
        }

        return false;
    }

    toString() {
        return `Numero: ${this.numero} - Saldo: ${this.saldo} - Cliente: ${this.cliente.nome}`
    }
}

*/
?>