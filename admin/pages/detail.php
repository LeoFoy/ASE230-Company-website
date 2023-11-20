<?php
    require_once("pageClass.php");
    $page = new Pages();
	$array_json = $page->read();
?>
<h4><?php echo $array_json[$_GET['index']]['Page'].': '.$array_json[$_GET['index']]['PageDesc']; ?></h4>
<a href="delete.php?index=<?php echo $_GET['index']; ?>">Delete Page</a>
<a href="edit.php?index=<?php echo $_GET['index']; ?>">Edit This Page</a>
<a href="index.php">go back to index page</a>