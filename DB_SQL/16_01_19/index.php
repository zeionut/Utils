<?php

	// Connessione al DB
	
	$link = mysql_connect("a22docente","softuser","_s0ft*");
	mysql_select_db("fanqook");
	//new mysqli("a22docente","softuser","_s0ft*","allievo6");
	
	/*// Esecuzione query
	
	$query = mysql_query("SELECT login, password FROM utente");
	
	echo "<table border=1>\n";
	
	// Inserazione sui risultati
	while ($record = mysql_fetch_assoc($query)) {
		
		echo "<tr>";		
		echo "<td>".$record["login"]."</td>";
		echo "<td>".$record["password"]."</td>";
		echo "</tr>";	
		
	}
	
	echo "<table>";*/
	
	if ($_REQUEST["azione"]=="invia") {
		
		mysql_query("INSERT INTO post(utente,titolo,testo) VALUES("
		.$_REQUEST["id_utente"].","
		."'".$_REQUEST["titolo"]."'".","."'".$_REQUEST["area"]."')");
	
	}
	
	//form per invio post
	
	echo"<form method='POST'>";
	
	//menù con login e value=id
	
	echo "<SELECT name='id_utente'>\n";
	
	$query=mysql_query("SELECT id,login FROM utente");
	
	while ($record = mysql_fetch_assoc($query))  {
		
		echo "<OPTION value='".$record["id"]."'>";
		echo $record["login"];
		echo "</OPTION>";
		
	}
	
	echo "</SELECT>";
	
	echo "<br />\n";
	
	echo "<br />";	
	
	echo "<textarea name='area' rows='20' cols='60'>";
	
	echo "</textarea>";	
	
	echo "<br />\n";
	
	echo "<br />";
	
	echo "<input type='text' name='titolo'>";
	
	echo "<br />";	
	
	echo "<input type='submit' value='invia' name='azione'>";
	
	echo "<br />\n";
	
	echo"</form>";
	
	echo "<br />\n";
	
	$query = mysql_query("SELECT date_format(dataora,'%e/%m%Y %T') as dataora,utente.login,titolo FROM post join utente on post.utente=utente.id ORDER BY dataora desc limit 10");
	
	echo "<table border=1>\n";
	
		echo "<tr>";		
		echo "<td>Dataora</td>";
		echo "<td>Utente</td>";
		echo "<td>Titolo</td>";
		echo "</tr>";
	
	// Inserazione sui risultati
	while ($record = mysql_fetch_assoc($query)) {
		
		echo "<tr>";		
		echo "<td>".$record["dataora"]."</td>";
		echo "<td>".$record["login"]."</td>";
		echo "<td>".$record["titolo"]."</td>";
		echo "</tr>";	
		
	}

	echo "<table>";
	
?>
	
