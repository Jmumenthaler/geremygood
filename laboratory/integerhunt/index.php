<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
  <title>Integer Hunt</title>
	<meta name="description" content="">
	<meta name="author" content="Geremy Good">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">
	<link rel="stylesheet" href="stylesheets/stylish.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>

<?php
// grab numbers from folder
$files = glob("numbers/*.*");
$count = count($files);
?>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->
  <div id="bar" class="container">
<!--
      <div id="about" class="fifteen columns">
        <p>It all started with numbers.</p>
      <h3>Rules</h3>
      <ol>
        <li>Must find numbers in numarical order.</li>
        <li>Must not be part of a sequence.</li>
        <li>Must be found, not manipulated.</li>
        <li>Must be representing the number exactly. No decimals, colins or extra numbers.</li>
      </ol>
        
      </div>

-->
      <div class="one-third column">
        <a id="aboutNav" href="#about">About</a>
        <a href="github">GITHUB</a>
      </div>
      <div id="bar-right" class="one-third column">
        <a href="https://twitter.com/share" class="twitter-share-button" data-via="GeremyGood" data-related="GeremyGood">Tweet</a>
        <a href="http://pinterest.com/pin/create/button/?url=integerhunt.geremygood.com&media=integerhunt.geremygood.com&description=A%20scavenger%20hunt%20for%20numbers." class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a>
<div class="fb-like" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true" data-colorscheme="dark" data-font="lucida grande"></div>
      </div>
      <div id="bar-middle" class="one-third column">
        <input id="skip" type="text" placeholder="Skip to a number" name="skip"/>
      </div>



    </div>
  <div class="container">

    <div class="sixteen columns">

    <div>
        <h1>Integer Hunt</h1>
        <h2><?php echo $count; ?></h1>
    </div>

    <ul id="start-counting" class="fifteen columns alpha">

<?php 

for ($i=0; $i<$count; $i++) { 
  $num = $i+1;
  $numFile = $files[$i];
  if( $numFile >= 'alt_0007.jpg'){
  echo '<li id="'.$num.'" class="three columns omega"><a href=""><img src="'.$numFile.'" alt="'.$num.'" height="150" />'."</a></li>"; 
  }
}
 
?>
    </ul>
	</div><!-- container -->



	<!-- JS
	================================================== -->
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script src="javascripts/tabs.js"></script>
  <script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
	<script src="javascripts/interaction.js"></script>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- End Document
================================================== -->
</body>
</html>
