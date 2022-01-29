<?php

$sender_name = $_POST["name-surname"];
$sender_mail = $_POST["e-mail"];
$target_mail = "emrecanstk@gmail.com"
$subject = $_POST["subject"];
$message = "name: " . $sender_name . " <br> Message: " . $_POST["message"];

$mailtanim = "MIME-Version: 1.0";
$mailtanim .= "Content-type: text/html; charset=iso-8859-9";
$mailtanim .= "From: $name <$sender_mail>";
$mailtanim .= "Reply-To: $name <$sender_mail>";

mail($target_mail,$subject,stripslashes($message),$mailtanim);

echo "<center><font size=+3>Your e-mail has been sent successfully.</font></center>"

?>