<html>
		<?php
			
			include "classArr.php";
			
			$arr=new Arr(null);
			
			/*if (isset($_POST["input1"]) and isset($_POST["input2"])) {
		
				$num1 = new Num($_POST["input1"]);
				$num2 = new Num($_POST["input2"]);
					
				//$num1 -> setN($_POST["input1"]);
				//$num2 -> setN($_POST["input2"]);
		
			}*/
				
		?>
	
	<form method="POST">
		
		<?php/*
			
			if (isset($_POST["cancella"])) {
				
		?>
			
				<input type="number" name="input1" value="" />
		
				<input type="number" name="input2" value="" />
				
		<?php
				
			}
			
			else {
				
		?>
		
				<input type="number" name="input1" value="<?php echo $num1->stampN(); ?>" />
		
				<input type="number" name="input2" value="<?php echo $num2->stampN(); ?>" />
				
		<?php
				
			}
			
		*/?>
		
		<br />
		
		<br />
		
		<input type="submit" value="Opera" name="opera"/>
		<!--<input type="submit" value="Sconta" />-->
		
		<select name="operazioni">
			
			<option value="somma" >somma</option>
			<option value="sconto" >sconto</option>
			
		</select>
		
		<input type="submit" name="cancella" value="Ripristina campi" />
		
		<br />
		
		<br />
		
		<?php
		
			if (isset($_POST["input1"]) and isset($_POST["input2"]) and isset($_POST["opera"])) {
		
				echo "Dato : ";
				$num1->stampN();
				
				echo "   ";
				
				echo "Dato : ";
				$num2->stampN();
				
				echo "<br /><br />";
				
			}
			
		?>
		
	</form>
	
</html>

<?php
	
	if (isset($_POST["operazioni"])) {
		
		if ($_POST["operazioni"]=="somma" and isset($_POST["opera"])) {
			
			//$num1->somma($num2)->stampN();
			
			$num3 = $num1->somma($num2);
			
			//echo "<br /><br />";
			
			$num3->stampN();
			
		}
		
		elseif ($_POST["operazioni"]=="sconto" and isset($_POST["opera"])) {
			
			$num3 = $num1->sconto($num2);
			
			$num3->stampN();
			
		}

	}


?>
