<?php
include('php/auth.php');
include 'conn.php';
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Listygo | Add Listing</title>
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
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="/css/select2.min.css">
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
        <header id="site-header" class="header-one">
            <div class="header-main header-sticky bg--dark">
                <div class="container-fluid">
                    <div class="mob-menu-open toggle-menu">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-12">
                            <div class="site-logo">
                                <a href="index.html" class="main-logo"><img src="img/logo.png" alt="Site Logo"></a>
                                <a href="index.html" class="sticky-logo"><img src="img/sticky-logo.png" alt="Site Logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12 possition-static">
                            <nav class="site-nav">
                                <ul class="site-menu">
                                    <li><a href="#">Home</a>
                                        <ul class="dropdown-menu-col-1">
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index2.html">Home 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about-us.html">About</a></li>
                                    <li>
                                        <a href="#">Listing</a>
                                        <ul class="dropdown-menu-col-1">
                                            <li>
                                                <a href="listing-grid-view1.html">Listing Grid View 1</a>
                                            </li>
                                            <li>
                                                <a href="listing-grid-view2.html">Listing Grid View 2</a>
                                            </li>
                                            <li>
                                                <a href="listing-grid-view3.html">Listing Grid View 3</a>
                                            </li>
                                            <li>
                                                <a href="listing-grid-view4.html">Listing Grid View 4</a>
                                            </li>
                                            <li>
                                                <a href="listing-grid-view5.html">Listing Grid View 5</a>
                                            </li>
                                            <li>
                                                <a href="listing-list-view1.html">Listing List View 1</a>
                                            </li>
                                            <li>
                                                <a href="listing-list-view2.html">Listing List View 2</a>
                                            </li>
                                            <li>
                                                <a href="single-listing1.html">Listing Details 1</a>
                                            </li>
                                            <li>
                                                <a href="single-listing2.html">Listing Details 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Events</a>
                                        <ul class="dropdown-menu-col-1">
                                            <li>
                                                <a href="event.html">Event</a>
                                            </li>
                                            <li>
                                                <a href="single-event.html">Event Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="possition-static hide-on-mobile-menu">
                                        <a href="#">Pages</a>
                                        <div class="template-mega-menu">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="menu-ctg-title">Home</div>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="index.html">
                                                                    <i class="fas fa-home"></i>Home 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="index2.html">
                                                                    <i class="fas fa-home"></i>Home 2</a>
                                                            </li>
                                                        </ul>
                                                        <div class="menu-ctg-title">Listing</div>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="listing-grid-view1.html"><i class="fas fa-map-marker-alt"></i>Listing
                                                                    Grid View 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="listing-grid-view2.html"><i class="fas fa-map-marker-alt"></i>Listing
                                                                    Grid View 2</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="menu-ctg-title">Listing</div>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="listing-grid-view3.html"><i class="fas fa-map-marker-alt"></i>Listing
                                                                    Grid View 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="listing-grid-view4.html"><i class="fas fa-map-marker-alt"></i>Listing
                                                                    Grid View 4</a>
                                                            </li>
                                                            <li>
                                                                <a href="listing-grid-view5.html"><i class="fas fa-map-marker-alt"></i>Listing
                                                                    Grid View 5</a>
                                                            </li>
                                                            <li>
                                                                <a href="listing-list-view1.html"><i class="fas fa-map-marker-alt"></i>Listing
                                                                    List View 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="listing-list-view2.html"><i class="fas fa-map-marker-alt"></i>Listing
                                                                    List View 2</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="menu-ctg-title">Listing</div>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="single-listing1.html"><i class="fas fa-map-marker-alt"></i>Listing
                                                                    Details 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="single-listing2.html"><i class="fas fa-map-marker-alt"></i>Listing
                                                                    Details 2</a>
                                                            </li>
                                                        </ul>
                                                        <div class="menu-ctg-title">Pages</div>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="add-listing.html">
                                                                    <i class="fab fa-elementor"></i>Add Listing
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="profile.html">
                                                                    <i class="fab fa-elementor"></i>Profile
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="menu-ctg-title">Pages</div>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="my-account.html">
                                                                    <i class="fas fa-user-circle"></i>My Account</a>
                                                            </li>
                                                            <li>
                                                                <a href="single-event.html">
                                                                    <i class="far fa-money-bill-alt"></i>Event Details</a>
                                                            </li>
                                                            <li>
                                                                <a href="pricing.html">
                                                                    <i class="far fa-money-bill-alt"></i>Pricing Plan</a>
                                                            </li>
                                                            <li>
                                                                <a href="faq.html">
                                                                    <i class="fas fa-file-archive"></i>Faq List</a>
                                                            </li>
                                                            <li>
                                                                <a href="404.php">
                                                                    <i class="fas fa-exclamation-triangle"></i>404
                                                                    Error</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="hide-on-desktop-menu">
                                        <a href="#">Pages</a>
                                        <ul class="dropdown-menu-col-1">
                                            <li>
                                                <a href="pricing.html">Pricing Plan</a>
                                            </li>
                                            <li>
                                                <a href="faq.html">Faq List</a>
                                            </li>
                                            <li>
                                                <a href="404.html">404 Error</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog</a>
                                        <ul class="dropdown-menu-col-1">
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="single-blog.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-3 d-none d-lg-flex align-items-center justify-content-end">
                            <div class="nav-action-elements">
                                <ul>
                                    <li>
                                        <button type="button" class="login-btn" data-toggle="modal" data-target="#myModal">
                                            <i class="flaticon-profile"></i>Login
                                        </button>
                                    </li>
                                    <li>
                                        <a href="add-listing.html" class="ghost-btn"><i class="fas fa-plus"></i>ADD
                                            LISTING</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End Here -->
        <!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common inner-page-top-margin overlay-dark-40" data-bg-image="img/figure/inner-page-banner1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Submit Listing</h1>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Add Listing</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Add Listing Area Start Here -->
        <section class="padding-top-6 padding-bottom-7 bg--accent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="listing-form">
                            <div class="inner-box">
                                <h3 class="inner-item-heading2">General Information</h3>
                                <div class="row">
                                    <div class="col-12">
                                        <label>Listng Title</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Category</label>
                                        <div class="form-group">
                                            <select class="select2" name="filter-by">
                                                <option value="0">Sort By</option>
                                                <option value="1">Newest</option>
                                                <option value="2">Top Sell</option>
                                                <option value="3">Top Rated</option>
                                                <option value="4">Price High</option>
                                                <option value="5">Low Price</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Keywords</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Description</label>
                                        <div class="form-group">
                                            <textarea placeholder="" class="textarea form-control" name="message" rows="7"
                                                cols="20"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-box">
                                <h3 class="inner-item-heading2">Add Location</h3>
                                <div class="row">
                                    <div class="col-12">
                                        <label>Address</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>City</label>
                                        <div class="form-group">
                                            <select class="select2" name="filter-by">
                                                <option value="0">Select</option>
                                                <option value="1">Dhaka</option>
                                                <option value="2">Austin</option>
                                                <option value="3">Boston</option>
                                                <option value="4">Chandler</option>
                                                <option value="5">Charlotte</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>State</label>
                                        <div class="form-group">
                                            <select class="select2" name="filter-by">
                                                <option value="0">Select</option>
                                                <option value="1">Dhaka</option>
                                                <option value="2">Texas</option>
                                                <option value="3">Massachusetts</option>
                                                <option value="4">Arizona</option>
                                                <option value="5">North Carolina</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Country</label>
                                        <div class="form-group">
                                            <select class="select2" name="filter-by">
                                                <option value="0">Select</option>
                                                <option value="1">Bangladesh</option>
                                                <option value="2">Australia</option>
                                                <option value="3">Japan</option>
                                                <option value="4">Poland</option>
                                                <option value="5">England</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Zip Code</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-box">
                                <h3 class="inner-item-heading2">Details Information</h3>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Name</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>E-mail</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Phone</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Website</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Designation</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Company</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>facebook (Optional)</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>twitter (Optional)</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Linked (Optional)</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Skype (Optional)</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Google plus (Optional)</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Pinterest (Optional)</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-box menu-list-wrapper">
                                <h3 class="inner-item-heading2">Gallery Images</h3>
                                <label>Click here or drope files to upload</label>
                                <div class="row menu-list">
                                    <div class="col-sm-4 col-12 menu-item">
                                        <div class="form-group">
                                            <input type="file" id="img-upload1" class="form-control img-upload-box">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12 menu-item">
                                        <div class="form-group">
                                            <input type="file" id="img-upload2" class="form-control img-upload-box">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12 menu-item">
                                        <div class="form-group">
                                            <input type="file" id="img-upload3" class="form-control img-upload-box">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12 menu-item hidden">
                                        <div class="form-group">
                                            <input type="file" id="img-upload4" class="form-control img-upload-box">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12 menu-item hidden">
                                        <div class="form-group">
                                            <input type="file" id="img-upload5" class="form-control img-upload-box">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12 menu-item hidden">
                                        <div class="form-group">
                                            <input type="file" id="img-upload6" class="form-control img-upload-box">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12 menu-item hidden">
                                        <div class="form-group">
                                            <input type="file" id="img-upload7" class="form-control img-upload-box">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12 menu-item hidden">
                                        <div class="form-group">
                                            <input type="file" id="img-upload8" class="form-control img-upload-box">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12 menu-item hidden">
                                        <div class="form-group">
                                            <input type="file" id="img-upload9" class="form-control img-upload-box">
                                        </div>
                                    </div>
                                </div>
                                <div class="loadmore" data-sm="1" data-md="2" data-lg="3">
                                    <a href="#" class="btn-add-more"><i class="fas fa-plus"></i>ADD MORE</a>
                                </div>
                            </div>
                            <div class="inner-box">
                                <h3 class="inner-item-heading2">Amenities</h3>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1">Alarm system</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox2" type="checkbox">
                                            <label for="checkbox2">Alarm system</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox3" type="checkbox">
                                            <label for="checkbox3">Onsite management</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox4" type="checkbox">
                                            <label for="checkbox4">Depanneur in building</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox5" type="checkbox">
                                            <label for="checkbox5">Onsite management</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox6" type="checkbox">
                                            <label for="checkbox6">Janitor</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox7" type="checkbox">
                                            <label for="checkbox7">Onsite management</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox8" type="checkbox">
                                            <label for="checkbox8">Depanneur in building</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox9" type="checkbox">
                                            <label for="checkbox9">Alarm system</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox10" type="checkbox">
                                            <label for="checkbox10">Janitor</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox11" type="checkbox">
                                            <label for="checkbox11">Alarm system</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox12" type="checkbox">
                                            <label for="checkbox12">Depanneur in building</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-box menu-list-wrapper opening-hours-wrap">
                                <h3 class="inner-item-heading2">Opening Hours</h3>
                                <div class="row menu-list">
                                    <div class="col-md-4 menu-item">
                                        <div class="form-group">
                                            <input type="text" placeholder="Type Day ..." class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-4 menu-item">
                                        <div class="form-group">
                                            <div class="stylish-input-group">
                                                <input type="text" placeholder="00.00" class="form-control" name="name">
                                                <select class="select2" name="filter-by">
                                                    <option value="0">am</option>
                                                    <option value="1">pm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 menu-item">
                                        <div class="form-group">
                                            <div class="stylish-input-group">
                                                <input type="text" placeholder="00.00" class="form-control" name="name">
                                                <select class="select2" name="filter-by">
                                                    <option value="0">am</option>
                                                    <option value="1">pm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 menu-item">
                                        <div class="form-group">
                                            <input type="text" placeholder="Type Day ..." class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-4 menu-item">
                                        <div class="form-group">
                                            <div class="stylish-input-group">
                                                <input type="text" placeholder="00.00" class="form-control" name="name">
                                                <select class="select2" name="filter-by">
                                                    <option value="0">am</option>
                                                    <option value="1">pm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 menu-item">
                                        <div class="form-group">
                                            <div class="stylish-input-group">
                                                <input type="text" placeholder="00.00" class="form-control" name="name">
                                                <select class="select2" name="filter-by">
                                                    <option value="0">am</option>
                                                    <option value="1">pm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 menu-item">
                                        <div class="form-group">
                                            <input type="text" placeholder="Type Day ..." class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-4 menu-item">
                                        <div class="form-group">
                                            <div class="stylish-input-group">
                                                <input type="text" placeholder="00.00" class="form-control" name="name">
                                                <select class="select2" name="filter-by">
                                                    <option value="0">am</option>
                                                    <option value="1">pm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 menu-item">
                                        <div class="form-group">
                                            <div class="stylish-input-group">
                                                <input type="text" placeholder="00.00" class="form-control" name="name">
                                                <select class="select2" name="filter-by">
                                                    <option value="0">am</option>
                                                    <option value="1">pm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 menu-item">
                                        <div class="form-group">
                                            <input type="text" placeholder="Type Day ..." class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-4 menu-item">
                                        <div class="form-group">
                                            <div class="stylish-input-group">
                                                <input type="text" placeholder="00.00" class="form-control" name="name">
                                                <select class="select2" name="filter-by">
                                                    <option value="0">am</option>
                                                    <option value="1">pm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 menu-item">
                                        <div class="form-group">
                                            <div class="stylish-input-group">
                                                <input type="text" placeholder="00.00" class="form-control" name="name">
                                                <select class="select2" name="filter-by">
                                                    <option value="0">am</option>
                                                    <option value="1">pm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 menu-item hidden">
                                        <div class="form-group">
                                            <input type="text" placeholder="Type Day ..." class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-4 menu-item hidden">
                                        <div class="form-group">
                                            <div class="stylish-input-group">
                                                <input type="text" placeholder="00.00" class="form-control" name="name">
                                                <select class="select2" name="filter-by">
                                                    <option value="0">am</option>
                                                    <option value="1">pm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 menu-item hidden">
                                        <div class="form-group">
                                            <div class="stylish-input-group">
                                                <input type="text" placeholder="00.00" class="form-control" name="name">
                                                <select class="select2" name="filter-by">
                                                    <option value="0">am</option>
                                                    <option value="1">pm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 menu-item hidden">
                                        <div class="form-group">
                                            <input type="text" placeholder="Type Day ..." class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-4 menu-item hidden">
                                        <div class="form-group">
                                            <div class="stylish-input-group">
                                                <input type="text" placeholder="00.00" class="form-control" name="name">
                                                <select class="select2" name="filter-by">
                                                    <option value="0">am</option>
                                                    <option value="1">pm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 menu-item hidden">
                                        <div class="form-group">
                                            <div class="stylish-input-group">
                                                <input type="text" placeholder="00.00" class="form-control" name="name">
                                                <select class="select2" name="filter-by">
                                                    <option value="0">am</option>
                                                    <option value="1">pm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 menu-item hidden">
                                        <div class="form-group">
                                            <input type="text" placeholder="Type Day ..." class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-4 menu-item hidden">
                                        <div class="form-group">
                                            <div class="stylish-input-group">
                                                <input type="text" placeholder="00.00" class="form-control" name="name">
                                                <select class="select2" name="filter-by">
                                                    <option value="0">am</option>
                                                    <option value="1">pm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 menu-item hidden">
                                        <div class="form-group">
                                            <div class="stylish-input-group">
                                                <input type="text" placeholder="00.00" class="form-control" name="name">
                                                <select class="select2" name="filter-by">
                                                    <option value="0">am</option>
                                                    <option value="1">pm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="loadmore" data-sm="3" data-md="3" data-lg="3">
                                    <a href="#" class="btn-add-more"><i class="fas fa-plus"></i>ADD MORE DAY</a>
                                </div>
                            </div>
                            <div class="inner-box">
                                <h3 class="inner-item-heading2">Pricing</h3>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" placeholder="Title" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" placeholder="$00.00" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" placeholder="$00.00" class="form-control" name="name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-box">
                                <button type="submit" class="btn-upload">UPLOAD NOW</button>
                            </div>
                        </form>
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
        <!-- Add Listing Area End Here -->
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
    <!-- Select 2 Js -->
    <script src="/js/select2.full.min.js"></script>
    <!-- Smoothscroll Js -->
    <script src="/js/smoothscroll.min.js"></script>
    <!-- Custom Js -->
    <script src="/js/main.js"></script>
</body>

</html>