<?php
require_once("contacts.php");
?>

<?php 
$name=$contacts[$_GET['name']];
?>

<img class="picture" src=<?=$name['picture'].""?> alt="">
<h4><?=$name['name'].""?></h4>
<p><?=$name['email'].""?> <br> <?=$name['phone'].""?></p>
<a href="index.php">Back to home page</a>
