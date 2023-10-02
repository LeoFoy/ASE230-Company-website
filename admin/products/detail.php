<?php
//created by Julianna Truitt
require_once("products.php");
$array_json = jsonFiletoArray("../../data/data.json");
?>
<h4><?php echo $array_json[$_GET['index']]['Product'].': '.$array_json[$_GET['index']]['Product_Desc']; ?></h4>
	<ul>
		<li><?php echo $array_json[$_GET['index']]['First_app_name'].': '.$array_json[$_GET['index']]['First_app_desc']; ?></li>
		<li><?php echo $array_json[$_GET['index']]['Second_app_name'].': '.$array_json[$_GET['index']]['Second_app_desc']; ?></li>
	</ul>
<a href="delete.php?index=<?php echo $_GET['index']; ?>">Delete Product</a>
<a href="edit.php?index=<?php echo $_GET['index']; ?>">Edit This Product</a>
<a href="index.php">go back to index page</a>