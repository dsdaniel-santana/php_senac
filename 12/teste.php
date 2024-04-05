<?php

class Cliente {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}

class Conta {
    public $cliente;
    public $numero;
    public $saldo;

    public function __construct($cliente, $numero, $saldo) {
        $this->cliente = $cliente;
        $this->numero = $numero;
        $this->saldo = $saldo;
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

    public function __toString() {
        return "Numero: {$this->numero} - Saldo: {$this->saldo} - Cliente: {$this->cliente->nome}";
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

// Criando um cliente
$cliente = new Cliente("Maria");

// Criando contas para o cliente
$contaCorrente = new ContaCorrente($cliente, "789012", 2000, 1000);
$contaPoupanca = new ContaPoupanca($cliente, "123456", 5000, 0.05);

// Testando os métodos das classes ContaCorrente e ContaPoupanca
echo "Saldo inicial da conta corrente: " . $contaCorrente->saldo . "<br>";
echo "Saldo inicial da conta poupança: " . $contaPoupanca->saldo . "<br>";

$contaCorrente->sacar(2500); // Tentando sacar mais do que o saldo + limite do cheque especial
echo "Saldo após tentativa de saque na conta corrente: " . $contaCorrente->saldo . "<br>";

$contaPoupanca->aplicarRendimento(); // Aplicando rendimento na conta poupança
echo "Saldo após aplicação de rendimento na conta poupança: " . $contaPoupanca->saldo . "<br>";
?>
