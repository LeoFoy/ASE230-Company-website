<?php
//created by Julianna Truitt
require_once("awards.php");
$array_csv = csvFiletoArray("../../data/awards.csv");
?>
<h1>Year: <?= $array_csv[$_GET['index']][0]; ?></h1>
<h4>Decription: <?= $array_csv[$_GET['index']][1]; ?></h4>
<a href="delete.php?index=<?php echo $_GET['index']; ?>">Delete Product</a>
<a href="edit.php?index=<?php echo $_GET['index']; ?>">Edit This Product</a>
<a href="index.php">go back to index page</a>
