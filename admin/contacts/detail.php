<?php
require_once("contacts.php");
?>

<?php foreach($contacts as $name) { ?>
	<h4><?=$name['name'].""?></h4>
	<p><?=$name['email'].""?> <br> <?=$name['phone'].""?></p>
	<a href="detail.php">View Profile</a>
<?php } ?>
