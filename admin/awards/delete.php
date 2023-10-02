<?php
	$output = '';
	$fp = fopen('../../data/awards.csv', 'r');
	//Make index=-1 because in awards.csv the first line is the header titles, year and desc.
	//If index=0, then it edits the entry above the entry you are trying to edit.
	$index = -1;
	while(!feof($fp)){
		$line = fgets($fp);
		if($index!=$_GET['index']){
			$output.=$line;
		}
		$index++;
	}
	fclose($fp);
	$fp = fopen('../../data/awards.csv', 'w');
	fputs($fp, $output);
	fclose($fp);
	header('location: index.php');	

?>