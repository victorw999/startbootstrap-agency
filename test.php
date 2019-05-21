<?php


    function debugToBrowserConsole ( $msg ) {
        $msg = str_replace('"', "''", $msg);  # weak attempt to make sure there's not JS breakage
        echo "<script>console.debug( \"PHP DEBUG: $msg\" );</script>";
    }
    function errorToBrowserConsole ( $msg ) {
        $msg = str_replace('"', "''", $msg);  # weak attempt to make sure there's not JS breakage
        echo "<script>console.error( \"PHP ERROR: $msg\" );</script>";
    }
    function warnToBrowserConsole ( $msg ) {
        $msg = str_replace('"', "''", $msg);  # weak attempt to make sure there's not JS breakage
        echo "<script>console.warn( \"PHP WARNING: $msg\" );</script>";
    }
    function logToBrowserConsole ( $msg ) {
        $msg = str_replace('"', "''", $msg);  # weak attempt to make sure there's not JS breakage
        echo "<script>console.log( \"PHP LOG: $msg\" );</script>";
    }

    # Convenience functions
    function d2c ( $msg ) { debugToBrowserConsole( $msg ); }
    function e2c ( $msg ) { errorToBrowserConsole( $msg ); }
    function w2c ( $msg ) { warnToBrowserConsole( $msg ); }
    function l2c ( $msg ) { logToBrowserConsole( $msg ); }

    if ( 'POST' === $_SERVER['REQUEST_METHOD'] ) {
        if ( isset( $_POST['data'] ) ) {
            d2c( "Your message: {$_POST['data']}"
            e2c( "This is an error from PHP" );
            w2c( "This is a warning from PHP" );
            l2c( "This is a log message from PHP" );
            ...
        }
    }
 ?>
