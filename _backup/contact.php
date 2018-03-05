<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "contact@newstandardpower.com";
$subject = "From New Standard Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
//echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#0099dd;'> Return Home</a>";
header('Location: http://newstandardpower.com');

?>