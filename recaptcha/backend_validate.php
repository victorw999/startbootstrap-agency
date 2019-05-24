<?php
  include "constant.php";
  // $email;$comment;
  $token;
  // $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  // $comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);
  $token = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);
  if(!$token){
    echo '<h2>frm backend_validate: Please check the the captcha form.</h2>';
    exit;
  }
  $secretKey = SECRET_KEY;
  $ip = $_SERVER['REMOTE_ADDR'];

  // post request to server
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $data = array('secret' => $secretKey, 'response' => $token);

  $options = array(
    'http' => array(
      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      'method'  => 'POST',
      'content' => http_build_query($data)
    )
  );
  $context  = stream_context_create($options);
  $response = file_get_contents($url, false, $context);
  $responseKeys = json_decode($response,true);
  header('Content-type: application/json');
  if($responseKeys["success"]) {
    echo json_encode(array('success' => 'true'));
  } else {
    echo json_encode(array('success' => 'false'));
  }
?>
