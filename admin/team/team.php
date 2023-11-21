<?php

require_once('../modifyData.php');
	
class TeamsClass{
	public static $index;
	public function teamIndex(){
		Modify3Csv::displayCsvFile('../../data/team.csv', 'team');
	}
}
$team = new TeamsClass;
$team->teamIndex();


?>