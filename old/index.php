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
  <div class="container">
    <div class="twelve columns offset-by-two">
    <?php //require_once "includes/rss.php"; ?>
    <?php include('includes/navigation.php'); ?>
    <section id="opening" >
    <header>
        <h1>
         <a href="/"><img id="logo" class="" src="images/gg_logo.svg" width="50px"height="50" /></a>
            <em>Geremy Good</em>
        </h1>
        <h2>Good <?php echo $timeOfDay; ?>,</h2>
          <p>They say good guys finish last but the truth is, good guys take the long road. We want to change the world, and you can't do that by cutting corners. You need to work from the heart, do things that you believe in and work with people that inspire you<sup>1</sup>. You need to rock and roll and then, give your music away for free<sup>2</sup>. And, it doesn't hurt to challenge expectations every now and again.</p>
          <p>A designer is an emerging synthesis of artist, inventor, mechanic, objective economist and evolutionary strategist.<sup>3</sup> I'm a designer through finding solutions in order to make the world a little better.</p>
          <sub>1: <a href="http://www.simplehonestwork.com">Simple.Honest.Work.</a></sub>
          <sub>2: <a href="http://www.glittermouse.com">Glittermouse</a></sub>
          <sub>3: <a href="http://en.wikipedia.org/wiki/Buckminster_Fuller">Buckminster Fuller</a></sub>
       <!-- <p>I&rsquo;m a designer, a thinker and a maker bent on changing the world in seemingly imposible ways. It is my nature to do good work from the heart. I spend much of my time doing <a href="http://www.simplehonestwork.com">Simple.Honest.Work.</a> with some of the best designers and thinkers. I&rsquo;m constantly sketching and inventing new ways to look at problems. Outside of the studio, my music project <a href="http://www.glittermouse.com">Glittermouse</a> challenges your mind and gives our music away for free. I&rsquo;m always interested in collaborating and hope we can work together someday. </p>-->
          </header>
    </section>
    <section id="philosophy">
        <h1>Philosophy</h1>
        <ul class="links">
            <li><a href="http://www.project018.com">Project 018</a></li>
            <li><a href="http://everydayotherthings.com/?tag=jeremy-mumenthaler">Everyday Other Things</a></li>
        </ul>
        <blockquote>“The World is my country, all man–kind are my bretheren, and to do good is my religion.” <sup>4</sup></blockquote>
        <p>Maybe philosophy isn't the perfect word, but I think we develop our views of the world through reading, writing and sharing ideas. I do not have one strict philosophy. I am interested in exploring new ideas and challenging myself to greater things. I enjoy discussing different points of view and being proven wrong. You can explore some of these ideas through the groups I collaboratate with.
</p>
        <sub>4: Thomas Paine</sub>

        <div class="articles">
			<?php //getFeed("http://everydayotherthings.com/?feed=rss2&tag=jeremy-mumenthaler"); ?>
			<?php //getFeed("http://project018.com/?feed=rss2&author=jeremy-mumenthaler"); ?>
        </div>
<!--        <a class="view-more" href="/philosophy/">View More Articles</a>-->
    </section>

    <section id="inspiration">
        <h1>Inspiration</h1>
        <blockquote>“Genius is one percent inspiration and ninety-nine percent perspiration.” <sup>5</sup></blockquote>
       <p>Before I get to the heavy lifting, I look for common threads throughout the world. I do however feel that having too close of an eye on your peers only hurts your imagination.</p>
        <div id="inspiration-box">

        </div>
        <sub>5: Thomas Edison</sub>
    </section>


<!--
    <section id="create">
      <h1>Creations</h1>
      <p></p>
      <ul>
        <li>Glittermouse</li>
      </ul>
    </section>
-->
<!--
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
        <figure id="time">
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
-->
    <section id="laboratory">
        <h1>Laboratory</h1>
       <ul class="links">
            <li><a href="https://github.com/GeremyGood">Github</a></li>
            <li><a href="http://jsfiddle.net/GeremyGood/fiddles/" target="_blank">JsFiddle</a></li>
            <li><a href="http://codepen.io/Jmumenthaler" target="_blank">Codepen</a></li>
        </ul>
        <blockquote>“The true method of knowledge <br/>is experiment.” <sup>6</sup></blockquote>
        <p>I use experimentation with mechanics, ideology and aethstetic to try to gain better understanding. Sometimes they are fun little ideas created in an afternoon, others are bits of a much larger idea.</p>
 
        <div class="row">
        <article class="experiment ten columns ">
            <h2>Phone Numbers</h2>
            <p>A little exploration on how phonenumbers should be rendered on websites.</p>
            <a href="/laboratory/phone-number/">View Experiment</a>
        </article>
        <article class="experiment ten columns ">
            <h2>The Real American Craftsman</h2>
            <p>An exploration with Illustrator Darrin Higgins admiring real craftsmanship.</p>
            <a href="/laboratory/real-american-craftsman/">View Experiment</a>
        </article>
        <article class="experiment ten columns ">
            <h2>Integer Hunt</h2>
            <p>A scavenger hunt game of incrementing numbers in the real world.</p>
            <a href="/laboratory/integerhunt/" targe="_blank">View Experiment</a>
        </article>
        </div>
        
      <sub>6: <a href="http://en.wikipedia.org/wiki/William_Blake">William Blake</a></sub>
    </section>

    <section id="work">
      <h1>Work</h1>
      <ul class="links">
        <li><a href="http://www.linkedin.com/in/jeremymumenthaler/" target="_blank">LinkedIn</a></li>
        <li><a href="http://www.thenounproject.com/jeremy" target="_blank">The Noun Project</a></li>
      </ul>
      <blockquote>“It is your work in life that is <br/>the ultimate seduction.” <sup>7</sup></blockquote>
      <p>I work full time at <a href="http://www.simplehonestwork.com">Simple.Honest.Work.</a> and <a href="http://www.thenounproject.com">The Noun Project</a> on top of many side projects and consulting. I work with some of the most talented people in the world on projects I believe in.</p>
      <div class="row">
      <ul class="four columns">
        <h3>Projects</h3>
        <li><a href="http://www.thenounproject.com">The Noun Project</a></li>
        <li><a href="http://www.turbovote.org">TurboVote</a></li>
        <li><a href="http://www.fastcodesign.com">Fast Co. Design</a></li>
        <li><a href="http://www.miessociety.org">Mies van der Rhoe Society</a></li>
      </ul>
      <ul class="four columns">
        <h3>Clients</h3>
        <li>Nike</li>
        <li>Fast Company</li>
        <li>New America Foundation</li>
        <li>Red Associates</li>
      </ul>
    </div>
    <sub>7: <a href="http://en.wikipedia.org/wiki/Pablo_Picasso">Pablo Picasso</a></sub>
    </section>

    <section id="contact">
        <h1>Contact</h1>
        <ul class="links">
            <li><a href="http://www.twitter.com/geremygood" target="_blank">Twitter</a></li>
            <li><a href="http://www.facebook.com/geremygood" target="_blank">Facebook</a></li>
        </ul>
        <blockquote>“My idea of good company is the company of clever, well-informed people who have a great deal of conversation; that is what <br/>I call good company.” <sup>8</sup></blockquote>
        <p>Start a conversation by asking me anything <a href="http://clicktotweet.com/36x_H" target="_blank">@GeremyGood</a>. For more personal inquiry, email <a href="mailto:me@geremygood.com?subject=Good%20Day,%20A%20message%20from%20GeremyGood.com">me@GeremyGood.com</a></p>
        <p class="phone">ring me at (312) 869-4646</p>
<sub>8: <a href="http://en.wikipedia.org/wiki/Jane_Austen" target="_blank">Jane Austen</a></sub>
    </section>
<!--
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
-->
<?php include('includes/footer.php'); ?>
<div id="phone-number">
    <h2>Geremy Good</h2>
    <h1>(312) 869-4646</h1>
</div>

</div>
</div>
</body>


	<script>
	
	//jQuery extension to fetch an rss feed and return it as json via YQL
	//created by dboz@airshp.com
	(function($) {
	  
		$.extend({
			feedToJson: function(options, callback) {
				if ($.isFunction(options)) {
				  callback = options;
				  options = null;
				}
				options = $.extend($.feedToJson.defaults,options);
				var url = options.yqlURL + options.yqlQS + "'" + encodeURIComponent(options.feed) + "'" + "&_nocache=" + options.cacheBuster;
				return $.getJSON(url, function(data){  
						//console.log(data.query.results);
						data = data.query.results;
						$.isFunction(callback) && callback(data); //allows the callback function to be the only option
						$.isFunction(options.success) && options.success(data);
					}); 
			}
		});
	  
	  //defaults
	  $.feedToJson.defaults = {
	  	yqlURL : 'http://query.yahooapis.com/v1/public/yql',  //yql 
	  	yqlQS : '?format=json&callback=?&q=select%20*%20from%20rss%20where%20url%3D',  //yql query string
	  	feed:'http://instagr.am/tags/tacos/feed/recent.rss', //instagram recent posts tagged 'tacos'
	  	cachebuster: Math.floor((new Date().getTime()) / 1200 / 1000), //yql caches feeds, so we change the feed url every 20min
	  	success:null //success callback 
	  }; 
	  
	})(jQuery);
	
	
	// Get Gimmie Bar Data
	$(document).ready(function($){
	
		var defaultUser = 'jmumenthaler';
	
		function gimmebar(user){
      user = user || defaultUser;
			$.feedToJson({
				feed:'https://gimmebar.com/public/feed/user/'+user+'/collection/firehose',
				success: function(data){
					//console.log(data);
					var $holder = $('<div class="gimmebarFeed"></div>');
          if(data.item.length > 1) data = data.item;
          
//          console.log(data[1].title);

          var loop=1;
          for (loop=1;loop<=9;loop++){
            console.log(loop);
            console.log( data[loop].title );
            if( data[loop].thumbnail ){
            var $thumb = $('<img src="'+data[loop].thumbnail.url+'"/>');         
						var $desc = $('<div class="item"></div>');
            $desc.html($thumb);
            };

            $('#inspiration-box').append($desc);

          }
//					$('body .gimmebarFeed').remove();
          $('body .form').after($holder);

				}
			});
    }
      gimmebar('jmumenthaler');

		
	});	
	</script>

</html>
