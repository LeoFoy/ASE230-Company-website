<?php

function csvFiletoArray($csvFile){
	$f = fopen($csvFile,"r");

	while ($record = fgetcsv($f)){
		print($record[1]);
		/*foreach ($record as $feild => $key) {
			print($feild);
		}*/
	}
}