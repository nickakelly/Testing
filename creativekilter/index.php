<!doctype html>
<html>
<head>

 
<head> 
 
<title><?php include('inc/title.txt'); ?></title> 
 
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
     <h1>Designed to Convert</h1><?php include('inc/contact.php'); ?>
     <div id="h1-border"></div>
     <div id="content">
          <p>There is a hole in my bucket</p>
          <section id="cta">
               <a id="cta-quote" href="get-a-quote.php"></a><span id="or"></span><a id="cta-portfolio" href="portfolio.php"></a>
          </section>

     </div>
</div>
<?php include('inc/footer.php') ?>
</body>
</html>