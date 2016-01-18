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
			
			$strPrimo= new MyString (substr($tempString->getString(),0,$num));
			
			$strSecondo= new MyString (substr($tempString->getString(),$num,strlen($tempString->getString())));
			
			$arr[0]= $strPrimo;
			
			$arr[1]= $strSecondo;
			
			return $arr;
			
		}
		
		
		public function divStr(MyString $tempString, MyString $tempString2) {
			
			$arr= array();
			
			if (strpos($tempString->getString(),$tempString2->getString()) > -1) {		
				
				$strPrimo= new MyString (substr($tempString->getString(),0,strpos($tempString->getString(),$tempString2->getString())));
				
				$strTerzo= new MyString (substr($tempString->getString(),strlen($tempString2->getString())+strlen($strPrimo->getString()),strlen($tempString->getString())));
				
				$arr[0]= $strPrimo;
				
				$arr[1]= $tempString2;
				
				$arr[2]= $strTerzo;
				
			}
			
			else {
				
				echo "Stringa non contetuna nella stringa";
				
			}
			
			return $arr;
			
		}
		
		public function evidStr(MyString $tempString, MyString $tempString2, $arr) {
			
			if (strpos($tempString->getString(),$tempString2->getString()) > -1) {
			
				$strSecondo= new MyString("<b>".$tempString2->getString()."</b>");
				
				$arr[1]= $strSecondo;
				
			}
			
			return $arr;
			
		}
		
	}
	
?>
