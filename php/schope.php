<?php

	function incrementa($valore) {
		$valore++;
		
		return $valore;
	}	

	function incrementaDiretto(&$valore) {
		$valore++;
	}
	
	$totale=8;
	
	incrementa($totale);
	
	//valore perso dato che non viente registrato il valore nella variabile
	echo $totale."<br />";
	
	incrementaDiretto($totale);
	
	//valore stampato correttamente dato che la funzione usa direttamente la variabile che elabora
	echo $totale."<br />";
	
?>
