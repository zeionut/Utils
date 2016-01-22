<?php

	include "authentication.php";
	
	session_start();
	
	$errore=false;
	
	if ((isset($_POST["login"]) || isset($_POST["login2"])) && isset($_POST["user"]) && isset($_POST["password"]) && ($_POST["user"] != "") && ($_POST["password"] != "")) {
		
		if (verifica($_POST["user"], md5($_POST["password"]))) {
				
			$_SESSION["login_user"]=$_POST["user"];
							
		}
			
		else {
					
			$errore=true;							
		
		}
			
	}
			
	elseif ((isset($_POST["login"]) || isset($_POST["login2"])) && isset($_POST["user"]) && isset($_POST["password"]) && (($_POST["user"] != "") || ($_POST["password"] != ""))) {
			
		$errore=true;
				
			
	}
	
	if (isset($_POST["logout"])) {
		
		logout();		
		
	}
	
	if (isLogin() && isset($_POST["login2"])) {
		
		header("Location: /Utis/php/esCookie/logout.php");
		
	}

?>

<html>
	
	<body>
		
		<?php if(isLogin()) : ?>
		
			<?php header("Location: /Utis/php/esCookie/private.php"); ?>
			
			<!--<form method="POST">
			
			<input type="submit" value="Logout" name="logout">-->
			
			</form>
			
		<? else : ?>
		
		<form method="POST">
			
			<table>
				
				<tr>
		
					<td align="right"><b>User:</b></td>
					<td><input name="user" type="text"></td>	
					
				</tr>
				
				<tr>
					
					<td><b>Password:</b></td>					
					<td><input name="password" type="password"></td>	
			
				</tr>
		
			</table>
			
				<input type="submit" value="Login" name="login">
				<br />
				Accedi alla pagina di Logout: <input type="submit" value="Login" name="login2">
			
		</form>	
		
			<?php if ($errore) : ?>
			
				<h1>Utente o password errati!</h1>
			
			<?php endif ; ?>				
		
		<?php endif ; ?>
	
	</body>


</html>
