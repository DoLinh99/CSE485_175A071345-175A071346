<?php
$to = "dungkt@wru.vn";
$subject = "Send Email from Localhost";
$txt = "Hello Teacher!";
$headers = "From: lyntt72@wru.vn" . "\r\n" .
"CC: lyntt72@wru.vn";
mail($to,$subject,$txt,$headers);
?>
