<?php

function debugToBrowserConsole($msg)
{
    $msg = str_replace('"', "''", $msg); # weak attempt to make sure there's not JS breakage
    echo "<script>console.debug( \"PHP DEBUG: $msg\" );</script>";
}

// Log File Setup
// return a timestamp of the log activity
function logMSG($content)
{
    $time = date('m/d/Y h:i:s a', time());
    return $time . ": " . $content . "\n\n";
}