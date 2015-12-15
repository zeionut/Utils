<html>
	
	<form method="post">
		
		<input type="text" name="cibo" />
		<input type="submit" value="cerca" />
		
	</form>
	
</html>





<?php

	include "databaseCibi.php";
	
	if (isset($_POST["cibo"])) {
	
		$cibo=$_POST["cibo"];
		
		if (isset($cibieingredienti[$cibo])) {
		
			echo $cibieingredienti[$cibo];
		
		}
	
		elseif ($cibo == "") {
	
		}
	
		else {
		
			echo "Chiave $cibo inesistente...";
		
		}
	}
	

?>
