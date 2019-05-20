<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
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
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@akwa.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";


date_default_timezone_set('America/Los_Angeles');
$date = date('m/d/Y h:i:s a', time());

echo '<script type="text/javascript">
    console.log("start verifying logic.....");
  </script>';

$email_body += "\n\n $date \n\n"
$email_body += "\n\n start verifying logic... \n\n";
//
// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])){
//   // Build POST request:
//   $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
//   $recaptcha_secret = SECRET_KEY;
//   $recaptcha_response = $_POST['recaptcha_response'];
//
//   // Make and decode POST request:
//   $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
//   $recaptcha = json_decode($recaptcha);
//
//   // Take action based on the score returned:
//   if ($recaptcha->score >= 0.5) {
//       // Verified - send email
//       $email_body += "\n\n Verified - send email. \n\n";
//       echo '<script type="text/javascript">
//               console.log("Verified - send email");
//             </script>';
//   } else {
//       // Not verified - show form error
//       $email_body += "\n\n Not verified \n\n";
//       echo '<script type="text/javascript">
//               console.log("Not verified");
//             </script>';
//   }
// }

mail($to,$email_subject,$email_body,$headers);
return true;

?>
