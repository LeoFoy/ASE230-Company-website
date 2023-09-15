<?php

function csvFiletoArray($csvFile){
	$f = fopen($csvFile,"r");
		
	while ($record = fgetcsv($f)){
		$csvArray[] = $record;
	}
	return $csvArray;
}

?>