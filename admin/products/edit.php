<?php
//created by Julianna Truitt
require_once("products.php");
$array_json = jsonFiletoArray("../../data/data.json");
$item = $array_json[$_GET['index']];
?>
<a href="index.php">Go back to the index page</a>
<form action="<?= $_SERVER['PHP_SELF'] ?>?index=<?= $_GET['index'] ?>" method="POST" >
	<h1>Edit product</h1>
	Product:<input type="text" name="Product" value="<?php echo $item['Product']; ?>"></input><br>
	</br>
	Product Description:<input type="textbox" name="Product_Desc" value="<?php echo $item['Product_Desc']; ?>"></input><br>
	</br>
	First Application Name:<input type="text" name="First_app_name" value="<?php echo $item['First_app_name']; ?>"></input><br>
	</br>
	Second Application Name:<input type="textbox" name="Second_app_name" value="<?php echo $item['Second_app_name']; ?>"></input><br>
	</br>
	First Application Description:<input type="textbox" name="First_app_desc" value="<?php echo $item['First_app_desc']; ?>"></input><br>
	</br>
	Second Application Description:<input type="textbox" name="Second_app_desc" value="<?php echo $item['Second_app_desc']; ?>"></input><br>
	</br>
	<button type="submit">Save Changes</button>
</form>
<?php
	replaceElementInArrayJson("../../data/data.json")
?>
