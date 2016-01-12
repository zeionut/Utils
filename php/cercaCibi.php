<html>
	
	<form method="get">
		
		<input type="text" name="cibo" />
		<input type="submit" value="cerca" />
		
	</form>
	
</html>





<?php

	include "databaseCibi.php";
	
	if (isset($_GET["cibo"])) {
	
		$cibo=$_GET["cibo"];
		
		foreach ($cibieingredienti as $ciboo => $ingr) {
			
			$ciboStamp = strpos($cibieingredienti[$ciboo], $cibo);
			
			if ($ciboStamp !== false) { // !== invece di != è più forte non conta 0 come false
				
				echo "$ciboo<br />";
				
			}
				
		}
		
		echo "<br />";
		
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
