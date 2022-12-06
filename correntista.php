<?php 
	
	class Correntista {
	
	var $titular = ""; // nome do correntista
	var $codigo = ""; // número da conta
	var $saldoConta = ""; // saldo da conta
	var $saldoLimite = ""; // saldo limite da conta
	var $valor = ""; // valores a depositar

	}

	// cria conta: O valor padrão dá conta criada será de: $0.0 é o limite de $100.00:
	function criaConta($titular,$codigo,$saldoConta = 0, $saldoLimite = 100.00) {

		function set_titular($titular) {
			$this->titular = $titular;		
		}
	
		function set_codigo($codigo) {
			$this->codigo = $codigo;		
		}
    
    	function get_codigo() {
			return->set_codigo;
		}

		function get_titular() {
			return->set_titular;
		}

		function get_saldoConta() {
			return->set_saldoConta;
		}

		function get_saldoLimite() {
			return->set_saldoLimite;
		}

		// faz depósito através do código da conta:
		function deposito($codigo, $valor) {

    	// verificando se a conta existe:
        if ($this -> codigo == $codigo) {
        
        // incrementa o deposito ao saldo da conta:
        $this -> saldoConta = $this -> saldoConta + $valor;
        echo "O depósito foi efetuado com sucesso!";
    	}
    	else
        // conta errada:
        echo "Conta errada!";


    // fazendo o saque tendo como parâmetro o numero da conta(código):
		function saque($codigo, $valor) {
    
    // verificando se a conta existe:
    if ($this -> codigo == $codigo) {

        // verificando se o saldo é suficiente:
        if ($valor > $this -> valor) {  
            
            echo "Saldo insuficiente!!!";
        
        }  
        else
        {
            // reduzindo o valor sacado:
            $this -> valor = $this -> valor - $valor;
            echo "Saque efetuado com sucesso!";
        }
    }
    else
        // conta errada:
        echo "Conta errada!";
}

?>