<?php

	include "authentication.php";

	session_start();
		
	$nomeUtente="Non hai u na sessione attiva";
	
	if (isset($_SESSION["login_user"]) && $_SESSION["login_user"] != "") {
		
		$nomeUtente=$_SESSION["login_user"];
		
	}
	
	if (isset($_POST["logout"])) {
		
		session_destroy();
		unset($_SESSION["login_user"]);
		
	}
	
		if (!isLogin() && isset($_POST["logout"])) {
		
		header("Location: /Utis/php/esCookie/login.php");
		
	}
	
	
?>


<html>
	
	<body>
		
		buongiorno: <?php echo $nomeUtente ?>
		
		<form method="POST">

			<input name="logout" type="submit" value="Logout">
		
		</form>	
	
	</body>


</html>
