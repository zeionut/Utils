<?php

	class Animal {
		
		const NZAMP=0;
		public $nome;
		
		public function verso() {
			
			return "non so...";
			
		}
		
		
	}
	
	class Cane extends Animal {
		
		const NZAMP=4;
		
		public function verso() {
			
			return "Bau, bau!";
			
		}
		
	}
	
	class Pesce extends Animal {
		
		public function verso() {
			
			return ". . . .";
			
		}
		
	}
	
	class Cavallo extends Animal {
		
		const NZAMP=4;
		
		public function verso() {
			
			return "Hi, hi!";
			
		}
		
	}


?>
