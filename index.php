<!DOCTYPE html>
<!--
01000111 01100101 01110010 01100101 01101101 01111001 
01000111 01101111 01101111 01100100 
-->
<head>
	  <meta name="author" content="Geremy Good - Jeremy Mumenthaler">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width">

    <link rel="author" href="humans.txt" />

    <title>Geremy Good</title>

  	<link rel="stylesheet" href="/stylesheets/normalize.css">
  	<link rel="stylesheet" href="/stylesheets/layout.css">

    <script type="text/javascript" src='/scripts/jquery-1.5.min.js'></script>
    <script type="text/javascript" src='/scripts/jquery.easing.1.3.js'></script>
    <script type="text/javascript" src='/scripts/jquery.localscroll-1.2.7-min.js'></script>
    <script type="text/javascript" src='/scripts/jquery.scrollTo-1.4.2-min.js'></script>
    <script type="text/javascript" src='/scripts/jquery.isotope.min.js'></script>
    <script type="text/javascript" src='/scripts/gimmie.js'></script>
    <script type="text/javascript" src='/scripts/jquery.cycle.lite.js'></script>
    <script type="text/javascript" src='/scripts/good.js'></script>
    <script type="text/javascript" src='/scripts/interaction.js'></script>

</head>

<body class="container" >

<nav>
  <ol>
    <li><h1><a href="#opening">Geremy <br/>Good</a></h1></li>
    <li><a href="#philosophy">Philosophy</a></li>
    <li><a href="#research">Research</a></li>
    <li><a href="#thequota">The Quota</a></li>
    <li><a href="#laboratory">Laboratory</a></li>
    <li><a href="#work">Work</a></li>
    <li><a href="#connect">Connect</a></li>
  </ol>
</nav>

<?php 

include('__sections/opening.php');
include('__sections/philosophy.php');
include('__sections/research.php');
include('__sections/thequota.php');
include('__sections/laboratory.php');
include('__sections/work.php');
include('__sections/connect.php');

include('__sections/friends.php');
include('__sections/organizations.php');

?>

</body>


<script type="text/javascript">
//Google Anlyitics
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28939505-1']);
  _gaq.push(['_setDomainName', 'geremygood.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();



</script>    

</html>
