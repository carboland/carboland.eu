<?php
$to = "info@carboland.eu";
$extra = "From: ".$_POST['email']."\r\nReply-To: ".$_POST['email']."\r\n";
$subject = "Message from ".$_POST['name']."";
$mess = "Name and Surname: ".$_POST['name']."\nEmail: ".$_POST['email']."\nPhone: ".$_POST['phone']."\nSubject: ".$_POST['subject']."\nMessage:\n".$_POST['text']."";
mail ($to, $subject, $mess, $extra);
?>
<html><head>
<meta http-equiv="refresh" content="0; url=request#contact">
<title>Redirection...</title>
</head><body></body></html>