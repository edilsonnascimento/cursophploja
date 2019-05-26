<?php

	function somaNumeros($array_numeros){
	    $soma = 0;
		for($i = 0; $i < sizeof($array_numeros); $i++){
			$soma += $array_numeros[$i];
		}
		return $soma;
	}

	$numeros = array(10,10,10,10,10);
    
	echo somaNumeros($numeros);

	$total = 10 + 20 / 4;
	echo $total;

?>