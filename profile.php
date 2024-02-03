<?php
include('php/auth.php');
include("conn.php");

if (isset($_SESSION["id"]) && $_SESSION["id"] != "") {
    if (isset($_SESSION["idrol"]) && $_SESSION["idrol"] == "3") {
        // Redireccionar al usuario a index.php
        header('Location: index.php');
        exit(); 
    }
}
?>

<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Listygo | Profile</title>
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

      <?php include("admin-header.php") ?>;

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
                <h1>User Profile</h1>
                <ul>
                  <li>
                    <a href="index.html">Home</a>
                  </li>
                  <li>My Profile</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Inne Page Banner Area End Here -->
      <!-- Blog Area Start Here -->
      <section class="padding-top-6 padding-bottom-7 bg--accent">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <form class="listing-form">
                <div class="inner-box">
                  <h3 class="inner-item-heading2">User Information</h3>
                  <div class="row">
                    <div class="col-12">
                      <label>User Name</label>
                      <div class="form-group">
                        <input
                          type="text"
                          placeholder=""
                          class="form-control"
                          name="name"
                        />
                      </div>
                    </div>
                    <div class="col-12">
                      <label>E-mail</label>
                      <div class="form-group">
                        <input
                          type="text"
                          placeholder=""
                          class="form-control"
                          name="name"
                        />
                      </div>
                    </div>
                    <div class="col-12">
                      <label>Phone</label>
                      <div class="form-group">
                        <input
                          type="text"
                          placeholder=""
                          class="form-control"
                          name="name"
                        />
                      </div>
                    </div>
                    <div class="col-12">
                      <label>Short Description</label>
                      <div class="form-group">
                        <textarea
                          placeholder=""
                          class="textarea form-control"
                          name="message"
                          rows="7"
                          cols="20"
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-lg-5 col-md-8 col-sm-9 col-12">
                      <label>Click here or drope files to upload</label>
                      <div class="form-group">
                        <input
                          type="file"
                          id="img-upload2"
                          class="form-control img-upload-box"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="inner-box">
                  <h3 class="inner-item-heading2">Password</h3>
                  <div class="row">
                    <div class="col-12">
                      <label>Type password *</label>
                      <div class="form-group">
                        <input
                          type="text"
                          placeholder=""
                          class="form-control"
                          name="name"
                        />
                      </div>
                    </div>
                    <div class="col-12">
                      <label>Confirm password *</label>
                      <div class="form-group">
                        <input
                          type="text"
                          placeholder=""
                          class="form-control"
                          name="name"
                        />
                      </div>
                    </div>
                    <div class="col-12">
                      <label>Security Question </label>
                      <div class="form-group">
                        <input
                          type="text"
                          placeholder=""
                          class="form-control"
                          name="name"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="inner-box">
                  <button type="submit" class="btn-upload">SAVE NOW</button>
                </div>
              </form>
            </div>
            <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
              <div class="widget widget-box-padding widget-follow-us">
                <h3 class="widget-title">Follow Us</h3>
                <ul class="inline-list">
                  <li class="single-item">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li class="single-item">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li class="single-item">
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  </li>
                  <li class="single-item">
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                  </li>
                  <li class="single-item">
                    <a href="#"><i class="fab fa-skype"></i></a>
                  </li>
                  <li class="single-item">
                    <a href="#"><i class="fas fa-rss"></i></a>
                  </li>
                  <li class="single-item">
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                  </li>
                  <li class="single-item">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li class="single-item">
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                  </li>
                  <li class="single-item">
                    <a href="#"><i class="fab fa-vk"></i></a>
                  </li>
                </ul>
              </div>
              <div
                class="widget widget-box-padding widget-newsletter-subscribe"
              >
                <h3>Newsletter Subscriber</h3>
                <p>Subscribe us for new articles</p>
                <form class="newsletter-subscribe-form">
                  <div class="form-group">
                    <input
                      type="text"
                      placeholder="Enter your e-mail"
                      class="form-control"
                      name="email"
                      data-error="E-mail field is required"
                      required
                    />
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="item-btn">
                      Subscribe Now
                    </button>
                  </div>
                </form>
              </div>
              <div class="widget widget-box-padding widget-poster">
                <div class="item-img">
                  <img
                    src="img/figure/sidebar-figure.jpg"
                    alt="Poster"
                    class="img-fluid"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Blog Area End Here -->
      <!-- Footer Area Start Here -->

      <?php include 'footer.php'; ?>
      
      <!-- Footer Area End Here -->
    </div>
    <!-- Modal Start-->

    <?php include('loginModal.php'); ?>
   
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
