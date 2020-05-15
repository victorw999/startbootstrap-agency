<?php
include "constant.php";
include '../mail/func.php'; // has a func to log err into txt

// REF: https://codeforgeek.com/google-recaptcha-v3-tutorial/
// "backend_validate.php"
// 1. get an 'token' frm js/contact_me.js line#33-ish
//    the 'token' was generated after frontend grecaptcha.execute() my SITE_KEY
// 2. "SECRET_KEY", which only appear in this backend file, combined with "token",
//    will be sent to google API to verify
//    will get a JSON obj as AIP response

$token;
$token = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);

if (!$token) {
    echo '<h2>frm backend_validate: Please check the the captcha form.</h2>';
    exit;
}
$secretKey = SECRET_KEY;

$ip = $_SERVER['REMOTE_ADDR'];

// post request to server
// REF: http://developers.google.com/recaptcha/docs/verify#api_request
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array('secret' => $secretKey, 'response' => $token);

$options = array(
    'http' => array(
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data),
    ),
);
$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);
$responseKeys = json_decode($response, true);
header('Content-type: application/json');
if ($responseKeys["success"]) {
    echo json_encode(array('success' => 'true'));
} else {
    echo json_encode(array('success' => 'false'));
}