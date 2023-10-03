<?php
require("team.php");


if (count($_POST)>0){
	$Teamarray = [($_POST['name']), ($_POST['title']), ($_POST['bio'])];
	addTocsvFile($Teamarray,'..\..\data\team.csv');
	header('location: index.php');
}

else {?>
	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
	<h2><?="Create a new team member"?></h2>
		<table>
	  		<tr><td>Name<input type="text" name="name" required></input></td></tr>
	    	<tr><td>Title<input name="title" required></input></td></tr>
	    	<tr><td>Bio<textarea name="bio" required></textarea></td></tr>
		</table>
			<button type="submit">Add team member</button>
	</form>


<?php } ?>
