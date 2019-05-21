<?php

  $file = "file.txt";
  $handle = fopen($file, 'a') or die('cannot open: ' .$file);


  date_default_timezone_set('America/Los_Angeles');
  $time = date('m/d/Y h:i:s a', time());
  $data = $time . " - data" . "\n\n";
  fwrite($handle, $data);

  $time = date('m/d/Y h:i:s a', time());
  $data2 = $time . " - data2" . "\n\n";
  fwrite($handle, $data2);
  fclose($handle);


 ?>
