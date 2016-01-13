<?php
	
	class Number {
		
		private $first;
		private $second;
		private $third;
		private $fourth;
		private $fifth;
	
		function __construct() {
		
			$this->first= null;
			$this->second= null;
			$this->third= null;
			$this->fourth= null;
			$this->fifth= null;
		
		}
		
		public function getFirst() {
			
                return $this->first;
        }
        
        public function setFirst($first) {
			
                $this->first = $first;
        }
        
   		public function getSecond() {
			
                return $this->second;
        }
        
        public function setSecond($second) {
			
                $this->second = $second;
        }
        
		public function getThird() {
			
                return $this->third;
        }
        
        public function setThird($third) {
			
                $this->third = $third;
        }
        
		public function getFourth() {
			
                return $this->fourth;
        }
        
        public function setFourth($fourth) {
			
                $this->first = $fourth;
        }
        
		public function getFifth() {
			
                return $this->fifth;
        }
        
        public function setFifth($fifth) {
			
                $this->fifth = $fifth;
        }
        
        // Inizione funzioni esercizzi
        
        public function somma() {
			
			$this->third = $this->first + $this->second;
			
			return $this->third;
			
		}
		
		public function preSuc() {
			
			$pre = $this->first - 1;
			$suc = $this->first + 1;
			
			echo " il precedente $pre e il successivo $suc<br />";
			
		}
		
		public function media() {
			
			$this->fourth = $this->third/2;
			
			return $this->fourth;			
			
		}
		
		public function calcol() {
			
			$somma = $this -> somma();
			$sottrazione = $this -> first - $this->second;
			$moltiplicazione = $this -> first * $this -> second;
			$divisione  = $this -> first / $this -> second;
			
			echo " somma $somma , sottrazione	$sottrazione , moltiplicazione $moltiplicazione e divisione $divisione <br />";
			
		}
		
		public function aree() {
			
			$quadrato = $this -> first * $this -> first;
			$cerchio = ($this -> first / 2) * 3.14;
			$triangoloH = ($this -> first * sqrt(3)/2);
			$triangolo = ($triangoloH*$this -> first) / 2;
			
			echo " area del quadrato $quadrato , area del cerchio $cerchio e area del triangolo equilatero $triangolo <br />";
			
		}	
	
	}




?>
