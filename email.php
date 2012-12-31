<?php
// Contact subject
$subject ="$concerning"; 
// Details
$message="$detail";

// Mail of sender
$mail_from="$customer_mail"; 
// From 
$header="from: $name <$mail_from>";

// Enter your email address
$to ='me@geremygood.com';

$send_contact=mail($to,$subject,$message,$header);

// Check, if message sent to your email 
// display message "We've recived your information"
if($send_contact){
echo "Thanks!";
}
else {
echo "ERROR";
}
?>
