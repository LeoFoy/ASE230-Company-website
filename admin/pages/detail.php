<?php
    require_once("pages.php");
    $array_json = jsonFiletoArray("../../data/pages.json");
?>
<h4><?php echo $array_json[$_GET['index']]['Page'].': '.$array_json[$_GET['index']]['PageDesc']; ?></h4>
<a href="delete.php?index=<?php echo $_GET['index']; ?>">Delete Page</a>
<a href="edit.php?index=<?php echo $_GET['index']; ?>">Edit This Page</a>
<a href="index.php">go back to index page</a>