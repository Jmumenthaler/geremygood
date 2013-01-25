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

    <title>Current Time : Geremy Good </title>

  	<link rel="stylesheet" href="/stylesheets/normalize.css">
  	<link rel="stylesheet" href="/stylesheets/layout.css">

    <script type="text/javascript" src='/scripts/jquery-1.5.min.js'></script>
    <script type="text/javascript" src='/scripts/interaction.js'></script>

</head>

<body class="container" >

<nav>
<h1>
<time><?php

  $time = new DateTime('now', new DateTimeZone('UTC'));
  echo $time->format(' H:i:s'); //F j, Y

?></time>
</h1>
</nav>

<section id="clock">

</section>


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

