<?php

/*
	Simple Email Script
  6/25/13
  https://github.com/code-for-coffee
*/

session_start();

$var				= $_POST['location'];
/* if you would like to add more variables:
    $variable     = $_POST['variableFromHTML'];
    assuming that the form item name is variableFromHTML
*/

// build the email headers
$recipient 	= 'rwells@innflux.com';
$subject 	  = 'Random Subject Here';
$headers 	  = "From: god@github.com\r\n";
$headers 	 .= "Reply-To: octocat@github.com\r\n";
$headers 	 .= "CC: meow@meow.com\r\n";
$headers 	 .= "MIME-Version: 1.0\r\n";
$headers 	 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// build the email subject
$message 	 = '<b>Something Here</b>';
$message 	.= '<br><br>';
$message	.='<em>We have important news!</em><br><br>';
$message	.='Let us discuss variables! ' . $var . ' is awesome, no?';

// send the email out
mail($recipient, $subject, $message, $headers);
echo('Echo your confirmation here.');


?>
