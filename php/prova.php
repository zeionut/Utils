<?php
	$ar = array();
	array_push($ar, "ciao");
	array_push($ar, 42);
	array_unshift($ar, "hello");
	echo $ar[1];
	array_unshift($ar, "cavallo");
	echo $ar[1];
	
	$max = (sizeof($ar)-1);

	echo "<br />";

	echo $max;
	
	echo "<br />";

	for ($i=0; $i<=$max; $i++) {
	     echo $ar[$i];
		echo "<br />";
	}

	echo "<br />";
	
	foreach($ar as $i=>$el) {
		echo $i."- ".$el;
		echo "<br />";
	}
	
	$ar[6]="sette";

	echo "<br />";
	echo "L'array contiene ".count($ar)." elementi";


?>
