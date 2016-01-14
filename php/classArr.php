<?php
	
	class Num {
		
		private $arr = array();

	
		function __construct($arr) {
		
			$this-> arr = $arr;
		
		}
		
		public function getArr() {
			
			return $this->arr;
        }
        
   		public function setArr($arr) {
			
			$this-> arr = $arr;

        }
        
        public function stampArr() {
			
			foreach ($this->arr as $i => $elm) {
				
				echo $elm;
				
			}
			
		}		
        
	}
	
?>
