<!DOCTYPE html>
<html lang="en">

<?php
require("team.php");
$index = $_GET['index'];
$teamArray = csvFiletoArray('..\..\data\team.csv');
if (count($_POST)>0){
    delCsvfileItem($index,'..\..\data\team.csv');
    header('location: index.php');
}

else {?>
    <a href="index.php">Go back to Index</a>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <h2><?='Delete team member'?></h2>
        <table>
            <tr><th><?='Name'?></th><th><?='Title'?></th><th><?='Bio'?></th></tr>
            <tr> <td><?=$teamArray[$index][0]?></td><td><?=$teamArray[$index][1]?></td><td><?=$teamArray[$index][2]?></td></tr>
            <tr><td>Check box to confirm<input type="checkbox" name="delete" required></input></td></tr>
      </table>
            <button type="submit"><?='Delete '.$teamArray[$index][0].' ?'?></button>
    </form>


<?php } ?>
