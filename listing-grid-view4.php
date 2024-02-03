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
    <title>Listygo | Listing Grid View 4</title>
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
    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="/css/jquery.datetimepicker.css">
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
        <!-- Listing Area Start Here -->
        <section class="inner-page-top-margin padding-top-6 padding-bottom-7 bg--light">
            <div class="container">
                <div class="section-heading heading-dark heading-center">
                    <h2 class="item-title">What are You Loking For?</h2>
                </div>
                <div class="filter-box-layout2">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <div class="input-group stylish-input-group">
                                <input type="text" placeholder="cafe, shoppingmall, beauty &amp; spa ..." class="form-control"
                                    name="website" id="form-website" data-error="Search text required" required>
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <i class="flaticon-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <div class="input-group stylish-input-group">
                                <input type="email" placeholder="Type here city or locaion" class="form-control" name="email"
                                    id="form-email" data-error="Category name is required" required>
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <i class="flaticon-placeholder"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <i class="far fa-calendar-alt"></i>
                                <input type="text" class="form-control rt-date" placeholder="Date" name="date" id="form-date"
                                    data-error="Subject field is required" required />
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <i class="far fa-clock"></i>
                                <input type="text" class="form-control rt-time" placeholder="Time" name="time" id="form-time"
                                    data-error="Subject field is required" required />
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-12">
                            <div class="input-group">
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
                    </div>
                </div>
                <div class="listing-box-grid">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="product-box border-box">
                                <div class="item-img bg--gradient-50">
                                    <div class="item-status status-open active">Open</div>
                                    <div class="item-status status-save">Save 15%</div>
                                    <img src="img/listing/listing-1-1.jpg" alt="Listing" class="img-fluid grid-view-img">
                                    <img src="img/listing/listing-1-2.jpg" alt="Listing" class="img-fluid list-view-img">
                                    <ul class="item-rating">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>8.4<span> / 10</span></span> </li>
                                    </ul>
                                    <div class="item-logo"><img src="img/listing/logo1.png" alt="Logo"></div>
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title"><a href="#">Westfield Restaurant</a></h3>
                                    <p class="item-paragraph">Mountain Refuge Resort is the most ...
                                    </p>
                                    <ul class="contact-info">
                                        <li><i class="fas fa-map-marker-alt"></i>59 Street, Mk tower, Brooklyn</li>
                                        <li><i class="flaticon-phone-call"></i>+ 132 899 6330</li>
                                        <li><i class="fas fa-globe"></i>www.restauant.com</li>
                                    </ul>
                                    <ul class="meta-item">
                                        <li class="item-btn"><a href="#" class="btn-fill">Details</a></li>
                                        <li class="ctg-name"><a href="#"><i class="flaticon-chef"></i>Restaurant</a></li>
                                        <li class="entry-meta">
                                            <ul>
                                                <li class="tooltip-item ctg-icon" data-tips="Restaurant"><a href="#"><i
                                                            class="flaticon-chef"></i></a></li>
                                                <li class="tooltip-item" data-tips="My Favourite"><a href="#"><i class="fas fa-heart"></i></a></li>
                                                <li class="tooltip-item" data-tips="Gallery"><a href="#"><i class="far fa-image"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-box border-box">
                                <div class="item-img bg--gradient-50">
                                    <div class="item-status status-open active">Open</div>
                                    <div class="item-status status-save">Save 15%</div>
                                    <img src="img/listing/listing-2-1.jpg" alt="Listing" class="img-fluid grid-view-img">
                                    <img src="img/listing/listing-2-2.jpg" alt="Listing" class="img-fluid list-view-img">
                                    <ul class="item-rating">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>8.4<span> / 10</span></span> </li>
                                    </ul>
                                    <div class="item-logo"><img src="img/listing/logo2.png" alt="Logo"></div>
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title"><a href="#">Westfield Restaurant</a></h3>
                                    <p class="item-paragraph">Mountain Refuge Resort is the most ...
                                    </p>
                                    <ul class="contact-info">
                                        <li><i class="fas fa-map-marker-alt"></i>59 Street, Mk tower, Brooklyn</li>
                                        <li><i class="flaticon-phone-call"></i>+ 132 899 6330</li>
                                        <li><i class="fas fa-globe"></i>www.restauant.com</li>
                                    </ul>
                                    <ul class="meta-item">
                                        <li class="item-btn"><a href="#" class="btn-fill">Details</a></li>
                                        <li class="ctg-name"><a href="#"><i class="flaticon-coffee-cup"></i>Bar
                                                &amp; Cafe</a></li>
                                        <li class="entry-meta">
                                            <ul>
                                                <li class="tooltip-item ctg-icon" data-tips="Bar &amp; Cafe"><a href="#"><i
                                                            class="flaticon-coffee-cup"></i></a></li>
                                                <li class="tooltip-item" data-tips="My Favourite"><a href="#"><i class="fas fa-heart"></i></a></li>
                                                <li class="tooltip-item" data-tips="Gallery"><a href="#"><i class="far fa-image"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-box border-box">
                                <div class="item-img bg--gradient-50">
                                    <div class="item-status status-open active">Open</div>
                                    <div class="item-status status-save active">Save 15%</div>
                                    <img src="img/listing/listing-3-1.jpg" alt="Listing" class="img-fluid grid-view-img">
                                    <img src="img/listing/listing-3-2.jpg" alt="Listing" class="img-fluid list-view-img">
                                    <ul class="item-rating">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>8.4<span> / 10</span></span> </li>
                                    </ul>
                                    <div class="item-logo"><img src="img/listing/logo3.png" alt="Logo"></div>
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title"><a href="#">Westfield Restaurant</a></h3>
                                    <p class="item-paragraph">Mountain Refuge Resort is the most ...
                                    </p>
                                    <ul class="contact-info">
                                        <li><i class="fas fa-map-marker-alt"></i>59 Street, Mk tower, Brooklyn</li>
                                        <li><i class="flaticon-phone-call"></i>+ 132 899 6330</li>
                                        <li><i class="fas fa-globe"></i>www.restauant.com</li>
                                    </ul>
                                    <ul class="meta-item">
                                        <li class="item-btn"><a href="#" class="btn-fill">Details</a></li>
                                        <li class="ctg-name"><a href="#"><i class="flaticon-spa"></i>Spa</a></li>
                                        <li class="entry-meta">
                                            <ul>
                                                <li class="tooltip-item ctg-icon" data-tips="Beauty &amp; Spa"><a href="#"><i
                                                            class="flaticon-spa"></i></a></li>
                                                <li class="tooltip-item" data-tips="My Favourite"><a href="#"><i class="fas fa-heart"></i></a></li>
                                                <li class="tooltip-item" data-tips="Gallery"><a href="#"><i class="far fa-image"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-box border-box">
                                <div class="item-img bg--gradient-50">
                                    <div class="item-status status-open active">Open</div>
                                    <div class="item-status status-save">Save 15%</div>
                                    <img src="img/listing/listing-4-1.jpg" alt="Listing" class="img-fluid grid-view-img">
                                    <img src="img/listing/listing-4-2.jpg" alt="Listing" class="img-fluid list-view-img">
                                    <ul class="item-rating">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>8.4<span> / 10</span></span> </li>
                                    </ul>
                                    <div class="item-logo"><img src="img/listing/logo4.png" alt="Logo"></div>
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title"><a href="#">Westfield Restaurant</a></h3>
                                    <p class="item-paragraph">Mountain Refuge Resort is the most ...
                                    </p>
                                    <ul class="contact-info">
                                        <li><i class="fas fa-map-marker-alt"></i>59 Street, Mk tower, Brooklyn</li>
                                        <li><i class="flaticon-phone-call"></i>+ 132 899 6330</li>
                                        <li><i class="fas fa-globe"></i>www.restauant.com</li>
                                    </ul>
                                    <ul class="meta-item">
                                        <li class="item-btn"><a href="#" class="btn-fill">Details</a></li>
                                        <li class="ctg-name"><a href="#"><i class="flaticon-supermarket"></i>Shopping</a></li>
                                        <li class="entry-meta">
                                            <ul>
                                                <li class="tooltip-item ctg-icon" data-tips="Shopping"><a href="#"><i
                                                            class="flaticon-supermarket"></i></a></li>
                                                <li class="tooltip-item" data-tips="My Favourite"><a href="#"><i class="fas fa-heart"></i></a></li>
                                                <li class="tooltip-item" data-tips="Gallery"><a href="#"><i class="far fa-image"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-box border-box">
                                <div class="item-img bg--gradient-50">
                                    <div class="item-status status-open active">Open</div>
                                    <div class="item-status status-save active">Save 15%</div>
                                    <img src="img/listing/listing-5-1.jpg" alt="Listing" class="img-fluid grid-view-img">
                                    <img src="img/listing/listing-5-2.jpg" alt="Listing" class="img-fluid list-view-img">
                                    <ul class="item-rating">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>8.4<span> / 10</span></span> </li>
                                    </ul>
                                    <div class="item-logo"><img src="img/listing/logo5.png" alt="Logo"></div>
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title"><a href="#">Westfield Restaurant</a></h3>
                                    <p class="item-paragraph">Mountain Refuge Resort is the most ...
                                    </p>
                                    <ul class="contact-info">
                                        <li><i class="fas fa-map-marker-alt"></i>59 Street, Mk tower, Brooklyn</li>
                                        <li><i class="flaticon-phone-call"></i>+ 132 899 6330</li>
                                        <li><i class="fas fa-globe"></i>www.restauant.com</li>
                                    </ul>
                                    <ul class="meta-item">
                                        <li class="item-btn"><a href="#" class="btn-fill">Details</a></li>
                                        <li class="ctg-name"><a href="#"><i class="flaticon-musical-note"></i>Nightlife</a></li>
                                        <li class="entry-meta">
                                            <ul>
                                                <li class="tooltip-item ctg-icon" data-tips="Nightlife"><a href="#"><i
                                                            class="flaticon-musical-note"></i></a></li>
                                                <li class="tooltip-item" data-tips="My Favourite"><a href="#"><i class="fas fa-heart"></i></a></li>
                                                <li class="tooltip-item" data-tips="Gallery"><a href="#"><i class="far fa-image"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-box border-box">
                                <div class="item-img bg--gradient-50">
                                    <div class="item-status status-open active">Open</div>
                                    <div class="item-status status-save">Save 15%</div>
                                    <img src="img/listing/listing-6-1.jpg" alt="Listing" class="img-fluid grid-view-img">
                                    <img src="img/listing/listing-6-2.jpg" alt="Listing" class="img-fluid list-view-img">
                                    <ul class="item-rating">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>8.4<span> / 10</span></span> </li>
                                    </ul>
                                    <div class="item-logo"><img src="img/listing/logo6.png" alt="Logo"></div>
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title"><a href="#">Westfield Restaurant</a></h3>
                                    <p class="item-paragraph">Mountain Refuge Resort is the most ...
                                    </p>
                                    <ul class="contact-info">
                                        <li><i class="fas fa-map-marker-alt"></i>59 Street, Mk tower, Brooklyn</li>
                                        <li><i class="flaticon-phone-call"></i>+ 132 899 6330</li>
                                        <li><i class="fas fa-globe"></i>www.restauant.com</li>
                                    </ul>
                                    <ul class="meta-item">
                                        <li class="item-btn"><a href="#" class="btn-fill">Details</a></li>
                                        <li class="ctg-name"><a href="#"><i class="flaticon-bed"></i>Hotel</a></li>
                                        <li class="entry-meta">
                                            <ul>
                                                <li class="tooltip-item ctg-icon" data-tips="Hotel"><a href="#"><i
                                                            class="flaticon-bed"></i></a></li>
                                                <li class="tooltip-item" data-tips="My Favourite"><a href="#"><i class="fas fa-heart"></i></a></li>
                                                <li class="tooltip-item" data-tips="Gallery"><a href="#"><i class="far fa-image"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-box border-box">
                                <div class="item-img bg--gradient-50">
                                    <div class="item-status status-open active">Open</div>
                                    <div class="item-status status-save">Save 15%</div>
                                    <img src="img/listing/listing-2-1.jpg" alt="Listing" class="img-fluid grid-view-img">
                                    <img src="img/listing/listing-2-2.jpg" alt="Listing" class="img-fluid list-view-img">
                                    <ul class="item-rating">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>8.4<span> / 10</span></span> </li>
                                    </ul>
                                    <div class="item-logo"><img src="img/listing/logo2.png" alt="Logo"></div>
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title"><a href="#">Westfield Restaurant</a></h3>
                                    <p class="item-paragraph">Mountain Refuge Resort is the most ...
                                    </p>
                                    <ul class="contact-info">
                                        <li><i class="fas fa-map-marker-alt"></i>59 Street, Mk tower, Brooklyn</li>
                                        <li><i class="flaticon-phone-call"></i>+ 132 899 6330</li>
                                        <li><i class="fas fa-globe"></i>www.restauant.com</li>
                                    </ul>
                                    <ul class="meta-item">
                                        <li class="item-btn"><a href="#" class="btn-fill">Details</a></li>
                                        <li class="ctg-name"><a href="#"><i class="flaticon-coffee-cup"></i>Bar
                                                &amp; Cafe</a></li>
                                        <li class="entry-meta">
                                            <ul>
                                                <li class="tooltip-item ctg-icon" data-tips="Bar &amp; Cafe"><a href="#"><i
                                                            class="flaticon-coffee-cup"></i></a></li>
                                                <li class="tooltip-item" data-tips="My Favourite"><a href="#"><i class="fas fa-heart"></i></a></li>
                                                <li class="tooltip-item" data-tips="Gallery"><a href="#"><i class="far fa-image"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-box border-box">
                                <div class="item-img bg--gradient-50">
                                    <div class="item-status status-open active">Open</div>
                                    <div class="item-status status-save active">Save 15%</div>
                                    <img src="img/listing/listing-3-1.jpg" alt="Listing" class="img-fluid grid-view-img">
                                    <img src="img/listing/listing-3-2.jpg" alt="Listing" class="img-fluid list-view-img">
                                    <ul class="item-rating">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>8.4<span> / 10</span></span> </li>
                                    </ul>
                                    <div class="item-logo"><img src="img/listing/logo3.png" alt="Logo"></div>
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title"><a href="#">Westfield Restaurant</a></h3>
                                    <p class="item-paragraph">Mountain Refuge Resort is the most ...
                                    </p>
                                    <ul class="contact-info">
                                        <li><i class="fas fa-map-marker-alt"></i>59 Street, Mk tower, Brooklyn</li>
                                        <li><i class="flaticon-phone-call"></i>+ 132 899 6330</li>
                                        <li><i class="fas fa-globe"></i>www.restauant.com</li>
                                    </ul>
                                    <ul class="meta-item">
                                        <li class="item-btn"><a href="#" class="btn-fill">Details</a></li>
                                        <li class="ctg-name"><a href="#"><i class="flaticon-spa"></i>Spa</a></li>
                                        <li class="entry-meta">
                                            <ul>
                                                <li class="tooltip-item ctg-icon" data-tips="Beauty &amp; Spa"><a href="#"><i
                                                            class="flaticon-spa"></i></a></li>
                                                <li class="tooltip-item" data-tips="My Favourite"><a href="#"><i class="fas fa-heart"></i></a></li>
                                                <li class="tooltip-item" data-tips="Gallery"><a href="#"><i class="far fa-image"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-box border-box">
                                <div class="item-img bg--gradient-50">
                                    <div class="item-status status-open active">Open</div>
                                    <div class="item-status status-save">Save 15%</div>
                                    <img src="img/listing/listing-1-1.jpg" alt="Listing" class="img-fluid grid-view-img">
                                    <img src="img/listing/listing-1-2.jpg" alt="Listing" class="img-fluid list-view-img">
                                    <ul class="item-rating">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>8.4<span> / 10</span></span> </li>
                                    </ul>
                                    <div class="item-logo"><img src="img/listing/logo1.png" alt="Logo"></div>
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title"><a href="#">Westfield Restaurant</a></h3>
                                    <p class="item-paragraph">Mountain Refuge Resort is the most ...
                                    </p>
                                    <ul class="contact-info">
                                        <li><i class="fas fa-map-marker-alt"></i>59 Street, Mk tower, Brooklyn</li>
                                        <li><i class="flaticon-phone-call"></i>+ 132 899 6330</li>
                                        <li><i class="fas fa-globe"></i>www.restauant.com</li>
                                    </ul>
                                    <ul class="meta-item">
                                        <li class="item-btn"><a href="#" class="btn-fill">Details</a></li>
                                        <li class="ctg-name"><a href="#"><i class="flaticon-chef"></i>Restaurant</a></li>
                                        <li class="entry-meta">
                                            <ul>
                                                <li class="tooltip-item ctg-icon" data-tips="Restaurant"><a href="#"><i
                                                            class="flaticon-chef"></i></a></li>
                                                <li class="tooltip-item" data-tips="My Favourite"><a href="#"><i class="fas fa-heart"></i></a></li>
                                                <li class="tooltip-item" data-tips="Gallery"><a href="#"><i class="far fa-image"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="pagination-layout2">
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
            </div>
        </section>
        <!-- Listing Area End Here -->
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
    <!-- Date Time Picker Js -->
    <script src="/js/jquery.datetimepicker.full.min.js"></script>
    <!-- Smoothscroll Js -->
    <script src="/js/smoothscroll.min.js"></script>
    <!-- Custom Js -->
    <script src="/js/main.js"></script>
</body>

</html>