<?php
require_once("products.php");
$array_json = jsonFiletoArray("../../data/data.json");
?>
<h1>Products Index:</h1>
<?php
for($i=0; $i<count($array_json); $i++) { ?>
	<h2><?php echo $array_json[$i]['Product']; ?></h2>
	<a href="detail.php?index=<?php echo $i; ?>">See details</a>
	<br>
	<hr>
<?php } ?>
<a href="create.php">Create New Product</a>
