<?php
    require_once ('init.php');//contains the ReCaptcha initialization, return recaptcha
    require_once ('conexion.php');//My connection
    $captcha = $_POST["captcha"];//I send with the js micaptcha
    $response = $recaptcha->verify($_POST["captcha"]);
    if($response->isSuccess()){
       //mi success code
    }
    else{
        echo $resultado;
        die("Invalid Captcha!");
    }

?>

 
