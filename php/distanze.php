<?php

	include "distanzeDB.php";
	
	$listaPartenza=array_keys($distanze);
	$listaDestinazione=array();
	
	$partenza="";
	
	if (isset($_POST["partenza"])) {		
		
			//trova le città destinazione in base alla città specificata
			
		if (isset($distanze[$_POST["partenza"]])) { 
			//controllo dell'esistenza della città
			
			$partenza=$_POST["partenza"];
			
				$listaDestinazione=array_keys($distanze[$partenza]);
			
		}
		
	}
	
	$destinazione="";
	
	if (isset($_POST["destinazione"])) {		
			
		if (isset($distanze[$partenza][$_POST["destinazione"]])) { 
			//controllo dell'esistenza della città
			
			$destinazione=$_POST["destinazione"];
			
		}
		
	}

	$distanza="sconoscriuta";
	
	if ($partenza != "" && $destinazione != "") {
		//città di destinazione e partenza sono valide
		
		$distanza=$distanze[$partenza][$destinazione];
		
	}

?>

<html>

	<body>
	
		<form method="POST">
			
			<?php if ($partenza == "" && $destinazione == "") : ?>
			
				Seleziona la citt&agrave; di partenza:
		
				<select name="partenza">
					
					<?php foreach ($listaPartenza as $c) : ?>
					
						<option value="<?php echo $c; ?>">
						
							<?php echo $c; ?>
							
						</option>
						
					
					<?php endforeach; ?>
					
				</select>
				
			<?php else : ?>
			
				Citt&agrave; di partenza : <?php echo $partenza; ?>
				
				<br />
				
				<input type="hidden" value="<?php echo $partenza; ?>" name="partenza"></input>
					
			<?php endif ; ?>
			
			<?php if ($partenza!="" && $destinazione=="") : ?>
			
				Seleziona la citt&agrave; di destinazione:
				
				<select name="destinazione">				
					
					<?php foreach ($listaDestinazione as $c) : ?>
					
						<option value="<?php echo $c; ?>">
						
							<?php echo $c; ?>
							
						</option>
						
					
					<?php endforeach; ?>					
				
				</select>
				
			<?php elseif ($partenza!="" && $destinazione!="") : ?>
			
				Citt&agrave; di destinazione : <?php echo $destinazione; ?>
				
				<br />
				
				<input type="hidden" value="<?php echo $destinazione; ?>" name="destinazione"></input>
				
			<?php endif ; ?>
			
			<?php if ($partenza=="" || $destinazione=="") : ?>
			
				<input type="submit" value="Next"></input>
			
			<?php endif ; ?>
			
			<br />
		
		</form>
		
		<?php if ($partenza!="" && $destinazione!="") : ?>
		
			La distanza tra partenza: <?php echo $partenza; ?> e di derstinazione: <?php echo $destinazione; ?> 
			&egrave; <?php echo $distanza; ?>
			
		<?php endif ; ?>
	
	</body>

</html>
