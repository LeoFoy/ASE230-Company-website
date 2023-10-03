<?php

function addTocsvFile($array,$filePath){
	$f = fopen($filePath,"a");
	fwrite($f, $array);
	fclose($f);
};

function editTocsvFile($array,$filePath){
	$f = fopen($filePath,"r+");
	while($f)
	fputcsv($f, $array);
	fclose($f);
};
function csvFiletoArray($filePath){
	$f = fopen($filePath,"r");
		
	while ($record = fgetcsv($f)){
		$csvArray[] = $record;
	}
	array_splice($csvArray, 0,1);
	fclose($f);
	return $csvArray;
}
function delCsvfileItem($index,$filePath){
	$csvArray = csvFiletoArray($filePath);
	$f = fopen($filePath,"r+");
	unset($csvArray[$index]);
	array_values($csvArray);
	fputcsv($f,$csvArray);
	fclose($f);
	
};




?>