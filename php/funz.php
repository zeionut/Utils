<?php

	//creazione di una funzione

	function increUno($var) {
	
			$var++;

		return $var;	

	}

	function ribString($var) {
	
			$let=strlen($var);

			echo $var;

			echo "<br />";	

			echo $let;

			echo "<br />";	
	
			for ($i=$let-1; $i>=0; $i--) {

				echo $var[$i];
	
			}
		return $var;	

	}

	$name="clementoni";
	
	$num=6;

	echo "<br />";

	echo increUno($num);

	echo "<br />";

	ribString($name);
?>
