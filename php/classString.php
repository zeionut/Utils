<?php
	
	class MyString {
		
		private $str;

	
		function __construct($string) {
		
			$this-> str = $string;
		
		}
		
		public function getString() {
			
			return $this-> str;
        }
        
   		public function setString($string) {
			
			$this-> str = $string;

        }
        
        public function stampString() {
						
			echo $this->str;
							
		}		
        
        public function ribStringa(MyString $tempString) {
			
			for ($i=strlen($this->str)-1; $i>= 0; $i--) {
				
				$tempString->setString($tempString->getString().$this->str[$i]);
				
			}
			
			return $tempString;
			
		}
		
	   public function ribStringa2() {
		   
		   $tempString="";
			
			for ($i=strlen($this->str)-1; $i>= 0; $i--) {
				
				$tempString = $tempString.$this->str[$i];
				
			}
			
			return new MyString($tempString);
			
		}
		
		public function divArr(MyString $tempString, $num) {
			
			$arr= array();
			
			/*
			
			
			
			
			
			
			
			*/
			
			return $arr
			
			
		}
		
	}
	
?>
