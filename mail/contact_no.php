<!--
20.0514

the purpose of this file is: if there's a failed recaptcha,
this file will NOT execute mail(), so no mail will be sent.

20.0515
this file won't be called, since i added a line in line#90 in js/contact_me.js
to check if recaptcha is a success, if failed, AJAX won't be called

 -->

<?php
include 'func.php';

// log debug info into a file
$file = "log.txt";
$log_handle = fopen($file, 'a') or die('cannot open: ' . $file);
fwrite($log_handle, logMSG(" DO NOT SENT MAIL recaptcha failed"));
fclose($log_handle); // Log File Setup

return true;