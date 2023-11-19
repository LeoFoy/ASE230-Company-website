<?php
	require_once("pageClass.php");
	$page = new Pages();
	$page->delete();
	header('location: index.php');
?>