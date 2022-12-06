<?php
	
	include ("correntista.php");

	$correntista1 = new Correntista();
	$correntista2 = new Correntista();
	
	echo "Nome do Titular: ".$this ->titular."<br>";
    echo "Código da conta: ".$this ->codigo."<br>";
    echo "Saldo: ".$this ->saldoConta;
?>