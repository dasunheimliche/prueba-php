<?php
include 'conn.php';
session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Listygo | 404 Error</title>
    <meta name="description" content="" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/favicon.ico" />
    <!-- Normalize Css -->
    <link rel="stylesheet" href="/css/normalize.css" />
    <!-- Main Css -->
    <link rel="stylesheet" href="/css/main.css" />
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/css/animate.min.css" />
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="/css/fontawesome-all.min.css" />
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css" />
    <!-- Modernizr Js -->
    <script src="/js/modernizr-3.6.0.min.js"></script>
  </head>

  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- ScrollUp Start Here -->
    <a href="#wrapper" data-type="section-switch" class="scrollup">
      <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- ScrollUp End Here -->
    <div id="wrapper" class="wrapper">
      <!-- Header Area Start Here -->

      <?php
            if (isset($_SESSION["id"]) && $_SESSION["id"] != "") {

            if (isset($_SESSION["idrol"]) && $_SESSION["idrol"] == "3") {
                include 'header.php';
            } else {
                include 'admin-header.php';
            }
            } else {
                include 'header.php';
            }
        ?>
      
      <!-- Header Area End Here -->
      <!-- Inne Page Banner Area Start Here -->
      <section
        class="inner-page-banner bg-common inner-page-top-margin overlay-dark-40"
        data-bg-image="img/figure/inner-page-banner1.jpg"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="breadcrumbs-area">
                <h1>Error Page</h1>
                <ul>
                  <li>
                    <a href="index.html">Home</a>
                  </li>
                  <li>404 Page</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Inne Page Banner Area End Here -->
      <!-- Error Page Area Start Here -->
      <section class="error-page-wrap padding-top-20 padding-bottom-20">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="error-content-box">
                <img src="img/404.png" alt="404" class="img-fluid" />
                <h2 class="item-title">Sorry! Page Was Not Found</h2>
                <p class="item-details">
                  The page you are looking is not available or has been removed.
                  Try going to Home Page by using the button below.
                </p>
                <a href="#" class="item-btn">Go To Home Page</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Error Page Area End Here -->
      <!-- Footer Area Start Here -->
      <footer>
        <section class="footer-top-wrap">
          <div class="container">
            <div class="row">
              <div class="single-item col-lg-3 col-md-6 col-12">
                <div class="footer-box">
                  <div class="footer-logo">
                    <a href="index.html"
                      ><img
                        src="img/footer-logo.png"
                        class="img-fluid"
                        alt="footer-logo"
                    /></a>
                  </div>
                  <div class="footer-about">
                    <p>Use the Upwork platform chat ande your desktop metro.</p>
                  </div>
                  <div class="footer-contact-info">
                    <ul>
                      <li>
                        <i class="fas fa-map-marker-alt"></i>34 Street kancas
                        City United States area.
                      </li>
                      <li><i class="fas fa-phone"></i>+123 6669 000</li>
                      <li><i class="far fa-envelope"></i>info@listygo.com</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="single-item col-lg-3 col-md-6 col-12">
                <div class="footer-box">
                  <div class="footer-header">
                    <h3>Top Highlights</h3>
                  </div>
                  <div class="widget_nav_menu">
                    <ul>
                      <li><a href="single-departments.html">Hotel</a></li>
                      <li><a href="single-departments.html">Restaurant</a></li>
                      <li><a href="single-departments.html">Appartment</a></li>
                      <li>
                        <a href="single-departments.html">SPA &amp; Beauty</a>
                      </li>
                      <li><a href="single-departments.html">Atuomation</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="single-item col-lg-3 col-md-6 col-12">
                <div class="footer-box">
                  <div class="footer-header">
                    <h3>Support</h3>
                  </div>
                  <div class="widget_nav_menu">
                    <ul>
                      <li><a href="about-us.html">Live Chat</a></li>
                      <li><a href="about-us.html">FAQ</a></li>
                      <li><a href="faq.html">Stay safe</a></li>
                      <li><a href="appointment.html">Contact us</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="single-item col-lg-3 col-md-6 col-12">
                <div class="footer-box">
                  <div class="footer-header">
                    <h3>Follow Us On</h3>
                  </div>
                  <div class="footer-social">
                    <ul>
                      <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-skype"></i></a>
                      </li>
                    </ul>
                  </div>
                  <ul class="folow-us">
                    <li>
                      <a href="#">
                        <img src="img/figure/follow1.jpg" alt="follow" />
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="img/figure/follow2.jpg" alt="follow" />
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="footer-bottom-wrap">
          <div class="container">
            <div class="copyright">2018 Copyright © listygo.com</div>
          </div>
        </section>
      </footer>
      <!-- Footer Area End Here -->
    </div>
    <!-- Modal Start-->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="title-default-bold mb-none">Login</div>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body">
            <form class="login-form">
              <input
                class="main-input-box"
                type="text"
                placeholder="User Name"
              />
              <input
                class="main-input-box"
                type="password"
                placeholder="Password"
              />
              <div class="inline-box mb-5 mt-4">
                <div class="checkbox checkbox-primary">
                  <input id="checkbox1" type="checkbox" />
                  <label for="checkbox1">Remember Me</label>
                </div>
                <label class="lost-password"
                  ><a href="#">Lost your password?</a></label
                >
              </div>
              <div class="inline-box mb-5 mt-4">
                <button class="btn-fill" type="submit" value="Login">
                  Login
                </button>
                <a href="#" class="btn-register"
                  ><i class="fas fa-user"></i>Register Here!</a
                >
              </div>
            </form>
            <label>Login connect with your Social Network</label>
            <div class="login-box-social">
              <ul>
                <li>
                  <a href="#" class="facebook"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                </li>
                <li>
                  <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#" class="linkedin"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </li>
                <li>
                  <a href="#" class="google"
                    ><i class="fab fa-google-plus-g"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal End-->
    <!-- Jquery Js -->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="/js/popper.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Plugins Js -->
    <script src="/js/plugins.js"></script>
    <!-- Smoothscroll Js -->
    <script src="/js/smoothscroll.min.js"></script>
    <!-- Custom Js -->
    <script src="/js/main.js"></script>
  </body>
</html>
