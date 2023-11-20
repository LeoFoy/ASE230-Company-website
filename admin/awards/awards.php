<?php
require_once('../modifyData.php');
	
class AwardsClass{
	public static $index;
	public function awardsIndex(){
		ModifyData::displayCsvFile('../../data/awards.csv', 'awards');
	}
}
$awards = new AwardsClass;
$awards->awardsIndex();

?>

