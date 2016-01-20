<?php

	include "classPrenotazioni.php";

	$cinema = queryCinema(16);
	
	$nFila="";
	$nPosto="";
	
	if (isset($_POST["nFila"]) && isset($_POST["nPosto"]) && isset($_POST["prenota"])) {
		
		$nFila=$_POST["nFila"];
		$nPosto=$_POST["nPosto"];
		
		$risultato=$cinema->prenota($nFila,$nPosto);
		
	}
	
	if (isset($_POST["nFila"]) && isset($_POST["nPosto"]) && isset($_POST["disdici"])) {
		
		$nFila=$_POST["nFila"];
		$nPosto=$_POST["nPosto"];
	
		$risultato=$cinema->disdici($nFila,$nPosto);
		
	}

?>

<html>

	<body>
			
			<table border="2" align="center">
					
				<?php foreach ($cinema->getFile() as $fila) : ?>
				
					<tr align="center" height="100">
						
						<?php foreach($cinema->getPostiNomi() as $posto) : ?>
						
							<?php if($cinema->isPrenotato($fila,$posto) == 0) : ?>
							
								<td width="50" bgcolor="green"></td>
							
							<?php else : ?>
							
								<td width="50" bgcolor="red"></td>
								
							<?php endif ; ?>
						
						<?php endforeach ; ?>
							
					</tr>
					
				<?php endforeach ; ?>
			
			</table>
			
			<br />
			
			<br />
			
			<form method="POST">
				
				Fila: 
			
				<select name="nFila">
					
					<?php foreach($cinema->getFile() as $fila): ?>
				
					<option value="<?php echo $fila ; ?>"><?php echo $fila ; ?></option>
					
					<?php endforeach ; ?>
				
				</select>
				
				Numero posto: 
				
				<select name="nPosto">
					
					<?php foreach($cinema->getPostiNomi() as $posto): ?>
				
					<option value="<?php echo $posto ; ?>"><?php echo $posto ; ?></option>
					
					<?php endforeach ; ?>
				
				</select>
				
				<input type="submit" value="Prenota" name="prenota">
				<input type="submit" value="Disdici" name="disdici">
			
			</form>
			
			<?php if(isset($_POST["nFila"]) && isset($_POST["nPosto"]) && isset($_POST["prenota"])) : ?>
			
				<?php if($risultato == 0) : ?>
				
					<p><h1>Posto PRENOTATO!</h1></p>
					
				<? elseif($risultato == 1)  :?>
					
					<p><h1>Posto OCCUPATO!</h1></p>
					
				<? else  :?>
					
				<?php endif ; ?>
			
			<?php endif ; ?>
			
			<?php if(isset($_POST["nFila"]) && isset($_POST["nPosto"]) && isset($_POST["disdici"])) : ?>
			
					<?php if($risultato == 1) : ?>
				
					<p><h1>Prenotazione DISDETTA!</h1></p>
					
				<? elseif($risultato == 0)  :?>
					
					<p><h1>Posto LIBERO!</h1></p>
					
				<? else  :?>
					
				<?php endif ; ?>
			
			<?php endif ; ?>
			
	</body>

</html>
