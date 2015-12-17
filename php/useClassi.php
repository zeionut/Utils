<html>
	<form method="post">
		
		<table>
			<tr>
				<td><label>Nome:</label></td>
				<td><input type="text" name="nome" autofocus placeholder="inserisci il Nome..." /></td>
			</tr>
			
			<tr>
				<td><label>Cognome:</label></td>
				<td><input type="text" name="cognome" placeholder="inserisci il Cognome..." /></td>
			</tr>
			
			<tr>
				<td><label>Indirizzo:</label></td>
				<td><input type="text" name="indirizzo" placeholder="inserisci l' Indirizzo..." /></td>
			</tr>			
			
			<tr>
				<td><label>Telefono fisso:</label></td>	
				<td><input type="text" name="tel" placeholder="inserisci il numero telefonico..." /></td>
			</tr>
			
			<tr>
				<td><label>Telefono cellulare:</label></td>	
				<td><input type="text" name="numCel" placeholder="inserisci il numero telefonico..." /></td>
			</tr>			
		</table>
		
		<br />
		<br />
		
		<center><input type="submit" value="Invia" /></center>
		
	</form>
<html>
	
<?php

	include "libClassi.php";

	if (isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["indirizzo"]) && isset($_POST["tel"]) && isset($_POST["numCel"]) ) {
		
		$utente = new UtenteExstend();
		
		$utente->nome=$_POST["nome"];
		$utente->cognome=$_POST["cognome"];
		$utente->indirizzo=$_POST["indirizzo"];
		$utente->tel=$_POST["tel"];
		$utente->numCel=$_POST["numCel"];	
		
		echo "<center><h1>";
		echo $utente->stampTutto();
		echo "</center></h1>";
		
	}
	
	else {
		
		echo "<center><h2>Compila tutti i campi!</h2></center>";
		
	}

?>
