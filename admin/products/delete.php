<?php
	//created by Julianna Truitt
	require_once("products.php");
	$content = file_get_contents("../../data/data.json");
	$content = json_decode($content, true);
	unset($content[$_GET['index']]);
	//restore array as an indexed array
	$content = array_values($content);
	$content = json_encode($content, JSON_PRETTY_PRINT);
	file_put_contents("../../data/data.json", $content);
	header('location: index.php');
?>


