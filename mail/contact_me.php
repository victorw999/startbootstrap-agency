<!--
  original template features:
    - getting validated data from a POST from 'js/contact_me.js'
  i added features:
    - log to log.txt to see mail error msg (orig for reCaptcha, now we don't need it)
    - timestamp
 -->

<?php
include 'func.php'; // auxilery functions

/**
 * original template
 * REF: https://github.com/BlackrockDigital/startbootstrap-agency/blob/v4.1.1/mail/contact_me.php
 */
// Check for empty fields
if (empty($_POST['name']) ||
    empty($_POST['email']) ||
    empty($_POST['phone']) ||
    empty($_POST['message']) ||
    !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "No arguments Provided!";
    return false;
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = 'hello@findvictor.com';
// Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Hello from $name [FindVictor.com]";
$email_body = "You have received a new message from your website contact form.\n\n" . "Name: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@findvictor.com\n";
// This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";

/**
 * END: original code block
 */

// add timestamp to email
date_default_timezone_set('America/Los_Angeles');
$date = date('m/d/Y h:i:s a', time());
$email_body .= "\n\n $date \n\n";

// log debug info into a file
$file = "log.txt";
$log_handle = fopen($file, 'a') or die('cannot open: ' . $file);

// mail() only works on bluehost env, not local: neither on ASUS-WIN10 nor on Linda-Win7-2015
$success = mail($to, $email_subject, $email_body, $headers);
fwrite($log_handle, logMSG($success)); //Log File
if (!$success) {
    $errorMessage = error_get_last()['message'];
    fwrite($log_handle, logMSG($errorMessage)); //Log File
}

fclose($log_handle); // Log File Setup

return true;