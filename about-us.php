
<?php
include 'conn.php';
session_start();
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Listygo | About Us</title>
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
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
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
        <section class="inner-page-banner bg-common inner-page-top-margin overlay-dark-40" data-bg-image="img/figure/inner-page-banner1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>About Us</h1>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>About</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- About Us Area Start Here -->
        <section class="about-wrap-layout1 padding-top-10 padding-bottom-7 bg--accent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="about-box-layout1">
                            <h2 class="item-title title-bar">What We Do</h2>
                            <p class="strong-paragraph">Dorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Aspernatur atque perferendis, laudantium quod architecto velit ad officiis facere
                                eveniet.</p>
                            <p>Morem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque perferendis,
                                laudantium quod architecto velit ad officiis facere eveniet in fuga fugiat delectus
                                rerum doloribus quos consectetur unde, expedita, quibusdam corporis impedit quia sequi
                                aliquid sit. Ducimus labore molestias odio nam necessitatibus laboriosam vero saepe
                                enim nobis. Repudiandae quidem, sint earum dolorum consequuntur dignissimos.</p>
                            <p>Morem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque perferendis,
                                laudantium quod architecto velit ad officiis facere eveniet in fuga fugiat delectus
                                rerum doloribus quos consectetur unde, expedita, quibusdam corporis impedit quia sequi
                                aliquid sit. Ducimus labore molestias odio nam necessitatibus laboriosam vero saepe
                                enim nobis. Repudiandae quidem, sint earum dolorum consequuntur dignissimos.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="about-box-layout2">
                            <img src="img/figure/video-bg1.jpg" alt="video">
                            <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Area End Here -->
        <!-- Banner Area Start Here -->
        <section class="action-wrap-layout1 padding-top-9 padding-bottom-10 bg-common overlay-primary-70"
            data-bg-image="img/figure/site-main-figure3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-box-layout1">
                            <h2 class="item-title">Add Your Listing Site</h2>
                            <p>Weimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five centuries</p>
                            <a href="#" class="btn-fill">Post your Listing</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Area End Here -->
        <!-- Team Area Start Here -->
        <section class="team-wrap-layout1 padding-top-9p6 padding-bottom-7 bg--accent">
            <div class="container">
                <div class="section-heading heading-dark heading-center">
                    <div class="item-sub-title">Behind the History</div>
                    <h2 class="item-title">Dedicated Team</h2>
                </div>
                <div class="rc-carousel nav-control-layout4 listing-box-grid" data-loop="true" data-items="6"
                    data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="2000"
                    data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                    data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false"
                    data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="2"
                    data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true"
                    data-r-large-dots="false" data-r-extra-large="3" data-r-extra-large-nav="true"
                    data-r-extra-large-dots="false">
                    <div class="team-box-layout1">
                        <div class="item-thumb">
                            <img src="img/team/team1.jpg" alt="Team">
                            <div class="item-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="#">Mark Willy</a></h3>
                            <div class="item-designation">CEO & Co-Founder </div>
                        </div>
                    </div>
                    <div class="team-box-layout1">
                        <div class="item-thumb">
                            <img src="img/team/team2.jpg" alt="Team">
                            <div class="item-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="#">Mark Willy</a></h3>
                            <div class="item-designation">CEO & Co-Founder </div>
                        </div>
                    </div>
                    <div class="team-box-layout1">
                        <div class="item-thumb">
                            <img src="img/team/team3.jpg" alt="Team">
                            <div class="item-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="#">Mark Willy</a></h3>
                            <div class="item-designation">CEO & Co-Founder </div>
                        </div>
                    </div>
                    <div class="team-box-layout1">
                        <div class="item-thumb">
                            <img src="img/team/team1.jpg" alt="Team">
                            <div class="item-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="#">Mark Willy</a></h3>
                            <div class="item-designation">CEO & Co-Founder </div>
                        </div>
                    </div>
                    <div class="team-box-layout1">
                        <div class="item-thumb">
                            <img src="img/team/team2.jpg" alt="Team">
                            <div class="item-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="#">Mark Willy</a></h3>
                            <div class="item-designation">CEO & Co-Founder </div>
                        </div>
                    </div>
                    <div class="team-box-layout1">
                        <div class="item-thumb">
                            <img src="img/team/team3.jpg" alt="Team">
                            <div class="item-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="#">Mark Willy</a></h3>
                            <div class="item-designation">CEO & Co-Founder </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Area End Here -->
        <!-- Footer Area Start Here -->
        
        <?php include 'footer.php'; ?>

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
    <!-- Owl Carousel Js -->
    <script src="/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup Js -->
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <!-- Smoothscroll Js -->
    <script src="/js/smoothscroll.min.js"></script>
    <!-- Custom Js -->
    <script src="/js/main.js"></script>
</body>

</html>