<html>
	
	<form method="post">
		
		<input type="text" name="input" autofocus />
		<input type="submit" value="cerca" />
		
	</form>
	
</html>





<?php

	echo "In serisci un numero da 1 a 10<br />";

	if (isset($_POST["input"])) {
		
		$input=$_POST["input"];
		
		$out = $input*$input;
		
		echo $out;
		
	}


?>
