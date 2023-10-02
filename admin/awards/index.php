<?php
require_once("awards.php");
$array_csv = csvFiletoArray("../../data/awards.csv");
?>
<h1>Awards index:</h1>
<a href="create.php">Create a new award</a>

<?php
$index=0;
foreach($array_csv as $item){ ?>
	<div>
		<h2><?= $item[0].': '.$item[1]; ?></h2>
		<a href="detail.php?index=<?= $index; ?>">See details</a>
		<?php $index++; ?>
		<hr />
	</div>
<?php } ?>
	



