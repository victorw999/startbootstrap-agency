<?php
// load Google Recaptcha's contant keys
require 'recaptcha/constant.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="web developer portfolio">
  <meta name="author" content="victor">
  <title>Victor's Portfolio</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
    type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template
    gulp to complie scss files in scss/
  -->
  <link href="css/agency.min.css" rel="stylesheet">

  <!-- custom icoMoon icons  -->
  <link href="img/icons/icomoon/style.css" rel="stylesheet">

  <!-- favicon -->
  <link rel="icon" href="logo.ico">

  <!-- google re-captcha -->
  <!-- load Google Recaptcha V3 API, so that "grecaptcha.execute()"" can be used below in "js/contact_me.js" -->
  <script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>"></script>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <img src="logo.svg" style="width:3rem;" alt="findvictor.com">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
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

    <img src="img/svg/header.svg" alt="">

    <!-- MAIN WELCOME MSG -->
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Welcome!</div>
        <div class="intro-heading text-uppercase">AKWA 20.05.09 b deploy bluehost</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
      </div>
    </div>
  </header>



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

        <!--
          SCROLL THUMB
         -->
        <div class="mix shopify col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#modalpopup_akwa">
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
            <h4>akwa.com</h4>
            <p class="text-muted">
              Magento 1&2, JS,
              PHP, ASP
            </p>
          </div>
        </div>

        <!--
          AKWA
        -->
        <div class="mix magento col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#modalpopup_akwa">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/websites/akwa.jpg" alt="made in usa corporate wear">
          </a>
          <div class="portfolio-caption">
            <h4>AKWA</h4>
            <p class="text-muted">
              Magento 1&2, JS,
              PHP, ASP
            </p>
          </div>
        </div>

        <!--
          ICANTOO
         -->
        <div class="mix magento col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#modalpopup_ic2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/websites/icantoo.jpg" alt="made in usa resort wear">
          </a>
          <div class="portfolio-caption">
            <h4>iCantoo</h4>
            <p class="text-muted">
              Magento 1&2, JS,
              PHP, ASP
            </p>
          </div>
        </div>

        <!--
          AFLEX DEBUT
         -->
        <div class="mix shopify col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#modalpopup_debut">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/websites/aflex_debut.jpg" alt="made in usa leggings">
          </a>
          <div class="portfolio-caption">
            <h4>Aflex Debut</h4>
            <p class="text-muted">Shopify, Liquid, Node.js</p>
          </div>
        </div>

        <!--
          AFLEX FASHIONOPLOSIM
         -->
        <div class="mix shopify   col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#modalpopup_fashion">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/websites/aflex_fashion.jpg" alt="made in usa sports apparel">
          </a>
          <div class="portfolio-caption">
            <h4>Aflex Fashion</h4>
            <p class="text-muted">Shopify, Liquid, Node.js</p>
          </div>
        </div>

        <!--
          LOVEUSA
         -->
        <div class="mix shopify col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/websites/loveusa.jpg" alt="made in usa ecommerce">
          </a>
          <div class="portfolio-caption">
            <h4>Love USA Apparel</h4>
            <p class="text-muted">Shopify, Liquid, Node.js</p>
          </div>
        </div>

        <!--
          WAREHOUSE
         -->
        <div class="mix bootstrap col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#modalpopup_warehouse">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Warehouse</h4>
            <p class="text-muted">React, Firebase, Material</p>
          </div>
        </div>
      </div> <!-- .row.mixitup_content -->
    </div> <!-- .container -->
  </section>
  <!-- END: FILTER GALLERY -->





  <!-- Contact: original contact add reCAPTCHA -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contact Us</h2>
          <h3 class="section-subheading text-muted">hello@findvictor.com</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required
                    data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required
                    data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required
                    data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message *" required
                    data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send
                  Message</button>
              </div>
            </div>

            <!-- google reCAPTCHA v3:
              SITE_KEY is a public key, it's ok to appear in inspector
              -->
            <div style='display:none'>
              <input class="prompt" type="hidden" name="sitekey" id="sitekey" value="<?php echo SITE_KEY; ?>"><br>
            </div>
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
          <span class="copyright">Copyright &copy; findvictor.com</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a target="_blank" href="https://github.com/victorw999">
                <i class="fa fa-github"></i>
              </a>
            </li>
            <!-- <li class="list-inline-item">
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
            </li> -->
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
  <!-- END: Footer -->


  <!-- Modals popups-->


  <!--
      MODAL POPUP 1
      AKWA
  -->
  <div class="portfolio-modal modal fade" id="modalpopup_akwa" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <!-- close btn -->
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">akwa.com</h2>
                <p class="item-intro text-muted">Apparel Wholesale</p>
                <!-- <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt=""> -->
                <p>A wholesale portal for clients to see updates of inventory, price, orders, tracking, promotion, etc.
                </p>
                <ul class="list-inline text-left">
                  <li>CMS: Magento 1 & 2</li>
                  <li>Frontend: CSS, Bootstrap, jQuery</li>
                  <li>Backend: PHP, ASP, Foxpro, Remote & in-house Server</li>
                  <li>Live Site: <a href="https:\\www.akwa.com" target="_blank">www.akwa.com</a></li>
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


  <!--
    MODAL POPUP 2
    ICANTOO
  -->

  <div class="portfolio-modal modal fade" id="modalpopup_ic2" tabindex="-1" role="dialog" aria-hidden="true">
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
                <h2 class="text-uppercase">iCantoo</h2>
                <p class="item-intro text-muted">Apparel Wholesale</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                <p>
                  - frontend design based on product, women resort wear
                  A wholesale portal for clients to see updates of inventory, price, orders, tracking, promotion, etc.

                  -
                </p>
                <li>CMS: Magento 1 & 2</li>
                <li>Frontend: CSS, Bootstrap, jQuery</li>
                <li>Backend: PHP, ASP, Foxpro, Remote & in-house Server</li>
                <li>Live Site: <a href="http:\\www.icantoo.com" target="_blank">www.icantoo.com</a></li>
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


  <!--
      MODAL POPUP 3
      AFLEX DEBUT
  -->
  <div class="portfolio-modal modal fade" id="modalpopup_debut" tabindex="-1" role="dialog" aria-hidden="true">
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
                <h2 class="text-uppercase">Aflex (Debut)</h2>
                <p class="item-intro text-muted">Apparel Ecommerce</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                <p> Using the graphic designer's spec
                  1. create look & feel mokcup based on product
                  Modifications were made based on "Debut" theme
                  implement designer's vision
                  2. create modules(Liquid) for desingers
                  to tweak minor fronend by themself.
                  3. add more custimation modules for desinger to direct manuallate the frontend looks.
                </p>
                <ul class="list-inline text-left">
                  <li>CMS: Shopify</li>
                  <li>Base Template: "Debut"</li>
                  <li>Liquid Node.js Html Sass</li>
                  <li><a href="https://vzine.myshopify.com/" target="_blank">Demo Store</a></li>
                  <li><a href="https://aflexusa.com/" target="_blank">Aflex Live Site</a></li>
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


  <!--
      MODAL POPUP 4
      AFLEX FASHION
  -->
  <div class="portfolio-modal modal fade" id="modalpopup_fashion" tabindex="-1" role="dialog" aria-hidden="true">
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
                <h2 class="text-uppercase">Aflex Fashionopolism</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est
                  blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia
                  expedita beatae cupiditate,
                  maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline text-left">
                  <li>CMS: Shopify</li>
                  <li>Base Template: "Fashionopolism"</li>
                  <li>Liquid Node.js Html Sass</li>
                  <li><a href="https://vzine-f001.myshopify.com/" target="_blank">Demo Store</a></li>
                  <li><a href="https://aflexusa.com/" target="_blank">Aflex Live Site</a></li>
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

  <!--
      MODAL POPUP 5
      LOVEUSA
  -->
  <div class="portfolio-modal modal fade" id="modalpopup_lua" tabindex="-1" role="dialog" aria-hidden="true">
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
                <h2 class="text-uppercase">Love USA Apparel</h2>
                <p class="item-intro text-muted">Apparel Ecommerce</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                <p>
                  custome template: provide customiabe liquid snippets
                  liquid html: provide webmaster modules to update products, images, homepage layout

                  base template: District

                </p>
                <ul class="list-inline text-left">
                  <li>CMS: Shopify</li>
                  <li>Base Template: "District"</li>
                  <li>Liquid Node.js Html Sass</li>
                  <li><a href="https://www.loveusaapparel.com/" target="_blank">
                      Live Site</a></li>
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

  <!--
      MODAL POPUP 6
      WAREHOUSE
  -->
  <div class="portfolio-modal modal fade" id="modalpopup_warehouse" tabindex="-1" role="dialog" aria-hidden="true">
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
                <h2 class="text-uppercase">Warehouse App</h2>
                <p class="item-intro text-muted">Warehouse Management System</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                <p>users from mobile and desktop
                  tracking worker efficiecyt
                  help management to make better decision workflow
                </p>
                <ul class="list-inline text-left">
                  <li>react, redux</li>
                  <li>firebase, firestore</li>
                  <li><a href="https://warehouse.findvictor.com/" target="_blank">
                      DEMO</a></li>
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

  <!-- END: Portfolio Modals -->

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