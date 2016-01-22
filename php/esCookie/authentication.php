<?php

	//funzione di autenticazione
	
	function verifica($user, $psw) {
		
		$utenti=array(
			array("zeion", "6e6bc4e49dd477ebc98ef4046c067b5f"),
			array("ergot", "6e6bc4e49dd477ebc98ef4046c067b5f"),
			array("dancotar", "6e6bc4e49dd477ebc98ef4046c067b5f"),
			array("artas", "6e6bc4e49dd477ebc98ef4046c067b5f")		
		);
		
		foreach ($utenti as $elm) {
			
			if ($user == $elm[0] && $psw == $elm[1]) {
				
				return true;
				
			}
			
		}
		
		return false;
		
	}
	
	function isLogin() {
		
		if (isset($_SESSION["login_user"]) && $_SESSION["login_user"] != "") {
			
			return true;
			
		}
		
		else {
		
			return false;
		
		}
	}
	
	function logout() {
		
			session_destroy();		
			unset($_SESSION["login_user"]);
	}



?>
