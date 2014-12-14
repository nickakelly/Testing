<!doctype html>
<html>
<head>

 
<head> 
 
<title>Get A Quote - <?php include('inc/title.txt'); ?></title> 
 
<meta name="keywords" content="San Diego Web Design, Web Designer, Web Programmer"> 
<meta name="description" content="Creative Kilter is a Web Design and Development company based in the San Diego metropolitan area - 619 384 6677" > 


<?php include('inc/includes.php'); ?>


</head>
<body onload="resizeWrapper()">


<header>
     <div id="header">
          <?php include('inc/nav.php') ; ?>
     </div>
     <?php// include('inc/header.php') ; ?>
     
</header>
<div id="wrapper">
     <div id="push"></div>
     <h1>Get A Quote</h1><?php include('inc/contact.php'); ?>
     <div id="h1-border"></div>
     <div id="content">
        <p>Please enter your information bellow and we will get back to you with a free quote. You can also email us at <!--maybe contact@creativekilter.com -->nick@creativekilter.com or call at 619 384 6677.</p>
        <form method="post">
            <?php include('inc/contact_form.php'); ?>
        </form>
     </div>
</div>
<?php include('inc/footer.php') ?>
</body>
</html>