<?php
  date_default_timezone_set('America/Los_Angeles');

  function logMSG( $content ){
    $time = date('m/d/Y h:i:s a', time());
    return $time . " : " . $content . "\n\n";
  }


  $file = "log.txt";
  $handle = fopen($file, 'a') or die('cannot open: ' .$file);

  fwrite($handle, logMSG("test 1")); 
  fclose($handle);

 ?>
