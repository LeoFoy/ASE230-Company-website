<?php
//created by Julianna Truitt
require_once("awards.php");
$array_csv = csvFiletoArray("../../data/awards.csv");
$item = $array_csv[$_GET['index']];
?>
<?php
if (count($_POST)>0){
	$output = '';
	$fp = fopen('../../data/awards.csv', 'r');
	//Make index=-1 because in awards.csv the first line is the header titles, year and desc.
	//If index=0, then it edits the entry above the entry you are trying to edit.
	$index = -1;
	while(!feof($fp)){
		$line = fgets($fp);
		if($index==$_GET['index']){
			//modify line
			$output.=$_POST['year'].',"'.$_POST['description'].'"'.PHP_EOL;
		}else {
			//put line into output
			$output.=$line;
		}
		$index++;
	}
	fclose($fp);
	$fp = fopen('../../data/awards.csv', 'w');
	fputs($fp, $output);
	fclose($fp);
	header('location: index.php');
} 
else { ?>
<form action="<?= $_SERVER['PHP_SELF'] ?>?index=<?= $_GET['index'] ?>" method="POST">
	<h1>Update Entry</h1>
	Year: <input type="text" name="year" value="<?= $item[0] ?>" required></input>
	Description: <input type="text" name="description" value="<?= $item[1] ?>" required></input>
	<button type="submit">Update entry</button>
</form>
<?php
} ?>