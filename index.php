<!doctype html>
<html>
<head>
	<title><?php include('inc/title.txt'); ?></title>
	<meta name="description" content="Welcome to Alpha Men's Edge Nutrition">
	<meta name="keywords" content="Alpha Men's Edge, Lose weight! Think Straight! Feel Great!">
	<meta name="viewport" content="width=device-width">
	
	<link rel="stylesheet" href="agile_carousel.css" type='text/css'>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.js"></script>
	<script src="carousel/agile_carousel.alpha.js"></script>
	
	<script>
	    $.getJSON("carousel/agile_carousel_data.php", function (data) {
		$(document).ready(function () {
		    $("#basic_slideshow").agile_carousel({
			carousel_data: data,
			carousel_outer_height: 317,
			carousel_height: 228,
			slide_height: 230,
			carousel_outer_width: 379,
			slide_width: 480,
			transition_type: "fade",
			timer: 4000
		    });
		});
	    });
	</script>
	
<!--<link rel="shortcut icon" type="image/x-icon" href="images/icons/favicon.ico">-->
</head>
<body>
<?php include('inc/icons.php');?>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <div id="wrapper">
    <?php include('inc/header.php'); ?>
<!--    <div id="extend">
    </div>-->
    <div id="content">
      <?php include('inc/nav.php'); ?>
      <div id="top-bg"></div>
      <div id="content-wrapper">
	<h1>Welcome to Alpha Men’s Edge Nutrition</h1>
	<div id="carousel"><div class="slideshow" id="basic_slideshow"></div></div>
	
	
	<h2>Lose weight! Think Straight! Feel Great!</h2>
	<p>
	In today's high stress environment, more and more people are seeking treatment for fatigue, weight loss and an overall sense of well being. Extensive research over the past decade has shown that all these issues, and more, may be treatable. Since this site is dedicated to men and healthy aging, we will focus on just how easy these issues are to address.
	</p> 
	<p>
	The solution, more often than not, is addressing low testosterone; scientifically termed hypogonadism. This loss of testosterone occurs at a rate of about one to two percent a year after age 30. Additionally, the environment, our diets and stress also conspire to deplete this valuable hormone, leaving us with all kinds of progressively worsening health conditions. 
	</p>
	<div id="clear"></div>
	<div style="float: left; width: 241px;">
		<img id="boost" src="images/product.jpg">
		<a href="order-now.php" id="cta"><img src="images/cta.jpg"></a>
		<p style="font-size: 30px; margin: 25px 0 0 25px; color: #343434;">877-743-2636</p>
	</div>
	<div style="width: 520px; float: right;">
		<p>To combat this, we have formulated TEST-BOOST X with ingredients that are proven to provide the following benefits:</p>
		<div id="list-border"></div>
		
		
		<ul id="list">
			<li>Deeper, more sound sleep</li>
			<li>Increased bone density</li>
			<li>Increased lean muscle mass</li>
			<li>Increased libido</li>
			<li>Increased motivation</li>
			<li>Increased red blood cell production</li>
			<li>Increased sense of well being</li>
			<li>Increased sexual stamina</li>
			<li>Mental acuity and clarity</li>
			<li>Weight loss (fat)</li>
		</ul>
		<p> 

I challenge you to find a man who does not want every one of the benefits you can get from maintaining healthy testosterone levels. These are characteristics of nearly every successful "go-getter" and entrepreneur; something I call the Alpha Men's Edge and you too can obtain them. Stop waiting and live life as it was meant to be lived!</p>
	<h2>Quality, Potency and Value</h2>
	<p>Our commitment to you: Test-Boost X (TBX) has ingredients that are backed by studies published in the British Journal of Sports Medicine, both The Asian and International Journal of Andrology, as well as The Journal of International Society of Sports.</p>
	<p>MADE IN THE U.S.A.! - some ingredients are imported due to the fact they only grow, or the most potent species are found, in certain regions of the globe.</p>
	<p>TBX contains the same ingredients that are in the most popular body building and male enhancement supplements, yet when you compare the number and quality of effective ingredients, you will not find a better product for a better price than ours.</p>
	<p>Our Partners</p>
	<img src="images/partners.png">
	<p style="font-size: 10px;">Disclaimers: The statements have not been evaluated by the FDA. Although there are no known side effects for using anything in our product, you should always consult your doctor or medical professional before taking any supplement. If you feel you are having a reaction to this product, dial 911 or your local emergency services.</p>
	</div><!--end float right div-->
	<div id="clear"></div>
     </div>
    </div>
	<div id="content-bottom"></div>
  </div>
  <?php include('inc/footer.php'); ?>
</body>
</html>
