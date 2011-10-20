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
        <p>I&rsquo;m a designer, a thinker and a maker bent on changing the world. It is my nature to do good work from the heart. I spend much of my time doing Simple.Honest.Work. with some of the best designers and thinkers. I&rsquo;m constantly sketching and inventing new ways to look at problems. Outside of the studio, my music project Glittermouse challenges your mind and gives our music away for free. I&rsquo;m almost always interested in collaborating and hope we can work together someday. </p>
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
        <a href="/philosophy/">View More Articles</a>
    </section>
    <section id="design">
        <h1>Design</h1>
        <ul class="links">
            <li><a href="">Dribbble</a></li>
            <li><a href="http://www.flickr.com/geremygood">Flickr</a></li>
        </ul>
        <div class="articles">
        <article class="design">
            <h2>Something</h2>
        </article>
        <article class="design">
            <h2>Mies Society</h2>
        </article>
        <article class="design">
            <h2>Glittermouse</h2>
        </article>
        <a href="/design/">View More Projects</a>
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
        <a href="/laboratory/">View More Experiments</a>
    </section>
    <section id="contact">
        <ul class="links">
            <li><a href="http://www.twitter.com/geremygood">Twitter</a></li>
            <li><a href="http://www.facebook.com/jmumenthaler">Facebook</a></li>
        </ul>
        <p>Email <a href="mailto:me@geremygood.com">Me@GeremyGood.com</a></p>
        <p>847-417-0189</p>
    </section>
    <section id="shop">
        <h1>Shop</h1>
        <ul class="links">
            <li><a href="">Box o' Zombies</a></li>
            <li><a href="">Glittermouse</a></li>
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
        <a href="/shop/">View More Items</a>
    </section>
<?php include('includes/footer.php'); ?>
<div id="phone-number">
    <h2>Geremy Good</h2>
    <h1>847-417-0189</h1>
</div>
</body>

<script>
$(document).ready(function(){
   $(function() { $('#main_navigation').localScroll({ duration: 800, easing:'easeInOutQuart' }); })

   $('figure#skills meter').each(function(){
       value = $(this).attr('value');
        $(this).css({'padding-top' : (value*2)+'px','padding-bottom': 0 });
        console.log(value);  
   });
   $('figure#skills meter').mouseenter(function(){
       var hovered = $(this).text().toLowerCase();
       $('figure#time .'+hovered+' b').addClass('hovered');
       });
       
       $('figure#skills meter').mouseleave(function(){
       var hovered = $(this).text().toLowerCase();
       $('figure#time .'+hovered+' b').removeClass('hovered');
       });
       
   $('figure#time meter b').mouseenter(function(){
       var hovered = $(this).text().toLowerCase();
       console.log(hovered);   
       $('figure#skills .'+hovered).addClass('hovered');
       });

       $('figure#time meter').mouseleave(function(){
       var hovered = $(this).text().toLowerCase();
       $('figure#skills .'+hovered).removeClass('hovered');
       });
      
      
    $('a.phone-number').click(function(){
        $('#phone-number').show();
    });
    $('#phone-number').click(function(){
        $(this).hide();
    });
    
    $('.showcontent').click(function(e){
        $(this).siblings('.content').fadeIn();
        e.preventDefault();
    });

});
</script>
</html>
