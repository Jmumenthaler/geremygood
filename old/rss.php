<?php
# INSTANTIATE CURL.
$curl = curl_init();

# CURL SETTINGS.
curl_setopt($curl, CURLOPT_URL, "http://everydayotherthings.com/jeremy-mumenthaler/authorname/feed/");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 0);

# GRAB THE XML FILE.
$xmlTwitter = curl_exec($curl);

curl_close($curl);

# SET UP XML OBJECT.
$xmlObjTwitter = simplexml_load_string( $xmlTwitter );

$tempCounter = 0;

foreach ( $xmlObjTwitter -> item as $item )
{                    
    # DISPLAY ONLY 10 ITEMS.
    if ( $tempCounter < 11 )
    {
        echo "<li><a href=\"{$item -> guid}\">{$item -> title}</a></li>
";
    }

    $tempCounter += 1;
}
?>