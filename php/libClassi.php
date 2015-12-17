<?php

	//definire una classe

	class Utente {
		
		//classe che a solo proprietà senza metodi
		
		public $nome;
		public $cognome;
		public $indirizzo;
		public $tel;
		
		public function stampNomeCogn() {
			
			$n=$this->nome." ".$this->cognome;
			
			return $n;
			
		}	
		
		public function stampTutto() {
			
			$n=$this->stampNomeCogn();
			$n=$n."<br />";
			$n=$n.$this->indirizzo;
			$n=$n."<br />";
			$n=$n.$this->tel;
			$n=$n."<br />";
			
			return $n;
			
		}
		
	}
	
	class UtenteExstend extends Utente {
		
		public $numCel;
		
		public function stampTutto() {
			
			$n=parent::stampTutto();
			$n=$n.$this->numCel;
			$n=$n."<br />";
			
			return $n;
			
		}
		
	}

?>
