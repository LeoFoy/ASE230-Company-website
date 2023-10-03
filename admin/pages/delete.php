<?php
	require_once("pages.php");
	$content = file_get_contents("../../data/pages.json");
	$content = json_decode($content, true);
	unset($content[$_GET['index']]);
	$content = array_values($content);
	$content = json_encode($content, JSON_PRETTY_PRINT);
	file_put_contents("../../data/pages.json", $content);
	header('location: index.php');
?>