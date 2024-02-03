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
    <title>Listygo | Blog Grid</title>
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
                            <h1>Our Latest Blog Grid</h1>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Blog</li>
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
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog-box-layout2">
                                    <div class="post-thumb">
                                        <a href="single-blog.html"><img src="img/blog/blog3.jpg" alt="Blog" class="img-fluid"></a>
                                    </div>
                                    <div class="post-content">
                                        <ul class="entry-meta">
                                            <li><a href="blog1.html" class="entry-date">22 October, 2018</a> .
                                                Entertainment</li>
                                        </ul>
                                        <h3 class="post-title"><a href="single-blog.html">Strong statement stic
                                                intentent
                                                areasty.</a></h3>
                                        <div class="content">
                                            <p>Malesuada nunc tincdunt libero vulpuonec uttw viverra semraes ent porta
                                                rutrum
                                                lorem
                                                tristiqueale.</p>
                                        </div>
                                        <a href="single-blog.html" class="btn-text size-sm color-dark hover-primary btn-icon">Read
                                            More<i class="item-icon fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog-box-layout2">
                                    <div class="post-thumb">
                                        <a href="single-blog.html"><img src="img/blog/blog4.jpg" alt="Blog" class="img-fluid"></a>
                                    </div>
                                    <div class="post-content">
                                        <ul class="entry-meta">
                                            <li><a href="blog1.html" class="entry-date">22 October, 2018</a> .
                                                Entertainment</li>
                                        </ul>
                                        <h3 class="post-title"><a href="single-blog.html">Strong statement stic
                                                intentent
                                                areasty.</a></h3>
                                        <div class="content">
                                            <p>Malesuada nunc tincdunt libero vulpuonec uttw viverra semraes ent porta
                                                rutrum
                                                lorem
                                                tristiqueale.</p>
                                        </div>
                                        <a href="single-blog.html" class="btn-text size-sm color-dark hover-primary btn-icon">Read
                                            More<i class="item-icon fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog-box-layout2">
                                    <div class="post-thumb">
                                        <a href="single-blog.html"><img src="img/blog/blog5.jpg" alt="Blog" class="img-fluid"></a>
                                    </div>
                                    <div class="post-content">
                                        <ul class="entry-meta">
                                            <li><a href="blog1.html" class="entry-date">22 October, 2018</a> .
                                                Entertainment</li>
                                        </ul>
                                        <h3 class="post-title"><a href="single-blog.html">Strong statement stic
                                                intentent
                                                areasty.</a></h3>
                                        <div class="content">
                                            <p>Malesuada nunc tincdunt libero vulpuonec uttw viverra semraes ent porta
                                                rutrum
                                                lorem
                                                tristiqueale.</p>
                                        </div>
                                        <a href="single-blog.html" class="btn-text size-sm color-dark hover-primary btn-icon">Read
                                            More<i class="item-icon fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog-box-layout2">
                                    <div class="post-thumb">
                                        <a href="single-blog.html"><img src="img/blog/blog6.jpg" alt="Blog" class="img-fluid"></a>
                                    </div>
                                    <div class="post-content">
                                        <ul class="entry-meta">
                                            <li><a href="blog1.html" class="entry-date">22 October, 2018</a> .
                                                Entertainment</li>
                                        </ul>
                                        <h3 class="post-title"><a href="single-blog.html">Strong statement stic
                                                intentent
                                                areasty.</a></h3>
                                        <div class="content">
                                            <p>Malesuada nunc tincdunt libero vulpuonec uttw viverra semraes ent porta
                                                rutrum
                                                lorem
                                                tristiqueale.</p>
                                        </div>
                                        <a href="single-blog.html" class="btn-text size-sm color-dark hover-primary btn-icon">Read
                                            More<i class="item-icon fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog-box-layout2">
                                    <div class="post-thumb">
                                        <a href="single-blog.html"><img src="img/blog/blog5.jpg" alt="Blog" class="img-fluid"></a>
                                    </div>
                                    <div class="post-content">
                                        <ul class="entry-meta">
                                            <li><a href="blog1.html" class="entry-date">22 October, 2018</a> .
                                                Entertainment</li>
                                        </ul>
                                        <h3 class="post-title"><a href="single-blog.html">Strong statement stic
                                                intentent
                                                areasty.</a></h3>
                                        <div class="content">
                                            <p>Malesuada nunc tincdunt libero vulpuonec uttw viverra semraes ent porta
                                                rutrum
                                                lorem
                                                tristiqueale.</p>
                                        </div>
                                        <a href="single-blog.html" class="btn-text size-sm color-dark hover-primary btn-icon">Read
                                            More<i class="item-icon fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog-box-layout2">
                                    <div class="post-thumb">
                                        <a href="single-blog.html"><img src="img/blog/blog6.jpg" alt="Blog" class="img-fluid"></a>
                                    </div>
                                    <div class="post-content">
                                        <ul class="entry-meta">
                                            <li><a href="blog1.html" class="entry-date">22 October, 2018</a> .
                                                Entertainment</li>
                                        </ul>
                                        <h3 class="post-title"><a href="single-blog.html">Strong statement stic
                                                intentent
                                                areasty.</a></h3>
                                        <div class="content">
                                            <p>Malesuada nunc tincdunt libero vulpuonec uttw viverra semraes ent porta
                                                rutrum
                                                lorem
                                                tristiqueale.</p>
                                        </div>
                                        <a href="single-blog.html" class="btn-text size-sm color-dark hover-primary btn-icon">Read
                                            More<i class="item-icon fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog-box-layout2">
                                    <div class="post-thumb">
                                        <a href="single-blog.html"><img src="img/blog/blog3.jpg" alt="Blog" class="img-fluid"></a>
                                    </div>
                                    <div class="post-content">
                                        <ul class="entry-meta">
                                            <li><a href="blog1.html" class="entry-date">22 October, 2018</a> .
                                                Entertainment</li>
                                        </ul>
                                        <h3 class="post-title"><a href="single-blog.html">Strong statement stic
                                                intentent
                                                areasty.</a></h3>
                                        <div class="content">
                                            <p>Malesuada nunc tincdunt libero vulpuonec uttw viverra semraes ent porta
                                                rutrum
                                                lorem
                                                tristiqueale.</p>
                                        </div>
                                        <a href="single-blog.html" class="btn-text size-sm color-dark hover-primary btn-icon">Read
                                            More<i class="item-icon fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog-box-layout2">
                                    <div class="post-thumb">
                                        <a href="single-blog.html"><img src="img/blog/blog4.jpg" alt="Blog" class="img-fluid"></a>
                                    </div>
                                    <div class="post-content">
                                        <ul class="entry-meta">
                                            <li><a href="blog1.html" class="entry-date">22 October, 2018</a> .
                                                Entertainment</li>
                                        </ul>
                                        <h3 class="post-title"><a href="single-blog.html">Strong statement stic
                                                intentent
                                                areasty.</a></h3>
                                        <div class="content">
                                            <p>Malesuada nunc tincdunt libero vulpuonec uttw viverra semraes ent porta
                                                rutrum
                                                lorem
                                                tristiqueale.</p>
                                        </div>
                                        <a href="single-blog.html" class="btn-text size-sm color-dark hover-primary btn-icon">Read
                                            More<i class="item-icon fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog-box-layout2">
                                    <div class="post-thumb">
                                        <a href="single-blog.html"><img src="img/blog/blog5.jpg" alt="Blog" class="img-fluid"></a>
                                    </div>
                                    <div class="post-content">
                                        <ul class="entry-meta">
                                            <li><a href="blog1.html" class="entry-date">22 October, 2018</a> .
                                                Entertainment</li>
                                        </ul>
                                        <h3 class="post-title"><a href="single-blog.html">Strong statement stic
                                                intentent
                                                areasty.</a></h3>
                                        <div class="content">
                                            <p>Malesuada nunc tincdunt libero vulpuonec uttw viverra semraes ent porta
                                                rutrum
                                                lorem
                                                tristiqueale.</p>
                                        </div>
                                        <a href="single-blog.html" class="btn-text size-sm color-dark hover-primary btn-icon">Read
                                            More<i class="item-icon fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog-box-layout2">
                                    <div class="post-thumb">
                                        <a href="single-blog.html"><img src="img/blog/blog6.jpg" alt="Blog" class="img-fluid"></a>
                                    </div>
                                    <div class="post-content">
                                        <ul class="entry-meta">
                                            <li><a href="blog1.html" class="entry-date">22 October, 2018</a> .
                                                Entertainment</li>
                                        </ul>
                                        <h3 class="post-title"><a href="single-blog.html">Strong statement stic
                                                intentent
                                                areasty.</a></h3>
                                        <div class="content">
                                            <p>Malesuada nunc tincdunt libero vulpuonec uttw viverra semraes ent porta
                                                rutrum
                                                lorem
                                                tristiqueale.</p>
                                        </div>
                                        <a href="single-blog.html" class="btn-text size-sm color-dark hover-primary btn-icon">Read
                                            More<i class="item-icon fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="pagination-layout1">
                            <li>
                                <a href="#"><i class="flaticon-back"></i></a>
                            </li>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a href="#">6</a>
                            </li>
                            <li>
                                <a href="#">7</a>
                            </li>
                            <li>
                                <a href="#"><i class="flaticon-right-arrow"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
                        <div class="widget widget-box-padding widget-search">
                            <h3 class="widget-title">Search</h3>
                            <div class="input-group stylish-input-group">
                                <input type="text" class="form-control" placeholder="What are you looking For?">
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <span class="flaticon-search" aria-hidden="true"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="widget widget-box-padding widget-categories">
                            <h3 class="widget-title">Categories</h3>
                            <ul class="block-list">
                                <li>
                                    <a href="#">
                                        <i class="fas fa-angle-right"></i>Destinations</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-angle-right"></i>Food & Drink</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-angle-right"></i>Lifestyle</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-angle-right"></i>Stay</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-angle-right"></i>Travel</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget-box-padding widget-follow-us">
                            <h3 class="widget-title">Follow Us</h3>
                            <ul class="inline-list">
                                <li class="single-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-skype"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fas fa-rss"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-vk"></i></a></li>
                            </ul>
                        </div>
                        <div class="widget widget-box-padding widget-new-rated">
                            <h3 class="widget-title">Latest Posts</h3>
                            <ul class="block-list">
                                <li class="single-item">
                                    <div class="item-img">
                                        <a href="#"><img src="img/blog/post1.jpg" alt="Post"></a>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-title"><a href="#">Shanghai Hotel</a></h4>
                                        <div class="item-place">China Town</div>
                                        <ul class="item-rating">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="single-item">
                                    <div class="item-img">
                                        <a href="#"><img src="img/blog/post2.jpg" alt="Post"></a>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-title"><a href="#">Shanghai Hotel</a></h4>
                                        <div class="item-place">China Town</div>
                                        <ul class="item-rating">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="single-item">
                                    <div class="item-img">
                                        <a href="#"><img src="img/blog/post3.jpg" alt="Post"></a>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-title"><a href="#">Shanghai Hotel</a></h4>
                                        <div class="item-place">China Town</div>
                                        <ul class="item-rating">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget-box-padding widget-newsletter-subscribe">
                            <h3>Newsletter Subscriber</h3>
                            <p>Subscribe us for new articles</p>
                            <form class="newsletter-subscribe-form">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter your e-mail" class="form-control" name="email"
                                        data-error="E-mail field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="item-btn">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                        <div class="widget widget-box-padding widget-poster">
                            <div class="item-img">
                                <img src="img/figure/sidebar-figure.jpg" alt="Poster" class="img-fluid">
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