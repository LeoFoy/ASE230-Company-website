<?php
require_once("../../lib/csvFunc.php");
?>

<?php 
//This is a static class.
//This class provides static functions for csv files with 2 indexes.
//It will allow any csv file with that specific amount of indexes to display all the items in array,
//view the detail of an item in an array,
//delete an item in an array,
//And edit an item in an array.
//This static class is useful for admin purposes and makes adding new folders to the admin class to be modified very simple to do as such.
//For class to work you must have a folder containing the file names: index.php, detail.php, delete.php, edit.php, and create.php. That is all.

class ModifyData{
	public static $path;
	public static $array;
	public static $index;
	public static $arrayItem;
	public static $folderName;
	public static $output;
	public static $fp;
	public static $line;
	public static $regex;

	public static function displayCsvFile($path, $folderName){
		self::$path = $path;
		self::$folderName = $folderName; 
		self::$index = 0;
		self::$array = csvFiletoArray($path);	
		echo '<h1><u>'.self::$folderName.' index:'.'</u></h1>';
		echo '<a href="create.php">Create A New Entry</a>';
		foreach(self::$array as self::$arrayItem){
			echo '<h2>'.self::$index+1.0.'. '.self::$arrayItem[0].': '.self::$arrayItem[1].'</h2>';
			echo '<a href="detail.php?index='.self::$index.'">See details</a>';
			self::$index++;

			}
		}
	public static function detailCsvFile($path, $folderName){
		self::$path = $path;
		self::$folderName = $folderName; 
		self::$array = csvFiletoArray($path);	
		self::$index = $_GET['index'];
		echo '<h1><u>'.self::$folderName.': '.self::$index+1.0.'</u></h1>';
		echo '<h3>'.self::$array[self::$index][0].': '.self::$array[self::$index][1].'</h3>';
		echo '<a href="index.php">Go back to Index</a><br />';
		echo '<a href="edit.php?index='.self::$index.'">Edit Entry</a><br />';
		echo '<a href="delete.php?index='.self::$index.'">Delete Entry</a>';
		}
		
		public static function editCsvFile($path, $folderName){
		self::$path = $path;
		self::$folderName = $folderName; 
		self::$array = csvFiletoArray($path);	
		if (count($_POST)>0){
			self::$output = '';
			self::$fp = fopen(self::$path, 'r');
			self::$index = -1; #since file starts with the first line is a description of the data in the file, and not actual data.
			while(!feof(self::$fp)){
				self::$line = fgets(self::$fp);
				if(self::$index == $_GET['index']){
					//modify line
					self::$output.=$_POST['newEntry'].',"'.$_POST['newEntryDesc'].'"'.PHP_EOL;
				}else {
					//put line into output
					self::$output.=self::$line;
				}
				self::$index++;
		}
		fclose(self::$fp);
		self::$fp = fopen(self::$path, 'w');
		fputs(self::$fp, self::$output);
		fclose(self::$fp);
		echo '<h1>Entry Modified!</h1></ br>';
		echo '<a href="index.php">Go back to Index</a><br />';
		} else {
			echo '<form action="'.$_SERVER['PHP_SELF'].'?index='.$_GET['index'].'"'.' method="POST">';
				echo '<h1>Update '.self::$folderName.' Entry</h1>';
				echo self::$folderName; echo '<input type="text" name="newEntry" value="'.self::$array[$_GET['index']][0].'" required></input>';
				echo 'Description'; echo '<input type="text" name="newEntryDesc" value="'.self::$array[$_GET['index']][1].'" required></input>';
				echo '<button type="submit">Update '.self::$folderName.' entry</button>';
			echo '</form>';
		}
	}
	public static function createCsvFile($path, $folderName){
		self::$path = $path;
		self::$folderName = $folderName; 
		self::$array = csvFiletoArray($path);	
		self::$regex = "/^[0-9]{4}$/";
		if (count($_POST) > 0){
			if (preg_match(self::$regex, $_POST['newEntry'])){
				self::$fp = fopen(self::$path, 'a+');
				fwrite(self::$fp, $_POST['newEntry'].',"'.$_POST['newEntryDesc'].'"'.PHP_EOL);
				fclose(self::$fp);
				echo '<h1>Entry Created!</h1></ br>';
				echo '<a href="index.php">Go back to Index</a><br />';
			} else{
				echo 'ERROR! Must be 4 digits for year';
			}
		} else {
			echo '<form action="'.$_SERVER['PHP_SELF'].'" method="POST">';
			echo '<h1>Create a new awards entry</h1>';
			echo self::$folderName; echo '<input type="text" name="newEntry" required></input>';
			echo 'Description'; echo '<input type="text" name="newEntryDesc" required></input>';
			echo '<button type="submit">Update '.self::$folderName.' entry</button>';
			echo '</form>';
		}
	}
	
	public static function deleteCsvFile($path, $folderName){
		self::$path = $path;
		self::$folderName = $folderName; 
		self::$array = csvFiletoArray($path);	
		self::$output = '';
		self::$fp = fopen(self::$path, 'r');
		self::$index = -1; #because first line of file starts with a description of the file, not actual data.
		while (!feof(self::$fp)){
			self::$line = fgets(self::$fp);
			if(self::$index != $_GET['index']){
				self::$output.=self::$line;
			}
			self::$index++;
		}
		fclose(self::$fp);
		self::$fp = fopen($path, 'w');
		fputs(self::$fp, self::$output);
		fclose(self::$fp);
		echo '<h1>Entry Deleted Successfully</h1><br />';
		echo '<a href="index.php">Go back to Index</a><br />';
		
	}
}
class Modify3Csv{
	public static $path;
	public static $array;
	public static $index;
	public static $arrayItem;
	public static $folderName;
	public static $output;
	public static $fp;
	public static $line;
	public static $regex;

	public static function displayCsvFile($path, $folderName){
		self::$path = $path;
		self::$folderName = $folderName; 
		self::$index = 0;
		self::$array = csvFiletoArray($path);	
		echo '<h1><u>'.self::$folderName.' index:'.'</u></h1>';
		echo '<a href="create.php">Create A New Entry</a>';
		foreach(self::$array as self::$arrayItem){
			echo '<h2>'.self::$arrayItem[0].'<h3>'.self::$arrayItem[1].'</h3>  '.self::$arrayItem[2].'';
			echo '</br><a href="detail.php?index='.self::$index.'">See details</a>';
			self::$index++;

			}
		}
	public static function detailCsvFile($path, $folderName){
		self::$path = $path;
		self::$folderName = $folderName; 
		self::$array = csvFiletoArray($path);	
		self::$index = $_GET['index'];
		echo '<h1><u>'.self::$folderName.'</u></h1>';
		echo '<h2>'.self::$array[self::$index][0].'</h2><h4>'.self::$array[self::$index][1].'</h4>'.self::$array[self::$index][2].'</br>';
		echo '<a href="index.php">Go back to Index</a><br />';
		echo '<a href="edit.php?index='.self::$index.'">Edit Entry</a></br>';
		echo '<a href="delete.php?index='.self::$index.'">Delete Entry</a>';
		}
		
		public static function editCsvFile($path, $folderName){
		self::$path = $path;
		self::$folderName = $folderName; 
		self::$array = csvFiletoArray($path);	
		if (count($_POST)>0){
			self::$output = '';
			self::$fp = fopen(self::$path, 'r');
			self::$index = -1; #since file starts with the first line is a description of the data in the file, and not actual data.
			while(!feof(self::$fp)){
				self::$line = fgets(self::$fp);
				if(self::$index == $_GET['index']){
					//modify line
					self::$output.=$_POST['name'].',"'.$_POST['role'].'",'.$_POST['bio'].PHP_EOL;
				}else {
					//put line into output
					self::$output.=self::$line;
				}
				self::$index++;
		}
		fclose(self::$fp);
		self::$fp = fopen(self::$path, 'w');
		fputs(self::$fp, self::$output);
		fclose(self::$fp);
		echo '<h1>Entry Modified!</h1></ br>';
		echo '<a href="index.php">Go back to Index</a><br />';
		} else {
			echo '<form action="'.$_SERVER['PHP_SELF'].'?index='.$_GET['index'].'"'.' method="POST">';
				echo '<h1>Update '.self::$folderName.' Entry</h1>';
				echo self::$folderName; echo '<input type="text" name="name" value="'.self::$array[$_GET['index']][0].'" required></input>';
				echo 'Role: '; echo '<input type="text" name="role" value="'.self::$array[$_GET['index']][1].'" required></input>';
				echo 'Bio: '; echo '<input type="text" name="bio" value="'.self::$array[$_GET['index']][2].'" required></input>';
				echo '<button type="submit">Update '.self::$folderName.' entry</button>';
			echo '</form>';
		}
	}
	public static function createCsvFile($path, $folderName){
		self::$path = $path;
		self::$folderName = $folderName; 
		self::$array = csvFiletoArray($path);	
		self::$regex = "/^[0-9]{4}$/";
		if (count($_POST) > 0){
				self::$fp = fopen(self::$path, 'a+');
				fwrite(self::$fp, $_POST['name'].',"'.$_POST['role'].'",'.$_POST['bio'].PHP_EOL);
				fclose(self::$fp);
				echo '<h1>Entry Created!</h1></ br>';
				echo '<a href="index.php">Go back to Index</a><br />';
			 
		} else {
			echo '<form action="'.$_SERVER['PHP_SELF'].'" method="POST">';
			echo '<h1>Create a new Team entry</h1>';
			echo self::$folderName; echo ' Name <input type="text" name="name" required></input>';
			echo 'Role'; echo '<input type="text" name="role" required></input>';
			echo 'Bio'; echo '<input type="text" name="bio" required></input>';
			echo '<button type="submit">Update '.self::$folderName.' entry</button>';
			echo '</form>';
		}
	}
	
	public static function deleteCsvFile($path, $folderName){
		self::$path = $path;
		self::$folderName = $folderName; 
		self::$array = csvFiletoArray($path);	
		self::$output = '';
		self::$fp = fopen(self::$path, 'r');
		self::$index = -1; #because first line of file starts with a description of the file, not actual data.
		while (!feof(self::$fp)){
			self::$line = fgets(self::$fp);
			if(self::$index != $_GET['index']){
				self::$output.=self::$line;
			}
			self::$index++;
		}
		fclose(self::$fp);
		self::$fp = fopen($path, 'w');
		fputs(self::$fp, self::$output);
		fclose(self::$fp);
		echo '<h1>Entry Deleted Successfully</h1><br />';
		echo '<a href="index.php">Go back to Index</a><br />';
		
	}
}
?>