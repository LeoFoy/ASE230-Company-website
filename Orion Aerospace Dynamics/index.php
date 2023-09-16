<?php
    require_once('../lib/textFunc.php');
    require_once("../lib/jsonFunc.php");
    $array_json = jsonFiletoArray("../data/data.json");
    include('..\lib\csvFunc.php');
    $awardArray = csvFiletoArray('..\data\awards.csv');
    $teamArray = csvFiletoArray('..\data\team.csv');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <?php displayText(6);?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta content="Themesbrand" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" >

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" >

    <!-- icon -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css">

    <link href="css/style.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/colors/cyan.css" id="color-opt">
</head>

<body data-bs-theme="light">

    <!--START TXT Part-->
    <section class="section bg-home home-half" id="home" data-image-src="images/bg-home.jpg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-white text-center">
                    <?php displayText(1); ?>
                </div>
            </div>
        </div>
    </section>
	
    <section class="section bg-home home-half" id="home" data-image-src="images/bg-home.jpg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-white text-center">
                    <?php
                        displayText(2);
                        displayText(3);
                        displayText(4);
                        displayText(5);
                    ?>
		        </div>
	        </div>
	    </div>
    </section>
    <!--END TXT Part-->

    <!--START JSON Part-->
    <section class="section" id="features">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="features-box mt-5 mt-lg-0">
                        <?php displayText(7);?>
						<?php for($i=0; $i<count($array_json); $i++) { ?>
							<p class="text-muted web-desc"><b><?php echo $array_json[$i]['Product'].': '.$array_json[$i]['Product_Desc']; ?></b></p>
                            <?php displayText(8); ?>
							<ul class="text-muted list-unstyled mt-4 features-item-list">
								<li class=""><?php echo $array_json[$i]['Applications_names'][0].': '.$array_json[$i]['Application_desc'][0]; ?></li>
								<li class=""><?php echo $array_json[$i]['Applications_names'][1].': '.$array_json[$i]['Application_desc'][1]; ?></li>
							</ul>
							<br />
							<br />
								
						<?php } ?>
                        
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END JSON Part-->

	<!--START CSV Part-->
    <section class="section" id="features">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="features-box mt-5 mt-lg-0">
                        <?php displayText(9); ?>
                        <?php foreach ($awardArray as $award) { ?>
                        <p class="text-muted web-desc"><?= $award[0] ?></p>
                        <ul class="text-muted list-unstyled mt-4 features-item-list">
                            <li class=""><?= $award[1] ?></li>
                        </ul>
                    <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--START CSV Part-->
    <section class="section" id="features">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="features-box mt-5 mt-lg-0">
                        <?php displayText(10);?>
                        <?php foreach ($teamArray as $member) {
                            ?>
                        <h4><?=$member[0]?></h4>  
                        <h5><?=$member[1]?></h5>
                        <p class="text-muted web-desc"><?=$member[2]?></p>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!--END CSV Part-->

    <!-- CONTACT FORM START-->
    <section class="section " id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <?php displayText(11); ?>
                    <div class="section-title-border mt-3"></div>
                    <?php displayText(12); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mt-4 pt-4">
                        <?php 
                            displayText(13); 
                            displayText(14);
                            displayText(15);
                        ?>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="custom-form mt-4 pt-4">
                        <form method="post" name="myForm" onsubmit="return validateForm()">
                            <p id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Your name*">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="email" id="email" type="email" class="form-control"
                                            placeholder="Your email*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <input type="text" class="form-control" id="subject"
                                            placeholder="Your Subject.." />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <textarea name="comments" id="comments" rows="4" class="form-control"
                                            placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-end">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary"
                                        value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT FORM END-->

    <!--START FOOTER-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mt-4">
                    <a class="footer-logo text-uppercase" href="#">
                        <i class="mdi mdi-alien"></i>Hiric
                    </a>
                    <div class="text-muted mt-4">
                        <ul class="list-unstyled footer-list">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <h4>Support</h4>
                    <div class="text-muted mt-4">
                        <ul class="list-unstyled footer-list">
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Disscusion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--END FOOTER-->

    <!-- javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/smooth-scroll.polyfills.min.js"></script>
    <script src="js/gumshoe.polyfills.min.js"></script>
    <!-- Main Js -->
    <script src="js/app.js"></script>
</body>

</html>
