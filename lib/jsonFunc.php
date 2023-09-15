<?php

function jsonFiletoArray($path){
	$f = fopen($path, 'r');
	$content = fread($f, filesize($path));
	$json_array = json_decode($content, true);
	return $json_array;
}

?>
