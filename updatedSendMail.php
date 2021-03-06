<?php
/**
 * User: codeforcoffee
 * Date: 4/18/14
 * Time: 10:07 PM
 */

/// <summary>
/// mailService()
/// parent class that handles SMTP/POP3
/// </summary>

class mailService {

    private static function cleanData($string) {
        try {
            $string = strip_tags($string);
            return $string;
        } catch (mysqli_sql_exception $err) {
            echo("<script>console.log('[service error]' + $err);</script>");
        }
    }

    public static function sendMessageViaSMTP($name, $email, $message) {

        $toEmail = "hello@yourdomain.org";
        $name = mailService::cleanData($name);
        $email = mailService::cleanData($email);
        $message = mailService::cleanData($message);

        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "CC: " . $toEmail . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $emailMessage 	 = "<h1>Staff:</h1><b>" . $name . "</b> has submitted a contact request.<br>";
        $emailMessage 	.= "Their email is: <b>" . $email . "</b>.<br>";
        $emailMessage   .= "<h3>Their message:</h3><p>" . $message . "</p>";

        try {
            mail($toEmail, "Website Contact Request", $emailMessage, $headers);
            die();
        } catch (mysqli_sql_exception $err) {
            echo("<script>console.log('[service error]' + $err);</script>");
            die();
        }

    }

} 

?>
