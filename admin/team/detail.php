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

    <section class="section" id="features">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="features-box mt-5 mt-lg-0">
                        <h3><?= 'Meet the Team:' ?></h3>

                        <table>
                            <?php
                     
                        ?>
                            <tr><td><a href="<?='edit.php?index='.$index?>"><?="Edit"?></a></td><td><a href=<?='delete.php?index='.$index?>><?="Delete"?></a></td></tr>
                        <tr><th><?='Name'?></th><th><?='Title'?></th><th><?='Bio'?></th></tr>
                            <tr> <td><?=$teamArray[$index][0]?></td><td><?=$teamArray[$index][1]?></td><td><?=$teamArray[$index][2]?></td></tr>
                        <?php 
                        
                    ?></table>
                    <a href="index.php">Go back to Index</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END CSV Part-->


    <!-- javascript -->
    <script src="..\..\Orion Aerospace Dynamics\js\bootstrap.bundle.min.js"></script>
    <script src="..\..\Orion Aerospace Dynamics\js\smooth-scroll.polyfills.min.js"></script>
    <script src="..\..\Orion Aerospace Dynamics\js\gumshoe.polyfills.min.js"></script>
    <!-- Main Js -->
    <script src="..\..\Orion Aerospace Dynamics\js\app.js"></script>
</body>

</html>
