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
    <title>Listygo | Faq</title>
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
                            <h1>Faq’s Page</h1>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Faq’s</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Faq Content Area Start Here -->
        <section class="faq-wrap-layout1 padding-top-10 padding-bottom-10">
            <div class="container">
                <div class="section-heading heading-dark heading-center">
                    <div class="item-sub-title">Have you any kind of question, please feel free ask us.</div>
                    <h2 class="item-title">Frequently Ask Any Question</h2>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 col-sm-9 col-12">
                        <div id="accordion" class="faq-box-layout1">
                            <div class="card single-item">
                                <div class="card-header item-nav">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                        How To Buy A Product?
                                    </a>
                                </div>
                                <div id="collapse1" class="collapse show item-content-wrap" data-parent="#accordion">
                                    <div class="card-body item-content">
                                        <p>When an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centurbut also survived
                                            but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the releas survived not
                                            raseth leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card single-item">
                                <div class="card-header item-nav">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                        How To Get Product Support?
                                    </a>
                                </div>
                                <div id="collapse2" class="collapse item-content-wrap" data-parent="#accordion">
                                    <div class="card-body item-content">
                                        <p>When an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centurbut also survived
                                            but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the releas survived not
                                            raseth leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card single-item">
                                <div class="card-header item-nav">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                        Selling And Beign An Author
                                    </a>
                                </div>
                                <div id="collapse3" class="collapse item-content-wrap" data-parent="#accordion">
                                    <div class="card-body item-content">
                                        <p>When an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centurbut also survived
                                            but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the releas survived not
                                            raseth leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card single-item">
                                <div class="card-header item-nav">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                        Your Account
                                    </a>
                                </div>
                                <div id="collapse4" class="collapse item-content-wrap" data-parent="#accordion">
                                    <div class="card-body item-content">
                                        <p>When an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centurbut also survived
                                            but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the releas survived not
                                            raseth leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card single-item">
                                <div class="card-header item-nav">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                        Copyright And Trademark
                                    </a>
                                </div>
                                <div id="collapse5" class="collapse item-content-wrap" data-parent="#accordion">
                                    <div class="card-body item-content">
                                        <p>When an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centurbut also survived
                                            but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the releas survived not
                                            raseth leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq Content Area End Here -->
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
    <!-- Waypoints Js -->
    <script src="/js/waypoints.min.js"></script>
    <!-- Smoothscroll Js -->
    <script src="/js/smoothscroll.min.js"></script>
    <!-- Custom Js -->
    <script src="/js/main.js"></script>
</body>

</html>