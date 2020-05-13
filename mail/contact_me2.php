<!-- 
  it's possible that this code's reCaptchar is based on this ref:
  REF:https://codeforgeek.com/google-recaptcha-v3-tutorial/
 -->

<?php
//import auxilery functions
include  'func.php' ;


/**
 * original code block
 *
 * REF: https://github.com/BlackrockDigital/startbootstrap-agency/blob/v4.1.1/mail/contact_me.php
 */
// Check for empty fields
if (empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "No arguments Provided!";
    return false;
}


$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = 'victorw@akwa.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Name: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@akwa.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
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
$log_handle = fopen($file, 'a') or die('cannot open: ' .$file);


//Log File
fwrite($log_handle, logMSG("log:  start loging "));
$recaptcha_response = $_POST['recaptcha_response'];

//Log File
fwrite($log_handle, logMSG("recaptcha_response: " . $recaptcha_response)); //Log File

$email_body .= "start verifying logic... \n\n";
$email_body .= "\n\n";


/**
 *  1.
 *  just realized that "recaptcha_response" is not in POST's data.
 *  if "recaptcha_response" is needed, try add it in the ajax func's data
 *
 *  2.
 *  still not sure which template i was following.
 *  try directly send mail see if it'll work
 *
 */


 //reCAPTCHA validation
 /**
  *  this segment is unnecessary,
  *  bluehost can send mail with current config.
  */
if (isset($_POST['recaptcha_response'])) {
    // if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])){
    // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = SECRET_KEY;
    $recaptcha_response = $_POST['recaptcha_response'];

    fwrite($log_handle, logMSG($recaptcha_response)); //Log File

    $email_body .= "recaptcha_response:  $recaptcha_response ";
    $email_body .= "\n";

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned:
    if ($recaptcha->score >= 0.5) {
        // Verified - send email
        $email_body .= "\n\n Verified - send email. \n\n";
    } else {
        // Not verified - show form error
        $email_body .= "\n\n Not verified \n\n";
    }
}

fwrite($log_handle, logMSG("start mail() ... ")); //Log File

$success = mail($to, $email_subject, $email_body, $headers);
fwrite($log_handle, logMSG($success)); //Log File
if (!$success) {
    $errorMessage = error_get_last()['message'];
    fwrite($log_handle, logMSG($errorMessage)); //Log File
}

 


fclose($log_handle); // Log File Setup

return true;