<?php
    require_once("pageClass.php");
    $page = new Pages();
	$array_json = $page->read();
?>
<h1>Website Pages: </h1>
<?php 
    for($i=0; $i<count($array_json); $i++) 
    { ?>
        <h2><?php echo $array_json[$i]['Page']; ?></h2>
        <a href="detail.php?index=<?php echo $i; ?>">See details of page</a>
        <br>
        <hr>
<?php } ?>
<a href="create.php">Create New Page</a>