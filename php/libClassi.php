<?php

	//definire una classe

	class Utente {
		
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
	
	//definire una classe estesa, che eredita le variabili e i metodi dalla classe che estende
	
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
