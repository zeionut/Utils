<html>
	
	<form method="POST">
		
		<input type="text" name="input1" />
		<input type="number" name="input2" />
		
		<br />
		
		<br />
		
		<input type="text" name="input3" />
		
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
		
			$arr = $string1->divArr($string1, $num1);
			
			foreach ($arr as $i=>$elm) {
				
				$arr[$i]->stampString();
				
				echo " ";
				
			}
				
			
			echo "<br />";
		
		
		}
		
		else {
			
			echo "Stringa troppo corta rispetto al numero.<br />";
			
		}	

	}
	
	if (isset($_POST["input1"]) && isset($_POST["input2"]) && isset($_POST["input3"])) {
			
		$string3 = new MyString($_POST["input3"]);
		
		$arr2 = $string1->divStr($string1, $string3);
		
		foreach ($arr2 as $i=>$elm) {
				
			$arr2[$i]->stampString();
				
			echo " ";
				
		}
		
		echo "<br />";
		
		$arr3 = $arr2;
		
		$arr3 = $string1->evidStr($string1, $string3, $arr3);
		
		foreach ($arr3 as $i=>$elm) {
				
			$arr3[$i]->stampString();
				
		}
			
	}

?>
