<?php
require_once("contacts.php");
?>

<?php 
$name=$contacts[$_GET['name']];
?>

<img class="picture" src=<?=$name['picture'].""?> alt="">
<h1><?=$name['name'].""?></h1>
<p>Email: <?=$name['email'].""?> <br> Phone: <?=$name['phone'].""?></p>
<a href="index.php">Back to home page</a>
