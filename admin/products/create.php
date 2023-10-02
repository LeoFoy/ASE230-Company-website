<?php
//created by Julianna Truitt
require_once("products.php");
if(count($_POST)>0){
	//Process info
	appendJsonArraytoFile("../../data/data.json");
	header('location: index.php');

} else {
?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >
	<h1>Fill out to create a new product</h1>
	Product:<input type="text" name="Product" required></input><br>
	</br>
	Product Description:<textarea name="Product_Desc" required></textarea><br>
	</br>
	First Application Name:<input type="text" name="First_app_name" required></input><br>
	</br>
	Second Application Name:<input type="textbox" name="Second_app_name" required></input><br>
	</br>
	First Application Description:<textarea name="First_app_desc" required></textarea><br>
	</br>
	Second Application Description:<textarea name="Second_app_desc" required></textarea><br>
	</br>
	<button type="submit">Save New Product</button>
</form>
<?php
} ?>
<a href="index.php">go back to index</a>