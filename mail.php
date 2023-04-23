<?php


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$emailheader = "From:".$name."<".$email.">\r\n";

$recipient = "bichtram02101986@gmail.com";
mail($recipient, $subject, $message, $emailheader)
or die("ERROR!"):
echo '



TRAM MAP DANG LAM MAIL



';




?>