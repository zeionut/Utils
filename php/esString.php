<html>
	
	<form method="POST">
		
		<input type="text" name="input1" />
		<input type="number" name="input2" />
		
		<br />
		
		<br />
		
		<input type="submit" value="Ribalta" />
		
		<?php
		
			include "classString.php";
		
			if (isset($_POST["input1"]) && isset($_POST["input2"])) {
				
				$string1 = new MyString($_POST["input1"]);
				
				echo "<br /><br />";
		
				echo "String : ";
				
				$string1->stampString();
				
				echo "  ";
				
				$num1 = $_POST["input2"];
				
				echo "Numero : $num1";
				
				echo "<br /><br />";
				
				
				
			}
			
		?>
		
	</form>
	
</html>

<?php
	
	if (isset($_POST["input1"]) && isset($_POST["input2"])) {
		
		$string2=$string1->ribStringa2();
		
		$string2->stampString();
		
		echo "<br />";
		
		if (strlen($string1->getString()) > $num1) {
		
			$arr = divArr($string1, $num1);
		
		
		}
		
		else {
			
			echo "Stringa troppo corta rispetto al numero";
			
		}		

	}

?>
