<?php
	
	class Correntista {
		private $titular;
		private $codigo;
		private $saldoConta;
		private $saldoLimite;
	}
		public function __construct($titular,$codigo,$saldoConta,$saldoLimite) {
			$this->titular = $titular;
			$this->codigo = $codigo;
			$this->saldoConta = $saldoConta;
			$this->saldoLimite = $saldoLimite;
		}
		
	echo "Nome do Titular: ".$this ->titular()."<br>";
    echo "Código da conta: ".$this ->codigo()."<br>";
    echo "Saldo Conta: ".$this ->saldoConta();
    echo "Saldo Limite da conta: ".$this ->saldoLimite();
?>