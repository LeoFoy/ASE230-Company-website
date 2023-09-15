<?php

function csvFiletoArray($csvFile){
	$f = fopen($csvFile,"r");
		
	while ($record = fgetcsv($f)){
		$csvArray[] = $record;
	}
	array_splice($csvArray, 0,1);
	return $csvArray;
}

?>