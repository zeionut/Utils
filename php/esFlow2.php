<html>
	
	<form method="get">
		
		<input type="number" name="input1" />
		
		<input type="number" name="input2" />
		
		<br />
		
		<br />
		
		<input type="submit" value="Operazioni" />
		
	</form>
	
</html>





<?php

	include "numberClass.php";
	
	$number = new Number();
	

	if ((isset($_GET["input1"])) and (isset($_GET["input2"]))) {
		
		$number -> setFirst($_GET["input1"]);
		$number -> setSecond($_GET["input2"]);
		
		echo "Dato: " . $number -> getFirst() . "   " . "Dato: " . $number -> getSecond() . "<br /><br />";
		
		$number -> somma();
		
		$result = $number -> getThird();
		
		echo "Esercitazione 1 somma $result<br />";
		
		echo "Esercitazione 2 precedente e successivo:";
		
		$number -> preSuc();
		
		$number -> media();
		
		$result = $number -> getFourth();		
		
		echo "Esercitazione 3 media $result<br />";
		
		echo "Esercitazione 4 calcolatrice:";
		
		$number -> calcol();
		
		echo "Esercitazione 5 aree:";
		
		$number -> aree();
		
	}
	
	else {
		
		echo "Non hai inserito nessun parametro.";
		
	}

?>
