<?php
//created by Julianna Truitt
require_once("awards.php");
$regex = "/^[0-9]{4}$/";
if(count($_POST)>0){
	if (preg_match($regex, $_POST['year'])){
		$fp = fopen('../../data/awards.csv', 'a+');
		fwrite($fp, $_POST['year'].',"'.$_POST['description'].'"'.PHP_EOL);
		fclose($fp);
		header('location: index.php');
	}
	else{
		echo 'ERROR: Year must be 4 digits.';
		echo '<br />';
	}
}
else {
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
	<h1>Create a new award entry</h1>
	Year: <input type="text" name="year" required></input>
	Description: <textarea name="description" required></textarea>
	<button type="submit">Create Award Entry</button>
</form>
<?php } ?>
<a href="index.php">go back to index</a>
