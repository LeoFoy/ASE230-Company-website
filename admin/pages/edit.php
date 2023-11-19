<?php
    require_once("pageClass.php");
	$page = new Pages();
	$array_json = $page->read();
    $item = $array_json[$_GET['index']];
?>
<a href="index.php">Go back to the index page</a>
<form action="<?= $_SERVER['PHP_SELF'] ?>?index=<?= $_GET['index'] ?>" method="POST" >
	<h1>Edit Page</h1>
	Page Name:<input type="text" name="Page" value="<?php echo $item['Page']; ?>"></input><br>
	</br>
	Page Description:<input type="textbox" name="PageDesc" value="<?php echo $item['PageDesc']; ?>"></input><br>
	</br>
	<button type="submit">Save Changes</button>
</form>
<?php
	$page = new Pages();
	$page->edit();
?>