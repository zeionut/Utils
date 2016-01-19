<?php

	include "prenotazioniDB.php";

?>

<html>

	<body>
			
			<table border="1">
					
				<?php foreach ($posti as $fila=>$elm) : ?>
				
					<tr>
							
						<td>
						
							<?php echo $fila ?>
						
						</td>
						
						<?php for ($i=1; $i<=10; $i++) : ?>
						
							<td>
								
								<?php if (isset($posti[$fila][$i])) : ?>
								
									<?php if ($posti[$fila][$i] == 1) : ?>
								
										X
									
									<?php endif ; ?>
								
								<? else : ?>
										
									0
							
							<?php endif ; ?>
							
							</td>
							
						<?php endfor ; ?>					
					
					</tr>				
				
				<?php endforeach ; ?>
			
			
			
			</table>
	
	
	</body>

</html>
