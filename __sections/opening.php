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

<section id="opening">
<p>Good <?php echo $timeOfDay; ?>,</p>
<blockquote>
“A designer is an emerging synthesis of artist, inventor, mechanic, objective economist and evolutionary strategist”.<sup>1</sup>
</blockquote>
<p>I am a designer out to add to the good in the world by designing a new language<sup>2</sup> along side extrodinarily talented people,<sup>3</sup> contemplating the why and how,<sup>4</sup> and by experimenting with musical&nbsp;experiences.<sup>5</sup></p>
<!--
<p>They say good guys finish last but the truth is, good guys take the long road. We want to change the world, and you can't do that by cutting corners. You need to work from the heart, do things that you believe in and work with people that inspire you<sup>1</sup>. You need to rock and roll and then, give your music away for free<sup>2</sup>. And, it doesn't hurt to challenge expectations every now and again.</p>
<p>A designer is an emerging synthesis of artist, inventor, mechanic, objective economist and evolutionary strategist.<sup>3</sup> I'm a designer through finding solutions in order to make the world a little better.</p>
-->

<aside>
  <dl>
    <dt>References</dt>
    <dd><sub>1.</sub> <a href="http://en.wikipedia.org/wiki/Buckminster_Fuller">Buckminster Fuller</a></dd>
    <dd><sub>2.</sub> <a href="http://www.thenounproject.com">The Noun Project</a></dd>
    <dd><sub>3.</sub> <a href="http://www.simplehonestwork.com">Simple.Honest.Work.</a></dd>
    <dd><sub>4.</sub> <a href="http://www.qtrqtrqtrly.com">Quarter Quarter Quarterly</a></dd>
    <dd><sub>5.</sub> <a href="http://www.glittermouse.com">Glittermouse</a></dd>
  <dl>
</aside>
</section>
