<?php

	include "authentication.php";
	
	session_start();
	
	if (isset($_POST["logout"])) {
		
		logout();			
		header("Location: /Utis/php/esCookie/login.php");	
		
	}

?>

<html>
	
	<body>
	
		<?php if(isLogin()) : ?>
		
			Questa &egrave; una pagina privata di <?php echo $_SESSION["login_user"] ?>
			
		<?php else :?>
		
			<?php header("Location: /Utis/php/esCookie/login.php"); ?>
			
		<?php endif ; ?>		
		
		<form method="POST">

			<input name="logout" type="submit" value="Logout">
		
		</form>	
	
	</body>


</html>
