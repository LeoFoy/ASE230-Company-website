<!DOCTYPE html>
<html lang="en">

<?php 
require("team.php");
$teamArray = csvFiletoArray('..\..\data\team.csv');
$index= $_GET['index'];
?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta content="Themesbrand" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images\favicon.ico" >
    <!-- css -->
    <link href="..\..\Orion Aerospace Dynamics\css\bootstrap.min.css" rel="stylesheet" type="text/css" >
    <!-- icon -->
    <link href="..\..\Orion Aerospace Dynamics\css\materialdesignicons.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="..\..\Orion Aerospace Dynamics\css\pe-icon-7-stroke.css">
    <link href="..\..\Orion Aerospace Dynamics\css\style.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="..\..\Orion Aerospace Dynamics\css\colors\cyan.css" id="color-opt">
</head>

<body data-bs-theme="light">

<?php
if (count($_POST)>0){
	$Teamarray = [($_POST['name']), ($_POST['title']), ($_POST['bio'])];
	addTocsvFile($Teamarray,'..\..\data\team.csv');
	header('location: index.php');
}

else {?>
	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
	<h2><?="Edit team member"?></h2>
		<table>
	  		<tr><td><?='Name'?><input type="text" name="name" value="<?=$teamArray[$index][0]?>"></input></td></tr>
	    	<tr><td><?='Title'?><input type="text" name="title" value="<?=$teamArray[$index][1]?>"></input></td></tr>
	    	<tr><td><?='Bio'?><textarea type="text" name="bio" value="<?=$teamArray[$index][2]?>"></textarea></td></tr>
		</table>
			<button type="submit"><?='Edit team member'?></button>
	</form>
<?php }?>
    <!--END CSV Part-->


    <!-- javascript -->
    <script src="..\..\Orion Aerospace Dynamics\js\bootstrap.bundle.min.js"></script>
    <script src="..\..\Orion Aerospace Dynamics\js\smooth-scroll.polyfills.min.js"></script>
    <script src="..\..\Orion Aerospace Dynamics\js\gumshoe.polyfills.min.js"></script>
    <!-- Main Js -->
    <script src="..\..\Orion Aerospace Dynamics\js\app.js"></script>
</body>

</html>
