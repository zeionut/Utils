<html>
	
	<form method="POST">
		
		<input type="number" name="input1" />
		
		<input type="number" name="input2" />
		
		<br />
		
		<br />
		
		<input type="submit" value="Operazioni" />
		
	</form>
	
</html>

<?php

	include "classNum.php";
	

	if (isset($_POST["input1"]) and isset($_POST["input2"])) {
		
		$num1 = new Num(null);
		$num2 = new Num(null);
		
		$num1 -> setN($_POST["input1"]);
		$num2 -> setN($_POST["input2"]);
		
		echo "Dato : ";
		$num1->stampN();
		echo "   ";
		echo "Dato : ";
		$num2->stampN();
		echo "<br /><br />";
		
		$num1->somma($num2)->stampN();
		
		$num3 = $num1->somma($num2);
		
		echo "<br /><br />";
		
		$num3->stampN();

	}


?>
