<?php
	require_once("pageClass.php");
	if(count($_POST)>0){
		//Process info with pages class
		//call "create" function
		$page = new Pages();
		$page->create();
		header('location: index.php');
	} else {
	?>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >
		<h1>Fill out to create a new page</h1>
		Page Name:<input type="text" name="Page" required></input><br>
		</br>
		Page Description:<textarea name="PageDesc" required></textarea><br>
		</br>
		<button type="submit">Save New Page</button>
	</form>
	<?php } ?>
	<a href="index.php">go back to index</a>