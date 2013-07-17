<?php

/*
  Simple Email Script
  7/16/13
  https://github.com/code-for-coffee
*/


session_start();

// user defined variables - edit these yourself!
// this is who you want to send the email to + subject of it.
$recipient 			= "person@email.com";
$subject 	  		= "Website Contact Form";
$landing_page 		= "confirmation.php";		# where the user lands after submitting the form

// pre-defined variables use by the script
$usr_name		= $_POST["mail_name"];
$usr_email		= $_POST["mail_email"];
$usr_tel		= $_POST["mail_tel"];
$usr_comments	= $_POST["mail_comments"];
/* if you would like to add more variables:
    $variable     = $_POST["variableFromHTML"];
    assuming that the form item name is variableFromHTML
    example variable, if you have a form element with the name "var":
    $var				= $_POST["location"];
*/
$headers 	  	= "From: " . $usr_email . "\r\n";
//$headers 	 	.= "Reply-To: octocat@github.com\r\n";		# commented out, uncomment if you want to use
//$headers 	 	.= "CC: meow@meow.com\r\n";					# commented out, uncomment if you want to use
$headers 	 	.= "MIME-Version: 1.0\r\n";
$headers 	 	.= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// build the email subject -- edit this yourself!
$message 	 	= "<b>" . $usr_name . "</b> has submitted a comment from your website.<br>";
$message 	 	.= "Their email is: <b>" . $usr_email . "</b>.<br>";
if ($usr_tel != null) {
	$message 	 	.= "Their contact number is: <b>" . $usr_tel . "</b>.<br>";
} else {
	$message 	 	.= "They have chosen not to share their contact number.<br>";
}
$message 		.= "<br><br>Their message:<br>";
$message		.= "<em>" . $usr_comments . "</em><br>";
// $message		.= "Let us discuss variables! " . $var . " is awesome, no?";	# demonstrates using your own variable

// send the email out
mail($recipient, $subject, $message, $headers);
header("Location: " . $landing_page . ");
echo($email_confirmation);
die();

?>
