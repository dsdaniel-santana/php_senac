<?php 

class Cliente {
    public $nome;
    public $cpf;

    public function __construct($nome, $cpf) {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }
}

abstract class Conta {
    protected $cliente;
    protected $numero;
    protected $saldo;

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

    
    public function exibirDados(){
        echo "Nome:{$this->cliente->nome} - conta:{$this->numero} - Saldo:{$this->saldo} <br>";
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
    private $limiteChequeEspecial;

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
    private $taxaRendimento;

    public function __construct($cliente, $numero, $saldo, $taxaRendimento) {
        parent::__construct($cliente, $numero, $saldo);
        $this->taxaRendimento = $taxaRendimento;
    }

    public function aplicarRendimento() {
        $this->saldo += $this->saldo * $this->taxaRendimento;
    }
}




// Criando instâncias de Cliente
$cliente1 = new Cliente("João", "123456789-00");
$cliente2 = new Cliente("Maria", "987654321-00");
echo "Dados do cliente: Nome: $cliente1->nome Cpf:$cliente1->cpf<br>" ;
echo "Dados do cliente: Nome: $cliente2->nome Cpf:$cliente2->cpf<br>" ;

// Cirando instâncias de Contas
$contaCorrente1 = new ContaCorrente($cliente1, 1001, 1500, 500);
$contaPoupanca1 = new ContaPoupanca($cliente1, 2001, 3000, 0.05);
$contaCorrente2 = new ContaCorrente($cliente2, 1002, 3000, 1000);
$contaCorrente1->exibirDados(); 
$contaPoupanca1->exibirDados();
$contaCorrente2->exibirDados();

//echo "Dados da Conta:  $contaPoupanca1->numero $contaPoupanca1->saldo $contaPoupanca1->taxaRendimento<br>";


//echo "Dados da Conta:  $contaCorrente2->numero $contaCorrente2->saldo $contaCorrente2->limiteChequeEspecial<br>";

// Realizando operações nas contas
$contaCorrente1->sacar(100);
$contaCorrente2->transferir(200, $contaPoupanca1);
$contaPoupanca1->aplicarRendimento();

echo "Dados da Conta Corrente 1: $contaCorrente1 <br>";
echo "Dados da Conta Poupança 1: $contaPoupanca1 <br>";
echo "Dados da Conta Corrente 2: $contaCorrente2 <br>";

?>