<!-- 
20.0514

the purpose of this file is 
if there's a failed recaptcha,
this file will NOT execute mail(), 
so no mail will be sent.

 -->

<?php
//import auxilery functions
include  'func.php' ;

 
// log debug info into a file
  $file = "log.txt";
  $log_handle = fopen($file, 'a') or die('cannot open: ' .$file);


//Log File
 
 
 
fwrite($log_handle, logMSG(" DO NOT SENT MAIL recaptcha failed"));
 
 
fclose($log_handle); // Log File Setup

return true;