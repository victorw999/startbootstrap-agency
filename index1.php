<?php
require('contact_captcha_4/constant.php');

// // Check if form was submitted:
// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {
//     // Build POST request:
//     $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
//     $recaptcha_secret = SECRET_KEY;
//     $recaptcha_response = $_POST['recaptcha_response'];
//
//     // Make and decode POST request:
//     $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
//     $recaptcha = json_decode($recaptcha);
//
//     // Take action based on the score returned:
//     if ($recaptcha->score >= 0.5) {
//         // Verified - send email
//     } else {
//         // Not verified - show form error
//     }
// }
echo '<script type="text/javascript">
    window.onload = function () { alert("Verified - send email"); }
    console.log("testing Verified - send email");
  </script>';

 ?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Portfolio</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

  <!-- custom icoMoon icons  -->
  <link href="img/icons/icomoon/style.css" rel="stylesheet">

  <!-- google re-captcha -->
  <script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>"></script>
  <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('<?php echo SITE_KEY; ?>', {
        action: 'contact'
      }).then(function(token) {

        // console.log(token);
        var recaptchaResponse = document.getElementById('recaptchaResponse');
        recaptchaResponse.value = token;
      });
    });
  </script>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Victor</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#filter_gallery">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">

    <!-- SVG -->
    <svg id="el_HvTVi4AM_" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 100"><style>@-webkit-keyframes kf_el_NZFmsH8NbCa_an_MlDc_x_Xz{0%{opacity: 1;}8.33%{opacity: 0;}16.67%{opacity: 1;}25%{opacity: 0;}33.33%{opacity: 1;}100%{opacity: 1;}}@keyframes kf_el_NZFmsH8NbCa_an_MlDc_x_Xz{0%{opacity: 1;}8.33%{opacity: 0;}16.67%{opacity: 1;}25%{opacity: 0;}33.33%{opacity: 1;}100%{opacity: 1;}}@-webkit-keyframes kf_el_eOevzCnJSYJ_an_Yvh2OYZEd{0%{opacity: 1;}8.33%{opacity: 0;}16.67%{opacity: 1;}25%{opacity: 0;}33.33%{opacity: 1;}42.22%{opacity: 0;}50%{opacity: 1;}58.33%{opacity: 0;}66.67%{opacity: 1;}75%{opacity: 0;}83.33%{opacity: 1;}91.67%{opacity: 0;}100%{opacity: 1;}}@keyframes kf_el_eOevzCnJSYJ_an_Yvh2OYZEd{0%{opacity: 1;}8.33%{opacity: 0;}16.67%{opacity: 1;}25%{opacity: 0;}33.33%{opacity: 1;}42.22%{opacity: 0;}50%{opacity: 1;}58.33%{opacity: 0;}66.67%{opacity: 1;}75%{opacity: 0;}83.33%{opacity: 1;}91.67%{opacity: 0;}100%{opacity: 1;}}@-webkit-keyframes kf_el_RYIHLjV08F_an_K2Mdcg9Yg{0%{-webkit-transform: translate(167.22894287109375px, 55.9139518737793px) translate(-167.22894287109375px, -55.9139518737793px) translate(0px, -4px);transform: translate(167.22894287109375px, 55.9139518737793px) translate(-167.22894287109375px, -55.9139518737793px) translate(0px, -4px);}25%{-webkit-transform: translate(167.22894287109375px, 55.9139518737793px) translate(-167.22894287109375px, -55.9139518737793px) translate(0px, -10px);transform: translate(167.22894287109375px, 55.9139518737793px) translate(-167.22894287109375px, -55.9139518737793px) translate(0px, -10px);}50%{-webkit-transform: translate(167.22894287109375px, 55.9139518737793px) translate(-167.22894287109375px, -55.9139518737793px) translate(0px, -3px);transform: translate(167.22894287109375px, 55.9139518737793px) translate(-167.22894287109375px, -55.9139518737793px) translate(0px, -3px);}100%{-webkit-transform: translate(167.22894287109375px, 55.9139518737793px) translate(-167.22894287109375px, -55.9139518737793px) translate(0px, -4px);transform: translate(167.22894287109375px, 55.9139518737793px) translate(-167.22894287109375px, -55.9139518737793px) translate(0px, -4px);}}@keyframes kf_el_RYIHLjV08F_an_K2Mdcg9Yg{0%{-webkit-transform: translate(167.22894287109375px, 55.9139518737793px) translate(-167.22894287109375px, -55.9139518737793px) translate(0px, -4px);transform: translate(167.22894287109375px, 55.9139518737793px) translate(-167.22894287109375px, -55.9139518737793px) translate(0px, -4px);}25%{-webkit-transform: translate(167.22894287109375px, 55.9139518737793px) translate(-167.22894287109375px, -55.9139518737793px) translate(0px, -10px);transform: translate(167.22894287109375px, 55.9139518737793px) translate(-167.22894287109375px, -55.9139518737793px) translate(0px, -10px);}50%{-webkit-transform: translate(167.22894287109375px, 55.9139518737793px) translate(-167.22894287109375px, -55.9139518737793px) translate(0px, -3px);transform: translate(167.22894287109375px, 55.9139518737793px) translate(-167.22894287109375px, -55.9139518737793px) translate(0px, -3px);}100%{-webkit-transform: translate(167.22894287109375px, 55.9139518737793px) translate(-167.22894287109375px, -55.9139518737793px) translate(0px, -4px);transform: translate(167.22894287109375px, 55.9139518737793px) translate(-167.22894287109375px, -55.9139518737793px) translate(0px, -4px);}}@-webkit-keyframes kf_el_RYIHLjV08F_an_Ns_u82A4Y{0%{-webkit-transform: translate(167.22894287109375px, 55.9139518737793px) rotate(0deg) translate(-167.22894287109375px, -55.9139518737793px);transform: translate(167.22894287109375px, 55.9139518737793px) rotate(0deg) translate(-167.22894287109375px, -55.9139518737793px);}25%{-webkit-transform: translate(167.22894287109375px, 55.9139518737793px) rotate(10deg) translate(-167.22894287109375px, -55.9139518737793px);transform: translate(167.22894287109375px, 55.9139518737793px) rotate(10deg) translate(-167.22894287109375px, -55.9139518737793px);}50%{-webkit-transform: translate(167.22894287109375px, 55.9139518737793px) rotate(-10deg) translate(-167.22894287109375px, -55.9139518737793px);transform: translate(167.22894287109375px, 55.9139518737793px) rotate(-10deg) translate(-167.22894287109375px, -55.9139518737793px);}75%{-webkit-transform: translate(167.22894287109375px, 55.9139518737793px) rotate(10deg) translate(-167.22894287109375px, -55.9139518737793px);transform: translate(167.22894287109375px, 55.9139518737793px) rotate(10deg) translate(-167.22894287109375px, -55.9139518737793px);}100%{-webkit-transform: translate(167.22894287109375px, 55.9139518737793px) rotate(0deg) translate(-167.22894287109375px, -55.9139518737793px);transform: translate(167.22894287109375px, 55.9139518737793px) rotate(0deg) translate(-167.22894287109375px, -55.9139518737793px);}}@keyframes kf_el_RYIHLjV08F_an_Ns_u82A4Y{0%{-webkit-transform: translate(167.22894287109375px, 55.9139518737793px) rotate(0deg) translate(-167.22894287109375px, -55.9139518737793px);transform: translate(167.22894287109375px, 55.9139518737793px) rotate(0deg) translate(-167.22894287109375px, -55.9139518737793px);}25%{-webkit-transform: translate(167.22894287109375px, 55.9139518737793px) rotate(10deg) translate(-167.22894287109375px, -55.9139518737793px);transform: translate(167.22894287109375px, 55.9139518737793px) rotate(10deg) translate(-167.22894287109375px, -55.9139518737793px);}50%{-webkit-transform: translate(167.22894287109375px, 55.9139518737793px) rotate(-10deg) translate(-167.22894287109375px, -55.9139518737793px);transform: translate(167.22894287109375px, 55.9139518737793px) rotate(-10deg) translate(-167.22894287109375px, -55.9139518737793px);}75%{-webkit-transform: translate(167.22894287109375px, 55.9139518737793px) rotate(10deg) translate(-167.22894287109375px, -55.9139518737793px);transform: translate(167.22894287109375px, 55.9139518737793px) rotate(10deg) translate(-167.22894287109375px, -55.9139518737793px);}100%{-webkit-transform: translate(167.22894287109375px, 55.9139518737793px) rotate(0deg) translate(-167.22894287109375px, -55.9139518737793px);transform: translate(167.22894287109375px, 55.9139518737793px) rotate(0deg) translate(-167.22894287109375px, -55.9139518737793px);}}@-webkit-keyframes kf_el_1atp179PmX_an_c-te_2NWG{0%{-webkit-transform: translate(-8.75px, 73.98625946044922px) translate(8.75px, -73.98625946044922px) translate(0px, 0px);transform: translate(-8.75px, 73.98625946044922px) translate(8.75px, -73.98625946044922px) translate(0px, 0px);}50%{-webkit-transform: translate(-8.75px, 73.98625946044922px) translate(8.75px, -73.98625946044922px) translate(-20px, 0px);transform: translate(-8.75px, 73.98625946044922px) translate(8.75px, -73.98625946044922px) translate(-20px, 0px);}100%{-webkit-transform: translate(-8.75px, 73.98625946044922px) translate(8.75px, -73.98625946044922px) translate(0px, 0px);transform: translate(-8.75px, 73.98625946044922px) translate(8.75px, -73.98625946044922px) translate(0px, 0px);}}@keyframes kf_el_1atp179PmX_an_c-te_2NWG{0%{-webkit-transform: translate(-8.75px, 73.98625946044922px) translate(8.75px, -73.98625946044922px) translate(0px, 0px);transform: translate(-8.75px, 73.98625946044922px) translate(8.75px, -73.98625946044922px) translate(0px, 0px);}50%{-webkit-transform: translate(-8.75px, 73.98625946044922px) translate(8.75px, -73.98625946044922px) translate(-20px, 0px);transform: translate(-8.75px, 73.98625946044922px) translate(8.75px, -73.98625946044922px) translate(-20px, 0px);}100%{-webkit-transform: translate(-8.75px, 73.98625946044922px) translate(8.75px, -73.98625946044922px) translate(0px, 0px);transform: translate(-8.75px, 73.98625946044922px) translate(8.75px, -73.98625946044922px) translate(0px, 0px);}}@-webkit-keyframes kf_el_O23WCMreW0W_an_fpHqPBGsm{0%{-webkit-transform: translate(-22.25px, 74.07733917236328px) translate(22.25px, -74.07733917236328px) translate(0px, 0px);transform: translate(-22.25px, 74.07733917236328px) translate(22.25px, -74.07733917236328px) translate(0px, 0px);}50%{-webkit-transform: translate(-22.25px, 74.07733917236328px) translate(22.25px, -74.07733917236328px) translate(18px, 0px);transform: translate(-22.25px, 74.07733917236328px) translate(22.25px, -74.07733917236328px) translate(18px, 0px);}100%{-webkit-transform: translate(-22.25px, 74.07733917236328px) translate(22.25px, -74.07733917236328px) translate(0px, 0px);transform: translate(-22.25px, 74.07733917236328px) translate(22.25px, -74.07733917236328px) translate(0px, 0px);}}@keyframes kf_el_O23WCMreW0W_an_fpHqPBGsm{0%{-webkit-transform: translate(-22.25px, 74.07733917236328px) translate(22.25px, -74.07733917236328px) translate(0px, 0px);transform: translate(-22.25px, 74.07733917236328px) translate(22.25px, -74.07733917236328px) translate(0px, 0px);}50%{-webkit-transform: translate(-22.25px, 74.07733917236328px) translate(22.25px, -74.07733917236328px) translate(18px, 0px);transform: translate(-22.25px, 74.07733917236328px) translate(22.25px, -74.07733917236328px) translate(18px, 0px);}100%{-webkit-transform: translate(-22.25px, 74.07733917236328px) translate(22.25px, -74.07733917236328px) translate(0px, 0px);transform: translate(-22.25px, 74.07733917236328px) translate(22.25px, -74.07733917236328px) translate(0px, 0px);}}#el_HvTVi4AM_ *{-webkit-animation-duration: 6s;animation-duration: 6s;-webkit-animation-iteration-count: infinite;animation-iteration-count: infinite;-webkit-animation-timing-function: cubic-bezier(0, 0, 1, 1);animation-timing-function: cubic-bezier(0, 0, 1, 1);}#boat{fill: #57698f;}#el_Xcv_nZYp6t{fill: #3a3939;opacity: 0.2;}#el_aTIwrfChJv{fill: #3b97d3;}#el_BLsjngvU_v{fill: #3a3939;opacity: 0.2;}#el_fhnRRAFmid{fill: #3a3939;opacity: 0.2;}#el_gT1UcU7_dr{fill: #212529;}#el_h3NYeSqp_F{fill: #303a4e;}#el_M-5r244dqo{fill: #fff;opacity: 0.6;}#el_0hluGUW7-l{fill: #212529;}#el_s2qLesC8m2{fill: #fff;opacity: 0.6;}#el_iDuH5CyBaX{fill: #010101;}#el_3ScBmMfFlH{fill: #fff;}#el_LaZ2a6Bni5S{fill: #fcc49e;}#el_ojKk03UooVf{fill: #fcc49e;}#el_osh-S36oD0h{fill: #fcc49e;}#el_kT0zKhBR9o3{fill: #010101;}#el_JZMHxT9VCZn{fill: #f9ad80;}#el_NZ-a0K7qcN9{fill: #f9ad80;}#el_9YCbCyyoXGi{fill: #1d1d1b;}#el_1h9Db1x2wAw{fill: #8eb4a7;}#el_os0BC21ZgxJ{fill: #303a4e;}#el_n8xAJ_iZo0U{fill: #f48a94;}#el_xPT_xTcG_l6{fill: #fff;}#el_0w9PxPrjUi9{fill: #f48a94;}#el_OI4IO-tZNLN{fill: #f48a94;}#el_rsoy9HE7vCM{fill: #acdbca;}#el_a4TKX8dzdVj{fill: #fff;}#el__kvUbugedph{fill: #acdbca;}#el_UQwNvWJ4Boj{fill: #acdbca;}#el_9gNvHx7ZmsY{fill: #acdbca;}#el_N1b9Xry3-5N{fill: #acdbca;}#el_OETQSa5Zoj1{fill: #acdbca;}#el_bFPEsuTyjxv{fill: #acdbca;}#el_NjhKHbZf889{fill: #acdbca;}#el_eOevzCnJSYJ{fill: #acdbca;-webkit-animation-fill-mode: backwards;animation-fill-mode: backwards;opacity: 1;-webkit-animation-name: kf_el_eOevzCnJSYJ_an_Yvh2OYZEd;animation-name: kf_el_eOevzCnJSYJ_an_Yvh2OYZEd;-webkit-animation-timing-function: cubic-bezier(0, 0, 1, 1);animation-timing-function: cubic-bezier(0, 0, 1, 1);}#el_T8epO9Ye-b7{fill: #3a3939;opacity: 0.2;}#el_4IZasM-v19g{fill: #45a2da;}#el_O23WCMreW0W_an_fpHqPBGsm{-webkit-animation-fill-mode: backwards;animation-fill-mode: backwards;-webkit-transform: translate(-22.25px, 74.07733917236328px) translate(22.25px, -74.07733917236328px) translate(0px, 0px);transform: translate(-22.25px, 74.07733917236328px) translate(22.25px, -74.07733917236328px) translate(0px, 0px);-webkit-animation-name: kf_el_O23WCMreW0W_an_fpHqPBGsm;animation-name: kf_el_O23WCMreW0W_an_fpHqPBGsm;-webkit-animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1);animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1);}#el_1atp179PmX_an_c-te_2NWG{-webkit-animation-fill-mode: backwards;animation-fill-mode: backwards;-webkit-transform: translate(-8.75px, 73.98625946044922px) translate(8.75px, -73.98625946044922px) translate(0px, 0px);transform: translate(-8.75px, 73.98625946044922px) translate(8.75px, -73.98625946044922px) translate(0px, 0px);-webkit-animation-name: kf_el_1atp179PmX_an_c-te_2NWG;animation-name: kf_el_1atp179PmX_an_c-te_2NWG;-webkit-animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1);animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1);}#el_RYIHLjV08F_an_Ns_u82A4Y{-webkit-animation-fill-mode: backwards;animation-fill-mode: backwards;-webkit-transform: translate(167.22894287109375px, 55.9139518737793px) rotate(0deg) translate(-167.22894287109375px, -55.9139518737793px);transform: translate(167.22894287109375px, 55.9139518737793px) rotate(0deg) translate(-167.22894287109375px, -55.9139518737793px);-webkit-animation-name: kf_el_RYIHLjV08F_an_Ns_u82A4Y;animation-name: kf_el_RYIHLjV08F_an_Ns_u82A4Y;-webkit-animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1);animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1);}#el_RYIHLjV08F_an_K2Mdcg9Yg{-webkit-animation-fill-mode: backwards;animation-fill-mode: backwards;-webkit-transform: translate(167.22894287109375px, 55.9139518737793px) translate(-167.22894287109375px, -55.9139518737793px) translate(0px, -4px);transform: translate(167.22894287109375px, 55.9139518737793px) translate(-167.22894287109375px, -55.9139518737793px) translate(0px, -4px);-webkit-animation-name: kf_el_RYIHLjV08F_an_K2Mdcg9Yg;animation-name: kf_el_RYIHLjV08F_an_K2Mdcg9Yg;-webkit-animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1);animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1);}#el_NZFmsH8NbCa{-webkit-animation-fill-mode: backwards;animation-fill-mode: backwards;opacity: 1;-webkit-animation-name: kf_el_NZFmsH8NbCa_an_MlDc_x_Xz;animation-name: kf_el_NZFmsH8NbCa_an_MlDc_x_Xz;-webkit-animation-timing-function: cubic-bezier(0, 0, 1, 1);animation-timing-function: cubic-bezier(0, 0, 1, 1);}</style>

      <title>victor's boat</title>
      <rect id="boat" width="300" height="100"/>
      <g id="el_1atp179PmX_an_c-te_2NWG" data-animator-group="true" data-animator-type="0"><g id="el_1atp179PmX">
        <path id="el_Xcv_nZYp6t" d="M335.25,82.81c-15.79-4.93-27-5.26-34.35-4.66-12.95,1.07-16.06,5.24-28,5.19-13.05,0-14.83-5.06-28.46-5.61-15.37-.62-19.05,5.5-34.36,5.3-17-.23-19.27-7.88-35.82-8.27S153.4,82,134.54,81.86c-13.89-.11-14.39-4.28-29.44-4.55C87.38,77,82.55,82.66,66.58,81.54c-12-.84-12.75-4.29-23.56-4.23-12,0-15.42,4.3-26.5,4.55C10.54,82,2,81-8.75,75.72V91.5h344Z"/>
        <path id="el_aTIwrfChJv" d="M342.6,82.05c-15.79-4.93-27-5.26-34.35-4.66-12.95,1.06-16.06,5.23-28,5.19-13,0-14.83-5.06-28.47-5.62-15.36-.62-19,5.51-34.35,5.3-17-.23-19.27-7.88-35.82-8.26s-20.89,7.25-39.75,7.1C128,81,127.5,76.81,112.45,76.54c-17.72-.32-22.55,5.36-38.52,4.24-12-.84-12.75-4.29-23.56-4.24-12,.06-15.42,4.3-26.5,4.56-6,.13-14.49-.89-25.27-6.15V90.73h344Z"/>
      </g></g>
      <g id="el_RYIHLjV08F_an_K2Mdcg9Yg" data-animator-group="true" data-animator-type="0"><g id="el_RYIHLjV08F_an_Ns_u82A4Y" data-animator-group="true" data-animator-type="1"><g id="el_RYIHLjV08F">
        <path id="el_BLsjngvU_v" d="M225.94,61.3H209.81V59.55a1.19,1.19,0,0,0-1-1.19,5,5,0,0,0-3.87.81l-.08.08h-.94a1.66,1.66,0,0,0-1.76,1.53v.52h-16a.42.42,0,0,0-.43.42v11a.43.43,0,0,0,.43.43h10.9l-1.18.85a1.56,1.56,0,0,0-.41,2.12c0,.06,20.19.15,21.34,0,0,0,.32-1.69-.37-2.17l-1.59-1.09H215l.34.24h10.65a.42.42,0,0,0,.42-.43v-11A.42.42,0,0,0,225.94,61.3Z"/>
        <path id="el_fhnRRAFmid" d="M250.16,70a.21.21,0,0,0-.24,0l-.73.54c-2,.34-4,.68-6.08,1l-.07-.1a.23.23,0,0,0-.2-.11h0a.23.23,0,0,0-.2.11c0,.07-.1.13-.14.2-2.75.43-5.54.84-8.29,1.22l-.24-.13a.24.24,0,0,0-.27.07l-.13.14c-3.63.49-7.18.91-10.5,1.23l-.48-.32a.23.23,0,0,0-.3,0l-.4.41c-3,.28-5.82.46-8.27.53a.6.6,0,0,1-.1-.31.23.23,0,0,0-.15-.25.24.24,0,0,0-.28.08,4.23,4.23,0,0,1-.44.51c-.72,0-1.41,0-2.05,0-2.69,0-5.24-.15-7.72-.28l-.43-.41a.24.24,0,0,0-.31,0c-.16.13-.34.24-.51.36-3.49-.22-6.79-.53-10-.9-.08-.06-.18-.12-.26-.19a.24.24,0,0,0-.26,0l-.23.13c-1.68-.2-3.33-.43-5-.66l-.86-.13-.94-.14-1.43-.23q-1.71-.27-3.39-.57l0-.09a.26.26,0,0,0-.12-.15.21.21,0,0,0-.19,0l-.36.12c-3.56-.63-7-1.32-10.59-2-.12-.16-.24-.3-.36-.47a.23.23,0,0,0-.31-.06s0,0,0,0a.24.24,0,0,0-.06.33c.23.32.46.61.68.88.48,1.08.9,2.24,1.29,3.42.19.57.37,1.13.55,1.7a39.61,39.61,0,0,0,1.6,4.49l.18.38a21.12,21.12,0,0,0,3.58,6c1.73,1.76,4.17,2.59,6.93,3.43,1.19.36,2.4.64,3.61.88A86.74,86.74,0,0,0,201.58,92c.65,0,1.38,0,2.1,0s1.33,0,1.93,0c2.08,0,5.66.06,9.11.07,4,0,7.87,0,8.91-.06s1.91-.1,2.85-.14,1.9-.07,2.81-.13c3-.2,6.76-.64,9.51-2.26s4.35-4.81,5.89-8.11c.24-.53.49-1,.74-1.57,1-2.15,1.75-3.6,2.46-5,.5-1,1-2.08,1.64-3.37l.32-.65.35-.26a.23.23,0,0,0,.05-.33S250.19,70.05,250.16,70Z"/>
        <g id="el_m_X0WCHf31">
          <path d="M208.74,65.89h0a6.43,6.43,0,0,1,2.66.61h0A6.37,6.37,0,0,0,208.74,65.89Z" id="el_gT1UcU7_dr"/>
          <path d="M204.84,63.43a1.06,1.06,0,0,1,0-2.12v.49h0V59.39h0v.22H189.22V70h11.65c1.92-1.37,4.43-3.15,4.88-3.38h0a4.05,4.05,0,0,1-.92-2.57Zm-4.46,5h-.46l.24.46s0,0,0,0,0,0,0,0l-.21.1s0,0,0,0,0,0,0,0l-.26-.49-.35.35h-.06a.09.09,0,0,1,0,0V67.32s0,0,0,0a0,0,0,0,1,.06,0l1.15,1.06s0,0,0,.05A.07.07,0,0,1,200.38,68.44Z" id="el_h3NYeSqp_F"/>
          <path d="M217.32,70.39l.25.17h.07l-.24-.17Z" id="el_M-5r244dqo"/>
          <path d="M212.5,61.32h0a1,1,0,0,1,.7.3,1.09,1.09,0,0,1,0,1.52,1,1,0,0,1-.7.3h0v.29h0v.35a3.83,3.83,0,0,1-.05.6v.07h0v.06l-.06.22a3.47,3.47,0,0,1-.13.46l-.1.24c-.06.13-.12.26-.19.38l-.15.24-.19.27h0l-.22-.09h0l.2.08h0c.39.19,3.62,2.37,5.73,3.8h.08l-.53-.38h11.44V59.61H212.5v1.71Z" id="el_0hluGUW7-l"/>
          <path d="M212.5,61.32h0a1,1,0,0,1,.7.3,1.09,1.09,0,0,1,0,1.52,1,1,0,0,1-.7.3h0v.29h0v.35a3.83,3.83,0,0,1-.05.6v.07h0v.06l-.06.22a3.47,3.47,0,0,1-.13.46l-.1.24c-.06.13-.12.26-.19.38l-.15.24-.19.27h0l-.22-.09h0l.2.08h0c.39.19,3.62,2.37,5.73,3.8h.08l-.53-.38h11.44V59.61H212.5v1.71Z" id="el_s2qLesC8m2"/>
          <path d="M228.62,59H212.5v.66h15.81V70H216.87l.53.38.24.17.34.23h10.64a.42.42,0,0,0,.43-.42v-11A.43.43,0,0,0,228.62,59Z" id="el_iDuH5CyBaX"/>
          <path d="M199.26,67.29a0,0,0,0,0-.06,0s0,0,0,0v1.55a.09.09,0,0,0,0,0h.06l.35-.35.26.49s0,0,0,0,0,0,0,0l.21-.1s0,0,0,0,0,0,0,0l-.24-.46h.46a.07.07,0,0,0,.05,0s0,0,0-.05Z" id="el_3ScBmMfFlH"/>
          <path d="M211.8,66.32a2.56,2.56,0,0,1-.2.26h0Z" id="el_LaZ2a6Bni5S"/>
          <path d="M212.43,64.72v0Z" id="el_ojKk03UooVf"/>
          <path d="M212.49,63.7h0v.35a3.83,3.83,0,0,1-.05.6h0a3.83,3.83,0,0,0,.05-.6Z" id="el_osh-S36oD0h"/>
          <path d="M200.87,70H189.22V59.61h15.62v-.22h0V59h-16a.43.43,0,0,0-.43.43v11a.42.42,0,0,0,.43.42h10.9Z" id="el_kT0zKhBR9o3"/>
          <path d="M203.83,62.37a1,1,0,0,0,1,1.06V61.31A1,1,0,0,0,203.83,62.37Z" id="el_JZMHxT9VCZn"/>
          <path d="M213.21,63.13a1.09,1.09,0,0,0,0-1.52,1,1,0,0,0-.7-.3h0v2.1h0A1,1,0,0,0,213.21,63.13Z" id="el_NZ-a0K7qcN9"/>
          <path d="M204.84,59.39V61.8h0v2.25a4.05,4.05,0,0,0,.92,2.57,6.44,6.44,0,0,1,3-.73h0a6.37,6.37,0,0,1,2.64.6l.22.09a2.56,2.56,0,0,0,.2-.26l.15-.24c.07-.12.13-.25.19-.38l.1-.24a3.47,3.47,0,0,0,.13-.46l.06-.22v-.06h0v-.07h0a3.83,3.83,0,0,0,.05-.6V63.7h0V57.2a1.2,1.2,0,0,0-1-1.19,5,5,0,0,0-3.86.82.27.27,0,0,0-.08.07h-.94a1.66,1.66,0,0,0-1.76,1.53v1Z" id="el_9YCbCyyoXGi"/>
          <path d="M211.59,66.59h0l-.2-.08a6.43,6.43,0,0,0-2.66-.61h0a6.44,6.44,0,0,0-3,.73h0c-.45.23-3,2-4.88,3.38l-1.09.78-1.18.85a1.56,1.56,0,0,0-.41,2.13c0,.06,20.19.15,21.34,0,0,0,.32-1.69-.37-2.17l-1.59-1.08-.25-.17C215.21,69,212,66.78,211.59,66.59Z" id="el_1h9Db1x2wAw"/>
        </g>
        <path id="el_os0BC21ZgxJ" d="M252.77,68.42a.25.25,0,0,0-.25,0l-.73.54c-2,.35-4,.68-6.08,1l-.06-.1a.24.24,0,0,0-.2-.12h0a.24.24,0,0,0-.2.12l-.15.2c-2.75.43-5.53.84-8.28,1.21l-.24-.12a.25.25,0,0,0-.27.06l-.14.15c-3.62.48-7.18.9-10.5,1.23l-.47-.32a.24.24,0,0,0-.31,0,5.16,5.16,0,0,0-.39.41c-3,.27-5.82.46-8.27.53a.6.6,0,0,1-.1-.31.24.24,0,0,0-.15-.25.25.25,0,0,0-.28.07,4.49,4.49,0,0,1-.44.51c-.72,0-1.41,0-2.06,0-2.68,0-5.24-.15-7.71-.29l-.43-.4a.24.24,0,0,0-.31,0,5.76,5.76,0,0,1-.51.35c-3.49-.22-6.79-.52-10-.89-.09-.07-.18-.12-.26-.19a.21.21,0,0,0-.26,0,1.71,1.71,0,0,0-.23.13c-1.69-.21-3.34-.43-5-.67l-.86-.12-.95-.15-1.43-.23-3.38-.56a.32.32,0,0,1,0-.09.25.25,0,0,0-.31-.17l-.37.13c-3.55-.64-7-1.33-10.59-2-.12-.15-.23-.29-.35-.46a.23.23,0,0,0-.31-.06h0a.25.25,0,0,0-.06.34c.23.32.45.6.68.87.48,1.08.89,2.24,1.29,3.43.18.56.37,1.13.55,1.7a40.32,40.32,0,0,0,1.6,4.49l.17.38a21.52,21.52,0,0,0,3.59,6c1.73,1.76,4.16,2.59,6.93,3.43,1.19.35,2.4.63,3.61.88a88.47,88.47,0,0,0,15.87,1.29h2.09c.66,0,1.33,0,1.94,0,2.08,0,5.66.06,9.11.08,4,0,7.87,0,8.91-.06s1.91-.1,2.85-.14,1.89-.07,2.8-.14c3-.2,6.76-.64,9.52-2.25s4.35-4.81,5.88-8.11l.75-1.58c1-2.14,1.74-3.59,2.45-5l1.65-3.37c.1-.21.2-.43.31-.65l.36-.26a.26.26,0,0,0,.05-.34S252.8,68.44,252.77,68.42Z"/>
        <g id="el_cEFL1__lRZp">
          <g id="el_riayaEaiqD4">
            <path d="M222.77,62.86h0a1.15,1.15,0,0,1,0-.19.64.64,0,0,0-.6-.62,2.53,2.53,0,0,1-1.69-.71h0a.44.44,0,0,0-.26-.1.41.41,0,0,0-.27.1h0a2.51,2.51,0,0,1-1.69.71.64.64,0,0,0-.6.62v.19h0a6.5,6.5,0,0,0,.26,2.39,3.06,3.06,0,0,0,.73,1.13,3.67,3.67,0,0,0,1.42.84l.06,0h.17l.06,0a3.67,3.67,0,0,0,1.42-.84,3.1,3.1,0,0,0,.73-1.14A6.49,6.49,0,0,0,222.77,62.86Zm-2.56,2.87h0a1.5,1.5,0,1,1,0-3h0a1.5,1.5,0,0,1,0,3Z" id="el_n8xAJ_iZo0U"/>
            <path d="M220.21,62.73h0a1.5,1.5,0,1,0,0,3h0a1.5,1.5,0,0,0,0-3Zm.16,2.39a.21.21,0,0,1-.16.07.22.22,0,0,1-.17-.07.32.32,0,0,1,0-.4.21.21,0,0,1,.16-.08.23.23,0,0,1,.17.08.32.32,0,0,1,0,.4Zm.13-1.4-.09.61a.38.38,0,0,1-.06.17.21.21,0,0,1-.15,0,.22.22,0,0,1-.16,0,.38.38,0,0,1-.06-.17l-.07-.59c0-.12,0-.2,0-.25a.19.19,0,0,1,.08-.16.43.43,0,0,1,.24-.06.3.3,0,0,1,.24.08.33.33,0,0,1,.06.21A.88.88,0,0,1,220.5,63.72Z" id="el_xPT_xTcG_l6"/>
            <path d="M220.22,63.27a.43.43,0,0,0-.24.06.19.19,0,0,0-.08.16s0,.13,0,.25l.07.59a.38.38,0,0,0,.06.17.22.22,0,0,0,.16,0,.21.21,0,0,0,.15,0,.38.38,0,0,0,.06-.17l.09-.61a.88.88,0,0,0,0-.16.33.33,0,0,0-.06-.21A.3.3,0,0,0,220.22,63.27Z" id="el_0w9PxPrjUi9"/>
            <path d="M220.2,64.64a.21.21,0,0,0-.16.08.32.32,0,0,0,0,.4.22.22,0,0,0,.17.07.21.21,0,0,0,.16-.07.32.32,0,0,0,0-.4A.23.23,0,0,0,220.2,64.64Z" id="el_OI4IO-tZNLN"/>
          </g>
          <g id="el_NZFmsH8NbCa">
            <path d="M222.77,62.86h0a1.15,1.15,0,0,1,0-.19.64.64,0,0,0-.6-.62,2.53,2.53,0,0,1-1.69-.71h0a.44.44,0,0,0-.26-.1.41.41,0,0,0-.27.1h0a2.51,2.51,0,0,1-1.69.71.64.64,0,0,0-.6.62v.19h0a6.5,6.5,0,0,0,.26,2.39,3.06,3.06,0,0,0,.73,1.13,3.67,3.67,0,0,0,1.42.84l.06,0h.17l.06,0a3.67,3.67,0,0,0,1.42-.84,3.1,3.1,0,0,0,.73-1.14A6.49,6.49,0,0,0,222.77,62.86Zm-2.56,2.87h0a1.5,1.5,0,1,1,0-3h0a1.5,1.5,0,0,1,0,3Z" id="el_rsoy9HE7vCM"/>
            <path d="M220.21,62.73h0a1.5,1.5,0,1,0,0,3h0a1.5,1.5,0,0,0,0-3ZM220.9,64l-.68.67-.14.15a.21.21,0,0,1-.13,0,.18.18,0,0,1-.12,0l-.32-.31a.18.18,0,0,1,.25-.25l.19.18.27-.27h0l.43-.42a.18.18,0,0,1,.25.25Z" id="el_a4TKX8dzdVj"/>
            <path d="M220.65,63.7l-.43.42h0l-.27.27-.19-.18a.18.18,0,0,0-.25.25l.32.31a.18.18,0,0,0,.12,0,.21.21,0,0,0,.13,0l.14-.15.68-.67a.18.18,0,0,0-.25-.25Z" id="el__kvUbugedph"/>
          </g>
        </g>
        <g id="el_oym4A5S6vGU">
          <g id="el_RK5tK0L1let">
            <path d="M194.48,64.16l.2-.42a.14.14,0,0,1-.09,0,.07.07,0,0,1-.05-.08.09.09,0,0,1,0-.07s.05,0,.1,0h.26s.08,0,.1,0a.1.1,0,0,1,0,.14.13.13,0,0,1-.1,0h0l-.32.65h-.2l-.32-.65h0a.13.13,0,0,1-.1,0,.1.1,0,0,1,0-.14s0,0,.1,0h.26a.16.16,0,0,1,.1,0,.14.14,0,0,1,0,.07.08.08,0,0,1,0,.08l-.1,0Z" id="el_UQwNvWJ4Boj"/>
            <path d="M195.72,63.55v.65H196a.13.13,0,0,1,.1,0,.1.1,0,0,1,0,.14s-.05,0-.1,0h-.65c-.05,0-.08,0-.1,0a.1.1,0,0,1,0-.14.13.13,0,0,1,.1,0h.23v-.46h-.16a.12.12,0,0,1-.09,0,.1.1,0,0,1,0-.14s.05,0,.09,0Zm0-.37v.2h-.22v-.2Z" id="el_9gNvHx7ZmsY"/>
            <path d="M197.07,63.58l.07,0a.09.09,0,0,1,.07,0,.12.12,0,0,1,0,.09v.13a.15.15,0,0,1,0,.1l-.07,0s0,0-.06,0,0,0,0-.07a.11.11,0,0,0-.06-.07.36.36,0,0,0-.19,0,.31.31,0,0,0-.22.08.24.24,0,0,0-.08.2.19.19,0,0,0,.08.18.43.43,0,0,0,.26.06.53.53,0,0,0,.19,0l.09,0a.13.13,0,0,1,.07,0,.1.1,0,0,1,.1.1s0,.08-.09.12a.67.67,0,0,1-.38.09.54.54,0,0,1-.35-.1.39.39,0,0,1-.16-.34.47.47,0,0,1,.13-.34.53.53,0,0,1,.36-.13H197Z" id="el_N1b9Xry3-5N"/>
            <path d="M197.88,63.74v.38a.13.13,0,0,0,0,.08.24.24,0,0,0,.14,0,.6.6,0,0,0,.27-.06l.08,0,.06,0a.11.11,0,0,1,0,.07.09.09,0,0,1,0,.07.51.51,0,0,1-.18.08,1.24,1.24,0,0,1-.23,0,.41.41,0,0,1-.27-.08.25.25,0,0,1-.09-.19v-.42h-.06a.13.13,0,0,1-.1,0,.1.1,0,0,1,0-.14s0,0,.1,0h.06v-.18a.15.15,0,0,1,0-.1.1.1,0,0,1,.14,0,.15.15,0,0,1,0,.1v.18h.35c.05,0,.08,0,.1,0a.1.1,0,0,1,0,.14.13.13,0,0,1-.1,0Z" id="el_OETQSa5Zoj1"/>
            <path d="M199.57,64a.42.42,0,0,1-.06.21.4.4,0,0,1-.18.16.48.48,0,0,1-.26.07.57.57,0,0,1-.25-.06.42.42,0,0,1-.18-.17.43.43,0,0,1-.06-.22.46.46,0,0,1,.06-.22.47.47,0,0,1,.19-.18.5.5,0,0,1,.24-.06.58.58,0,0,1,.26.06.52.52,0,0,1,.18.18A.46.46,0,0,1,199.57,64Zm-.19,0a.22.22,0,0,0-.07-.17.3.3,0,0,0-.24-.11.32.32,0,0,0-.21.08.27.27,0,0,0-.09.2.24.24,0,0,0,.09.17.31.31,0,0,0,.21.07.32.32,0,0,0,.22-.07A.24.24,0,0,0,199.38,64Z" id="el_bFPEsuTyjxv"/>
            <path d="M200.18,63.55v.11l.19-.11.13,0a.24.24,0,0,1,.18.07.12.12,0,0,1,.06.09.12.12,0,0,1,0,.07.11.11,0,0,1-.07,0,.13.13,0,0,1-.08,0,.09.09,0,0,0-.07,0l-.12,0-.2.15v.29h.28a.12.12,0,0,1,.09,0,.1.1,0,0,1,0,.14s-.05,0-.09,0h-.58s-.08,0-.1,0a.1.1,0,0,1,0-.14.13.13,0,0,1,.1,0H200v-.46h-.07a.15.15,0,0,1-.1,0,.1.1,0,0,1,0-.14.15.15,0,0,1,.1,0Z" id="el_NjhKHbZf889"/>
          </g>
          <rect id="el_eOevzCnJSYJ" x="201.11" y="62.42" width="0.86" height="2"/>
        </g>
      </g></g></g>
      <g id="el_O23WCMreW0W_an_fpHqPBGsm" data-animator-group="true" data-animator-type="0"><g id="el_O23WCMreW0W">
        <path id="el_T8epO9Ye-b7" d="M-22.25,88c15.59-8,26.69-8.48,33.93-7.51,12.79,1.71,15.85,8.43,27.62,8.36,12.89-.07,14.64-8.16,28.11-9,15.18-1,18.81,8.87,33.93,8.54,16.8-.37,19-12.7,35.38-13.32S157.36,86.71,176,86.46c13.72-.18,14.21-6.9,29.08-7.34,17.5-.52,22.27,8.64,38,6.83C255,84.59,255.7,79,266.37,79.12c11.81.1,15.23,6.93,26.17,7.34,5.91.22,14.31-1.42,25-9.9V102H-22.25Z"/>
        <path id="el_4IZasM-v19g" d="M-17.83,87.08c15.59-8,26.69-8.48,33.93-7.51C28.89,81.28,32,88,43.72,87.93c12.89-.07,14.64-8.15,28.11-9.05,15.18-1,18.81,8.87,33.93,8.54,16.8-.37,19-12.7,35.38-13.32s20.64,11.69,39.26,11.44c13.72-.18,14.21-6.9,29.08-7.34,17.5-.52,22.27,8.64,38,6.83,11.85-1.36,12.6-6.91,23.27-6.83,11.81.1,15.23,6.93,26.17,7.34,5.91.22,14.31-1.42,25-9.9v25.44H-17.83Z"/>
      </g></g>
    </svg>

    <!-- END: SVG -->

    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Welcome To Our Website!</div>
        <div class="intro-heading text-uppercase">AKWA M#6 deploy bluehost</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
      </div>
    </div>
  </header>

  <!-- Services  disabled SERVICE
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Services</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">E-Commerce</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Responsive Design</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Web Security</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
      </div>
    </div>
  </section>

  disabled SERVICE-->

  <!-- Progress-bar
  <section id="progress-bar">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Skills</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>

      <div class="row text-center">
        <div class="container">
          <div class="flex flex-50-gt-sm waypoint bars-wrap animated slide-in-right" data-animation="slide-in-right">
            <div class="bar flex">
              <div class="bar fill" style="width:75%">
              </div>
              <div class="tag bold flex">CSS</div>
              <span>80%</span>
            </div>

            <div class="bar flex">
              <div class="bar fill" style="width:100%">
              </div>
              <div class="tag bold flex">HTML</div>
              <span>100%</span>
            </div>

            <div class="bar flex">
              <div class="bar fill" style="width:80%">
              </div>
              <div class="tag bold flex">JavaScript</div>
              <span>80%</span>
            </div>

            <div class="bar flex">
              <div class="bar fill" style="width:65%">
              </div>
              <div class="tag bold flex">React</div>
              <span>70%</span>
            </div>

            <div class="bar flex">
              <div class="bar fill" style="width:55%">
              </div>
              <div class="tag bold flex">Node.js</div>
              <span>50%</span>
            </div>

            <div class="bar flex">
              <div class="bar fill" style="width:40%">
              </div>
              <div class="tag bold flex">Php</div>
              <span>40%</span>
            </div>

            <div class="bar flex">
              <div class="bar fill" style="width:55%">
              </div>
              <div class="tag bold flex">UI Design</div>
              <span>50%</span>
            </div>

            <div class="bar flex">
              <div class="bar fill" style="width:60%">
              </div>
              <div class="tag bold flex">Photoshop</div>
              <span>60%</span>
            </div>

            <div class="bar flex">
              <div class="bar fill" style="width:55%">
              </div>
              <div class="tag bold flex">Illustrator</div>
              <span>55%</span>
            </div>

            <div class="bar flex">
              <div class="bar fill" style="width:30%">
              </div>
              <div class="tag bold flex">Premiere</div>
              <span>30%</span>
            </div>

            <div class="bar flex">
              <div class="bar fill" style="width:25%">
              </div>
              <div class="tag bold flex">After Effects</div>
              <span>25%</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->
  <!-- progress-bar -->


  <!-- Portfolio Grid
  <section class="bg-light" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Portfolio</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Threads</h4>
            <p class="text-muted">Illustration</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Explore</h4>
            <p class="text-muted">Graphic Design</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Finish</h4>
            <p class="text-muted">Identity</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Lines</h4>
            <p class="text-muted">Branding</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Southwest</h4>
            <p class="text-muted">Website Design</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
      </div>
    </div>
  </section> -->




  <!-- FILTER GALLERY -->
  <section class="bg-light" id="filter_gallery">
    <div class="flex container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Filter Gallery</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>

      <!-- #2 https://codepen.io/victorw999/pen/mggqPM -->
      <div id="gallery_menu" class="wrapper">
        <ul class="">
          <li data-filter="all" class="active">
            <a href="#"><span class="textlink">ALL</span> <span class="icon_svg icon-all"></span> </a> </li>
          <li data-filter=".shopify">
            <a href="#"><span class="textlink">SHOPIFY</span> <span class="icon_svg icon-shopify "></span> </a></li>
          <li data-filter=".magento">
            <a href="#"><span class="textlink">MAGENTO</span> <span class="icon_svg icon-magento"></span> </a></li>
          <li data-filter=".react">
            <a href="#"><span class="textlink">REACT</span> <span class="icon_svg icon-react"></span></a></li>
          <li data-filter=".bootstrap">
            <a href="#"><span class="textlink">BOOTSTRAP</span> <span class="icon_svg icon-bootstrap"></span> </a></li>
          <li class="slide"></li>
        </ul>
      </div> <!-- #gallery_menu -->

      <div class="row container mixitup_content">
        <!-- mixitup needs ".container" to work -->






        <div class="mix shopify col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>

            <!-- <img class="img-fluid" src="img/portfolio/websites/aflex_debut.jpg" alt=""> -->
            <div class="sd_wrapper">
              <div class="sd_box" style="background-image:url(img/scrolldemo/scroll/akwa.jpg)">
              </div>
            </div>

          </a>
          <div class="portfolio-caption">
            <h4>Test Scroll</h4>
            <p class="text-muted">Illustration</p>
          </div>
        </div>


        <div class="mix shopify col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/websites/aflex_debut.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Aflex Debut</h4>
            <p class="text-muted">Illustration</p>
          </div>
        </div>

        <div class="mix shopify   col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/websites/aflex_fashion.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Aflex Fashionopolism</h4>
            <p class="text-muted">Graphic Design</p>
          </div>
        </div>
        <div class="mix shopify col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/websites/loveusa.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Love USA Apparel</h4>
            <p class="text-muted">Identity</p>
          </div>
        </div>
        <div class="mix magento col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/websites/akwa.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>AKWA</h4>
            <p class="text-muted">Branding</p>
          </div>
        </div>
        <div class="mix magento col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/websites/icantoo.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>iCantoo</h4>
            <p class="text-muted">Website Design</p>
          </div>
        </div>
        <div class="mix bootstrap col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
      </div> <!-- .row.mixitup_content -->
    </div> <!-- .container -->
  </section>
  <!-- END: FILTER GALLERY -->



  <!-- About
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">About</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>2009-2011</h4>
                  <h4 class="subheading">Our Humble Beginnings</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium
                    consectetur!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>March 2011</h4>
                  <h4 class="subheading">An Agency is Born</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium
                    consectetur!</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>December 2012</h4>
                  <h4 class="subheading">Transition to Full Service</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium
                    consectetur!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>July 2014</h4>
                  <h4 class="subheading">Phase Two Expansion</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium
                    consectetur!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Be Part
                  <br>Of Our
                  <br>Story!</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  -->


  <!-- Team
  <section class="bg-light" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
            <h4>Kay Garland</h4>
            <p class="text-muted">Lead Designer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
            <h4>Larry Parker</h4>
            <p class="text-muted">Lead Marketer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
            <h4>Diana Pertersen</h4>
            <p class="text-muted">Lead Developer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
        </div>
      </div>
    </div>
  </section>
  -->

  <!-- Clients
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section> -->

  <!-- ref: https://bit.ly/2Yo3KxP -->
  <section id="email-me">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contact Us</h2>
          <h3 class="section-subheading text-muted">victorw.design@gmail.com</h3>
        </div>
      </div><!-- row -->
      <div class="row">
        <div class="col-lg-12 emailme_wrapper">
          <div class="letter-image">
            <div class="animated-mail">
              <div class="back-fold"></div>
              <div class="letter">
                <div class="letter-border"></div>
                <div class="letter-title"></div>
                <div class="letter-context"></div>
                <div class="letter-stamp">
                  <div class="letter-stamp-inner"></div>
                </div>
              </div>
              <div class="top-fold"></div>
              <div class="body"></div>
              <div class="left-fold"></div>
            </div>
            <div class="shadow"></div>
          </div> <!-- letter-image -->
        </div> <!-- emailme_wrapper -->
      </div> <!-- row -->
    </div> <!-- container -->
  </section> <!-- #email-me -->

  <!-- Contact: original contact add reCAPTCHA -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contact Us</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">

          <form id="contactForm" name="sentMessage" novalidate>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
              </div>
            </div>

            <!-- google reCAPTCHA -->
            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
            <!--END: google reCAPTCHA -->

          </form>



        </div>
      </div>
    </div>
  </section>





  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Your Website 2018</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-linkedin"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                  maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Threads</li>
                  <li>Category: Illustration</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fa fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                  maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Explore</li>
                  <li>Category: Graphic Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fa fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                  maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Finish</li>
                  <li>Category: Identity</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fa fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                  maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Lines</li>
                  <li>Category: Branding</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fa fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                  maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Southwest</li>
                  <li>Category: Website Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fa fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                  maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Window</li>
                  <li>Category: Photography</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fa fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- MIXITUP -->
  <script src="vendor/mixitup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.js"></script>

  <!-- WAYPOINT -->
  <script src="vendor/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

  <script>

  </script>
</body>

</html>
