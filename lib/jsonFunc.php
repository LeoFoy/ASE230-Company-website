<?php

function jsonFiletoArray($path){
	$f = fopen($path, 'r');
	$content = fread($f, filesize($path));
	$json_array = json_decode($content, true);
	fclose($f);
	return $json_array;
}
?>
