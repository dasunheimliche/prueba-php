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

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Listygo | Pricing</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/favicon.ico">
    <!-- Normalize Css -->
    <link rel="stylesheet" href="/css/normalize.css">
    <!-- Main Css -->
    <link rel="stylesheet" href="/css/main.css">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/css/animate.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="/css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernizr Js -->
    <script src="/js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
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
        <section class="inner-page-banner bg-common inner-page-top-margin overlay-dark-40" data-bg-image="img/figure/inner-page-banner1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Our Price Table</h1>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Price Table</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Pricing Page Start Here -->
        <section class="pricing-wrap-layout1 padding-top-10 padding-bottom-7 bg--accent">
            <div class="container">
                <div class="section-heading heading-dark heading-center">
                    <div class="item-sub-title">Choose your Affordable Price & Package</div>
                    <h2 class="item-title">Our Pricing Plan</h2>
                </div>
                <div class="row gutters-20">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="pricing-box-layout1">
                            <h3 class="item-title">REGULAR</h3>
                            <div class="item-price">
                                <div class="item-currency">$</div>9<div class="item-duration">Month</div>
                            </div>
                            <div class="item-content">
                                <ul>
                                    <li class="active">01 OneListing</li>
                                    <li class="active">5GB Storage</li>
                                    <li class="active">30 Days Availability</li>
                                    <li class="active">Community Access</li>
                                    <li>Free Posting Ads</li>
                                    <li>Free Domain</li>
                                    <li>Free Hosting</li>
                                </ul>
                                <a href="#" class="item-btn">START NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="pricing-box-layout1">
                            <h3 class="item-title">RECOMMENDED</h3>
                            <div class="item-price">
                                <div class="item-currency">$</div>18<div class="item-duration">Month</div>
                            </div>
                            <div class="item-content">
                                <ul>
                                    <li class="active">03 OneListing</li>
                                    <li class="active">15GB Storage</li>
                                    <li class="active">30 Days Availability</li>
                                    <li class="active">Community Access</li>
                                    <li class="active">Free Posting Ads</li>
                                    <li>Free Domain</li>
                                    <li>Free Hosting</li>
                                </ul>
                                <a href="#" class="item-btn">START NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 d-md-none d-lg-none d-block d-xl-block">
                        <div class="pricing-box-layout1">
                            <h3 class="item-title">BUSINESS</h3>
                            <div class="item-price">
                                <div class="item-currency">$</div>69<div class="item-duration">Month</div>
                            </div>
                            <div class="item-content">
                                <ul>
                                    <li class="active">20 OneListing</li>
                                    <li class="active">50GB Storage</li>
                                    <li class="active">30 Days Availability</li>
                                    <li class="active">Community Access</li>
                                    <li class="active">Free Posting Ads</li>
                                    <li class="active">Free Domain</li>
                                    <li class="active">Free Hosting</li>
                                </ul>
                                <a href="#" class="item-btn">START NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Page End Here -->
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