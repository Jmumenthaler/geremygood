<?php

function getFeed($blog_url) {
    // define the namespaces that we are interested in
    $ns = array
    (
            ‘content’ => "http://purl.org/rss/1.0/modules/content/",
            ‘wfw’ => "http://wellformedweb.org/CommentAPI/",
            ‘dc’ => "http://purl.org/dc/elements/1.1/"
    );
    // obtain the articles in the feeds, and construct an array of articles

    $articles = array();

    // step 1: get the feed


    $rawFeed = file_get_contents($blog_url);
    $xml = new SimpleXmlElement($rawFeed);

    // step 2: extract the channel metadata

    $channel = array();
    $channel[‘title’]       = $xml->channel->title;
    $channel[‘link’]        = $xml->channel->link;
    $channel[‘description’] = $xml->channel->description;
    $channel[‘pubDate’]     = $xml->pubDate;
    $channel[‘timestamp’]   = strtotime($xml->pubDate);
    $channel[‘generator’]   = $xml->generator;
    $channel[‘language’]    = $xml->language;

    // step 3: extract the articles

    foreach ($xml->channel->item as $item)
    {
            $article = array();
            $article[‘channel’] = $blog;
            $article[‘title’] = $item->title;
            $article[‘link’] = $item->link;
            $article[‘comments’] = $item->comments;
            $article[‘pubDate’] = $item->pubDate;
            $article[‘timestamp’] = strtotime($item->pubDate);
            $article[‘description’] = (string) trim($item->description);
            $article[‘isPermaLink’] = $item->guid[‘isPermaLink’];

            // get data held in namespaces
            $content = $item->children($ns[‘content’]);
            $dc      = $item->children($ns[‘dc’]);
            $wfw     = $item->children($ns[‘wfw’]);

            $article[‘creator’] = (string) $dc->creator;
            foreach ($dc->subject as $subject)
                    $article[‘subject’][] = (string)$subject;

            $article[‘content’] = (string)trim($content->encoded);
            $article[‘commentRss’] = $wfw->commentRss;

            // add this article to the list
            $articles[$article[‘timestamp’]] = $article;
            echo "
            <article class='writing'>
        	  <h2><a href='$article[‘link’]' title='$article[‘title’]'>" . $article[‘title’] . "</a></h2>
        	  <p>$article[‘description’]</p>
        	  <a href='#' class='showcontent' >Show Content</a>
        	  <div class='content'>
                $article[‘content’] 
        	  </div>
        	</article>";
    }


    // at this point, $channel contains all the metadata about the RSS feed,
    // and $articles contains an array of articles for us to repurpose	
	

//	$content = file_get_contents($feed_url);
	
//	$x = new SimpleXmlElement($content);

    
//	echo "";
/*	
	foreach($x->channel->item as $entry) {
    	$entry[‘creator’] = $entry->dc->creator;
		echo "
        <article class='writing'>
		  <h2><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></h2>
		  <p>'$entry->pubDate'</p>
		  <p>'$entry->creator'</p>
		</article>";
		}
//	echo "";
*/
};
?>