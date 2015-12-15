<?php

	$testo="";

	if (isset($_POST["testo"])) {
		
		$testo=$_POST["testo"];
		
		$arTest=explode(" ", $testo);
		
		$quantPar = count(explode(" ", $testo));
		
		echo "Questo testo:<br />";
		
		echo $testo;
		
		echo "<br />";
		
		echo "<br />";
		
		echo "contiene $quantPar parole";
		
		echo "<br />";
		
		/*
		echo "Stampo le parole numerandole:<br />";
		
		foreach ($arTest as $i=>$par) {
		
			echo $i."- ".$par;
			echo "<br />";
		
		}
		*/
		
		echo "<br />";
		
		$frequePar=[];
		
		foreach ($arTest as $par) {
			
			if (isset($frequePar[$par])) {
				
				$frequePar[$par]++;
				
			}
			
			else {
				
				$frequePar[$par]=1;
				
			}
			
		}
		
		echo "<br />";
		
		arsort($frequePar);
		
		foreach ($frequePar as $i=>$par) {
			
			if ($par>2) {
				
				echo "$par - $i";
				echo "<br />";
				
			}

		}
		
	}
	

	
?>
