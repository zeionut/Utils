<?php
	
	class Num {
		
		private $n;

	
		function __construct($num) {
		
			$this-> n = $num;
		
		}
		
		public function getN() {
			
			return $this->n;
        }
        
   		public function setN($n) {
			
			$this-> n = $n;

        }
        
        public function stampN() {
			
			echo $this-> n;
			
		}
		
		public function somma(Num $n) {
			
			$somma = $this-> n + $n->getN();
			
			return new Num($somma);
			
		}
		
		
        
	}
	
?>
