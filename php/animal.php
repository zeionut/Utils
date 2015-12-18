<?php

	include "animalClass.php";
	
	function showAnimal($animal) {
		
		$sho="Sono ". $animal->nome;
		$sho.="<br />ho ". $animal::NZAMP. " zampe";
		$sho.="<br />e faccio: ". $animal->verso();
		
		return $sho;
		
	}
	
	$animalAr=array();
	
	$tempAnimal= new Cane();
	$tempAnimal->nome="Bobbi";
	$animalAr[]=$tempAnimal;
	
	$tempAnimal= new Cane();
	$tempAnimal->nome="Lisa";
	$animalAr[]=$tempAnimal;
	
	$tempAnimal= new Cavallo();
	$tempAnimal->nome="Furia";
	$animalAr[]=$tempAnimal;
	
	$tempAnimal= new Cavallo();
	$tempAnimal->nome="Sendy";
	$animalAr[]=$tempAnimal;
	
	$tempAnimal= new Cavallo();
	$tempAnimal->nome="Golia";
	$animalAr[]=$tempAnimal;
	
	$tempAnimal= new Pesce();
	$tempAnimal->nome="Gold";
	$animalAr[]=$tempAnimal;
	
	$tempAnimal= new Pesce();
	$tempAnimal->nome="Hex";
	$animalAr[]=$tempAnimal;
	
	$tempAnimal= new Pesce();
	$tempAnimal->nome="Spazzola";
	$animalAr[]=$tempAnimal;
	
	$tempAnimal= new Pesce();
	$tempAnimal->nome="Black";
	$animalAr[]=$tempAnimal;
	
	foreach ($animalAr as $tempShow) {
		
		echo showAnimal($tempShow);
		echo "<br /><br />";
		
	}


?>
