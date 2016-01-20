<?php

	class Platea {

		private $posti;
		private $postiPerFila;
		
		public function __construct($posti,$postiPerFila) {
			
			$this->posti=$posti;
			$this->postiPerFila=$postiPerFila;		
			
		}
		
		public function getPosti() {
			
			return $this->posti;			
			
		}
		
		public function setPosti ($posti) {
			
			$this->posti=$posti;
			
		}
		
		public function getPostiPerFila() {
			
			return $this->postiPerFila;			
			
		}
		
		public function setPostiPerFila ($postiPerFila) {
			
			$this->postiPerFila=$postiPerFila;
			
		}
		
		// restituisce un array con i nomi delle file prensenti in platea
			
		public function getFile() {
			
			return array_keys($this->posti);			
			
		}
		
		// restiuisce l'array con i numeri di posto
		
		public function getPostiNomi() {
			
			$arr=array();
			
			for ($i=1; $i<=$this->postiPerFila; $i++) {
				
				$arr[]=$i;
							
			}
			
			return $arr;			
			
		}
		
		// controllase il posto è prenotato ritorna: 0 non prenotato / 1 prenotato / -1 se la fila o il numero non sono validi
		
		public function isPrenotato ($fila,$posto) {
			
			if (isset($this->posti[$fila])) {
				
				if ($posto>= 1 && $posto<=$this->postiPerFila) {
					
					if (isset($this->posti[$fila][$posto])) {
						
						return 1;
						
					}
					
					else {
						
						return 0;
						
					}
					
				}
				
				else {
					
					return -1;
					
				}			
				
			}
			
			else {
				
				return -1;
				
			}
			
		}
		
		// prenota posto ritorna: 0 prenota il posto / 1 prenotato / -1 se la fila o il numero non sono validi
		
		public function prenota($fila,$posto) {
			
			$prenotato=$this->isPrenotato($fila,$posto);
			
			if ($prenotato == 0) {
				
				$this->posti[$fila][$posto]=1;
				
				return 0;
								
			}
			
			else {
				
				return $prenotato;
				
			}
			
		}
		
		public function disdici($fila,$posto) {
			
			$prenotato=$this->isPrenotato($fila,$posto);
			
			if ($prenotato == 1) {
				
				unset($this->posti[$fila][$posto]);
				
				return 1;
								
			}
			
			else {
				
				return $prenotato;
				
			}
			
		}
		
	}
		
	function queryCinema($postiPerFila) {
			
		$posti=array(
			"fila1" => array (
				1 => 1,
				4 => 1,
				9 => 1,
			),
			"fila2" => array (
				5 => 1,
				8 => 1,
				9 => 1,
			),				
			"fila3" => array (
				8 => 1,
				9 => 1,
				10 => 1,
			),
			"fila4" => array (
				1 => 1,
				4 => 1,
				5 => 1,
				6 => 1,
				9 => 1,
				10 => 1,
			)
		);
			
		return new Platea($posti,$postiPerFila);
			
	}
			
?>
