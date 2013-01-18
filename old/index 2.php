<?php include('includes/head.php'); ?>
<?php 
    $currentTime = date("H");
    if( $currentTime > 5 && $currentTime < 12 ){
        $timeOfDay = 'Morning';
    }else if( 17 > $currentTime && $currentTime > 12){
        $timeOfDay = 'Afternoon';
    }else if( $currentTime > 17 && $currentTime < 24 || $currentTime >0 && $currentTime < 5 ){
        $timeOfDay = 'Evening';
    }else{
        $timeOfDay = 'Day';
    };
?>
<body class="<?php // print($pageName); ?>">
    <?php //require_once "includes/rss.php"; ?>
    <?php include('includes/navigation.php'); ?>
    <section id="opening">
    <header>
        <h1>
<!--            <object data="images/gg_logo.svg" width="200" height="200"
            type="image/svg+xml"
            codebase="http://www.adobe.com/svg/viewer/install/" ></object>
-->         <a href="/"><img id="logo" class="" src="images/gg_logo.svg" width="50px"height="50" /></a>
            <em>Geremy Good</em>
        </h1>
        <h2>Good <?php echo $timeOfDay; ?>,</h2>
        <p>I&rsquo;m a designer, a thinker and a maker bent on changing the world in seemingly imposible ways. It is my nature to do good work from the heart. I spend much of my time doing <a href="http://www.simplehonestwork.com">Simple.Honest.Work.</a> with some of the best designers and thinkers. I&rsquo;m constantly sketching and inventing new ways to look at problems. Outside of the studio, my music project <a href="http://www.glittermouse.com">Glittermouse</a> challenges your mind and gives our music away for free. I&rsquo;m always interested in collaborating and hope we can work together someday. </p>
          </header>
    </section>
    <section id="philosophy">
        <h1>Philosophy</h1>
        <ul class="links">
            <li><a href="">Project 018</a></li>
            <li><a href="http://everydayotherthings.com/?tag=jeremy-mumenthaler">Everyday Other Things</a></li>
        </ul>
        <p>Good is my religion</p>
        <p>I do not have one philosophy. I am interested in always exploring new options and challenging myself to do greater things. I enjoy discussing different view points and being wrong. I write for a few different sites.</p>

        <div class="articles">
			<?php //getFeed("http://everydayotherthings.com/?feed=rss2&tag=jeremy-mumenthaler"); ?>
			<?php //getFeed("http://project018.com/?feed=rss2&author=jeremy-mumenthaler"); ?>
        </div>
        <a class="view-more" href="/philosophy/">View More Articles</a>
    </section>
    <section id="design">
        <h1>Design</h1>
        <ul class="links">
            <li><a href="">Dribbble</a></li>
            <li><a href="http://www.flickr.com/geremygood">Flickr</a></li>
        </ul>
        <div class="articles">
        <article class="design">
          <a href="articles/">
            <h2>Something</h2>
          </a>
        </article>
        <article class="design">
          <a href="articles/">         
            <h2>Mies Society</h2>
          </a>
        </article>
        <article class="design">
          <a href="articles/">
            <h2>Glittermouse</h2>
          </a>
        </article>
        <a class="view-more" href="/design/">View More Projects</a>
          <div id="stats">
        <figure id="skills">
            <meter value="70" class="photoshop"><b>Photoshop</b></meter>
            <meter value="60" class="indesign"><b>InDesign</b></meter>
            <meter value="80" class="illustrator"><b>Illustrator</b></meter>
            <meter value="70" class="sketching"><b>Sketching</b></meter>
            <meter value="80" class="frontend"><b>Frontend</b></meter>
            <meter value="60" class="reading"><b>Reading</b></meter>
            <meter value="40" class="backend"><b>Backend</b></meter>
            <meter value="80" class="interaction"><b>Interaction</b></meter>
            <meter value="70" class="learning"><b>Learning</b></meter>
            <figcaption>
                <p><em>Fig. 1.0:</em> Skills </p>
            </figcaption>
        </figure>
        <figure id="time"><!--  Minutes of Day = 720  -->
            <meter value="70" class="photoshop hold"><b class="pie">Photoshop</b></meter>
            <meter value="60" class="indesign hold"><b class="pie">InDesign</b></meter>
            <meter value="80" class="illustrator hold"><b class="pie">Illustrator</b></meter>
            <meter value="70" class="sketching hold"><b class="pie">Sketching</b></meter>
            <meter value="80" class="frontend hold"><b class="pie">Frontend</b></meter>
            <meter value="60" class="reading hold"><b class="pie">Reading</b></meter>
            <meter value="40" class="backend hold"><b class="pie">Backend</b></meter>
            <meter value="80" class="interaction hold"><b class="pie">Interaction</b></meter>
            <meter value="70" class="learning hold"><b class="pie">Learning</b></meter>
            <figcaption>
                <p><em>Fig. 2.0:</em> Skills Over Time </p>
            </figcaption>
        </figure>
        </div>

        </div>
    </section>
    <section id="laboratory">
        <h1>Laboratory</h1>
        <ul class="links">
            <li><a href="https://github.com/GeremyGood">Github</a></li>
            <li><a href="http://jsfiddle.net/GeremyGood/fiddles/" target="_blank">JsFiddle</a></li>
        </ul>
        <div class="articles">
        <article class="experiment">
            <h2>Browser Letterpress</h2>
        </article>
        <article class="experiment">
            <h2>Tools</h2>
        </article>
        <article class="experiment">
            <h2>Prallax</h2>
        </article>
        </div>
        <a class="view-more" href="/laboratory/">View More Experiments</a>
    </section>
    <section id="contact">
        <ul class="links">
            <li><a href="http://www.twitter.com/geremygood" target="_blank">Twitter</a></li>
            <li><a href="http://www.facebook.com/jmumenthaler" target="_blank">Facebook</a></li>
        </ul>
        <p class="email"><a href="mailto:me@geremygood.com?subject=Good%20Day,%20A%20message%20from%20GeremyGood.com">Me@GeremyGood.com</a></p>
        <p class="phone">847-417-0189</p>
        <form name="contact" method="post" action="email.php">
          <h3>Geremy,</h3>
          <p>I was looking at your website, and wanted to contact you. I was
          <select name="concerning" id="concerning">
            <option disabled="disabled">Concerning</option>
            <option>Thinking about collaborating with you.</option>
            <option>wondering,</option>
            <option>wanted to tell you what I thought about</option>
          </select>
          <textarea></textarea>
          </p>
          <h3>Sincerely,</h3>
          <input type="text" placeholder="Your Name" />
          <input type="submit" value="Sign it"/>
        </form>

<form name="form1" method="post" action="email.php">
<table width="100%" border="0" cellspacing="1" cellpadding="3">
<tr>
<td width="16%">Subject</td>
<td width="2%">:</td>
<td width="82%"><input name="subject" type="text" id="subject" size="50"></td>
<td><textarea name="detail" cols="50" rows="4" id="detail"></textarea></td>
</tr>
<tr>
<td>Name</td>
<td>:</td>
<td><input name="name" type="text" id="name" size="50"></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><input name="customer_mail" type="text" id="customer_mail" size="50"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
</tr>
</table>
</form>
</td>
</tr>
</table>

    </section>
    <section id="shop">
        <h1>Shop</h1>
        <ul class="links">
            <li><a href="http://store.glittermouse.com">Glittermouse</a></li>
            <li><a href="http://store.thenounproject.com">The Noun Project</a></li>
        </ul>
        <div class="articles">
        <article class="product">
            <h2>Letterpress Print</h2>
        </article>
        <article class="product">
            <h2>Sculputure</h2>
        </article>
        <article class="product">
            <h2>Glittermouse EP's'</h2>
        </article>
        </div>
        <a class="view-more" href="/shop/">View More Items</a>
    </section>
<?php include('includes/footer.php'); ?>
<div id="phone-number">
    <h2>Geremy Good</h2>
    <h1>847-417-0189</h1>
</div>
</body>
</html>
