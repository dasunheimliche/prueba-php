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
    <title>Listygo | Listing Details 1</title>
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
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/css/owl.theme.default.min.css" />
    <!-- Nouislider Style CSS -->
    <link rel="stylesheet" href="/css/nouislider.min.css" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="/css/magnific-popup.css" />
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
        class="inner-page-banner2 bg-common inner-page-top-margin bg--gradient-bottom-60"
        data-bg-image="img/figure/figure3.jpg"
      ></section>
      <!-- Inne Page Banner Area End Here -->
      <!-- Listing Area Start Here -->
      <section
        class="single-listing-wrap-layout1 padding-top-6 padding-bottom-7 bg--accent"
      >
        <div class="container">
          <div class="single-listing-summary-wrap1">
            <div class="row">
              <div class="col-xl-8 col-lg-6">
                <div class="single-listing-summary1">
                  <div class="row no-gutters">
                    <div class="col-12">
                      <div class="media">
                        <figure>
                          <img src="img/listing/logo5.png" alt="Listing" />
                        </figure>
                        <div class="media-body space-md">
                          <h2 class="item-title">The Great China Town</h2>
                          <p>
                            Mountain Resort is thevitae cursus metus feugiaterty
                            area
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 col-12">
                      <div class="entry-meta-date">
                        <i class="far fa-calendar-alt"></i>October 25, 2018
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                      <div class="entry-meta-location">
                        <i class="fas fa-map-marker-alt"></i>Travel &amp;
                        Destination
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-12 col-md-4 col-sm-12 col-12">
                      <ul class="entry-meta-rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li>
                          <span>8.4<span> / 10</span></span>
                        </li>
                      </ul>
                    </div>
                    <div class="col-xl-2 d-none d-xl-block">
                      <div class="item-status">
                        <div class="status-save">Save 15%</div>
                        <div class="status-open">Open</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6">
                <div class="single-listing-share1">
                  <div class="row gutters-15">
                    <div class="col-4">
                      <a href="#" class="item-btn"
                        ><i class="fas fa-flag"></i>Report</a
                      >
                    </div>
                    <div class="col-4">
                      <a href="#" class="item-btn"
                        ><i class="fas fa-share-alt"></i>Share</a
                      >
                    </div>
                    <div class="col-4">
                      <a href="#" class="item-btn"
                        ><i class="fas fa-heart"></i>Favorite</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="single-listing-box-layout1">
                <div class="listygo-text-box listing-details-info">
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a
                        href="#one"
                        data-toggle="tab"
                        aria-expanded="false"
                        class="active"
                        >Description</a
                      >
                    </li>
                    <li class="nav-item">
                      <a href="#two" data-toggle="tab" aria-expanded="false"
                        >Facilities</a
                      >
                    </li>
                    <li class="nav-item">
                      <a href="#three" data-toggle="tab" aria-expanded="false"
                        >Videos</a
                      >
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div
                      role="tabpanel"
                      class="tab-pane fade active show"
                      id="one"
                    >
                      <h2 class="tab-content-title">
                        Theuo tale fabueum legimus fuisset Prieu quod vietaiy
                        aheuyer artist we are nature.
                      </h2>
                      <p>
                        Nulla rhoncus eleifend lectus, sed maximus mi faucibus
                        id. Mauris vestibulum non purus et lobortis. Etiam
                        condimentum lacus urna, vitae cursus metus feugiat eu.
                        Curabitur sed ligula et tellus lacinia rutrum ultricies
                        at tellus. Pellentesque interdum mi vitae null area
                        tempus, id fermentum nunc facilisis. Donec ultricies
                        ligula nunc, non volutpat nulla convallis et. Nunc eu
                        arcu semper, sollicitudin felis non, tincidunt nulla.
                        Phasellus purus fela nunc, non volutpat nulla convallis
                        et. Nunc eu arcu semper.Phasellus purus fela nunc, non
                        volutpat nulla convallis et. Nunc eu arcu semper.
                      </p>
                      <div class="row gutters-10">
                        <div class="col-md-8">
                          <div class="gallery-box-layout1">
                            <img
                              src="img/listing/listing-18.jpg"
                              alt="listing"
                              class="img-fluid"
                            />
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="gallery-box-layout1">
                            <img
                              src="img/listing/listing-19.jpg"
                              alt="listing"
                              class="img-fluid"
                            />
                          </div>
                          <div class="gallery-box-layout1">
                            <img
                              src="img/listing/listing-20.jpg"
                              alt="listing"
                              class="img-fluid"
                            />
                          </div>
                          <div class="gallery-box-layout1 zoom-gallery">
                            <img
                              src="img/listing/listing-21.jpg"
                              alt="listing"
                              class="img-fluid"
                            />
                            <a
                              href="/img/listing/listing-15.jpg"
                              class="popup-zoom"
                              >15<i class="fa fa-plus" aria-hidden="true"></i
                            ></a>
                            <a
                              href="/img/listing/listing-16.jpg"
                              class="popup-zoom d-none"
                            ></a>
                            <a
                              href="/img/listing/listing-17.jpg"
                              class="popup-zoom d-none"
                            ></a>
                          </div>
                        </div>
                      </div>
                      <p>
                        Nulla rhoncus eleifend lectus, sed maximus mi faucibus
                        id. Mauris vestibulum non purus et lobortis. Etiam
                        condimentum lacus urna, vitae cursus metus feugiat eu.
                        Curabitur sed ligula et tellus lacinia rutrum ultricies
                        at tellus. Pellentesque interdum mi vitae null areea
                        tempus, id fermentum nunc facilisis. Donec ultricies
                        ligula nunc, non volutpat nulla ceoPellentesque interdum
                        mivallis et. Nunc eu arcu sempe, sollicitudin felis non,
                        tincidunt nulla. Phasellus purus felis fringilla
                        vehicula sodales sit amet tortor.
                      </p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="two">
                      <h2 class="tab-content-title">
                        Porem ipsum dolor sit amet, consectetuer adipiscing
                        elit, sed diam nonummy nibh
                      </h2>
                      <ul class="facilities-info">
                        <li>
                          Porem ipsum dolor sit amet, consectetuer adipiscing
                          elit
                        </li>
                        <li>Lorem ipsum dolor sit adipiscing</li>
                        <li>Ut wisi enim ad minim veniam</li>
                        <li>
                          Borem Ipsum is simply dummy text of the printing and
                          type aee setting are industry
                        </li>
                        <li>
                          Porem ipsum dolor sit amet, consectetuer adipiscing
                          elit
                        </li>
                        <li>
                          Borem Ipsum is simply dummy text of the printing and
                          type aee setting are industry eorem Ipsum has is
                          simple.
                        </li>
                      </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="three">
                      <div class="row">
                        <div class="col-md-4 col-sm-6 col-6">
                          <div class="video-info">
                            <img
                              src="img/listing/listing-1-2.jpg"
                              alt="video"
                            />
                            <a
                              class="play-btn popup-youtube"
                              href="http://www.youtube.com/watch?v=1iIZeIy7TqM"
                            >
                              <i class="fas fa-play"></i>
                            </a>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6">
                          <div class="video-info">
                            <img
                              src="img/listing/listing-2-2.jpg"
                              alt="video"
                            />
                            <a
                              class="play-btn popup-youtube"
                              href="http://www.youtube.com/watch?v=1iIZeIy7TqM"
                            >
                              <i class="fas fa-play"></i>
                            </a>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6">
                          <div class="video-info">
                            <img
                              src="img/listing/listing-3-2.jpg"
                              alt="video"
                            />
                            <a
                              class="play-btn popup-youtube"
                              href="http://www.youtube.com/watch?v=1iIZeIy7TqM"
                            >
                              <i class="fas fa-play"></i>
                            </a>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6">
                          <div class="video-info">
                            <img
                              src="img/listing/listing-4-2.jpg"
                              alt="video"
                            />
                            <a
                              class="play-btn popup-youtube"
                              href="http://www.youtube.com/watch?v=1iIZeIy7TqM"
                            >
                              <i class="fas fa-play"></i>
                            </a>
                          </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-6">
                          <div class="video-info">
                            <img
                              src="img/listing/listing-5-2.jpg"
                              alt="video"
                            />
                            <a
                              class="play-btn popup-youtube"
                              href="http://www.youtube.com/watch?v=1iIZeIy7TqM"
                            >
                              <i class="fas fa-play"></i>
                            </a>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6">
                          <div class="video-info">
                            <img
                              src="img/listing/listing-6-2.jpg"
                              alt="video"
                            />
                            <a
                              class="play-btn popup-youtube"
                              href="http://www.youtube.com/watch?v=1iIZeIy7TqM"
                            >
                              <i class="fas fa-play"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="listygo-text-box listing-details-review">
                  <h3 class="inner-item-heading">Reviews</h3>
                  <div class="total-review"><span>(05)</span> Ratings</div>
                  <ul class="review-items">
                    <li class="post-no-one">
                      <div class="media">
                        <figure>
                          <img src="img/blog/review1.jpg" alt="Review" />
                        </figure>
                        <div class="media-body">
                          <span class="review-title"
                            >Awesome Tour Experence!!!</span
                          >
                          <h4 class="reviewer-name">
                            Mariay Zaman<span class="review-date"
                              >October 26, 2018</span
                            >
                          </h4>
                          <p>
                            Borem Ipsum is simply dummy text of the printing and
                            type aee setting are industry eorem Ipsum has is
                            simple.
                          </p>
                          <ul class="entry-meta">
                            <li>
                              <a href="#"
                                ><i class="fas fa-thumbs-up"></i
                                ><span>25</span> Liked</a
                              >
                            </li>
                            <li>
                              <a href="#"
                                ><i class="fas fa-reply"></i
                                ><span>19</span> Shared</a
                              >
                            </li>
                          </ul>
                          <ul class="item-rating">
                            <li class="star-one">
                              <i class="fas fa-star"></i>
                            </li>
                            <li class="star-two">
                              <i class="fas fa-star"></i>
                            </li>
                            <li class="star-three">
                              <i class="fas fa-star"></i>
                            </li>
                            <li class="star-four">
                              <i class="fas fa-star"></i>
                            </li>
                            <li class="star-five">
                              <i class="fas fa-star"></i>
                            </li>
                            <li><span>( Excellent! )</span></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="post-no-two">
                      <div class="media">
                        <figure>
                          <img src="img/blog/review2.jpg" alt="Review" />
                        </figure>
                        <div class="media-body">
                          <span class="review-title"
                            >Awesome Tour Experence!!!</span
                          >
                          <h4 class="reviewer-name">
                            Fahim Rahman<span class="review-date"
                              >October 26, 2018</span
                            >
                          </h4>
                          <p>
                            Borem Ipsum is simply dummy text of the printing and
                            type aee setting are industry eorem Ipsum has is
                            simple.
                          </p>
                          <ul class="entry-meta">
                            <li>
                              <a href="#"
                                ><i class="fas fa-thumbs-up"></i
                                ><span>25</span> Liked</a
                              >
                            </li>
                            <li>
                              <a href="#"
                                ><i class="fas fa-reply"></i
                                ><span>19</span> Shared</a
                              >
                            </li>
                          </ul>
                          <ul class="item-rating">
                            <li class="star-one">
                              <i class="fas fa-star"></i>
                            </li>
                            <li class="star-two">
                              <i class="fas fa-star"></i>
                            </li>
                            <li class="star-three">
                              <i class="fas fa-star"></i>
                            </li>
                            <li class="star-four">
                              <i class="fas fa-star"></i>
                            </li>
                            <li class="star-five">
                              <i class="fas fa-star"></i>
                            </li>
                            <li><span>( Good )</span></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="post-no-three">
                      <div class="media">
                        <figure>
                          <img src="img/blog/review1.jpg" alt="Review" />
                        </figure>
                        <div class="media-body">
                          <span class="review-title"
                            >Awesome Tour Experence!!!</span
                          >
                          <h4 class="reviewer-name">
                            Mariay Zaman<span class="review-date"
                              >October 26, 2018</span
                            >
                          </h4>
                          <p>
                            Borem Ipsum is simply dummy text of the printing and
                            type aee setting are industry eorem Ipsum has is
                            simple.
                          </p>
                          <ul class="entry-meta">
                            <li>
                              <a href="#"
                                ><i class="fas fa-thumbs-up"></i
                                ><span>25</span> Liked</a
                              >
                            </li>
                            <li>
                              <a href="#"
                                ><i class="fas fa-reply"></i
                                ><span>19</span> Shared</a
                              >
                            </li>
                          </ul>
                          <ul class="item-rating">
                            <li class="star-one">
                              <i class="fas fa-star"></i>
                            </li>
                            <li class="star-two">
                              <i class="fas fa-star"></i>
                            </li>
                            <li class="star-three">
                              <i class="fas fa-star"></i>
                            </li>
                            <li class="star-four">
                              <i class="fas fa-star"></i>
                            </li>
                            <li class="star-five">
                              <i class="fas fa-star"></i>
                            </li>
                            <li><span>( Excellent! )</span></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="post-no-four">
                      <div class="media">
                        <figure>
                          <img src="img/blog/review2.jpg" alt="Review" />
                        </figure>
                        <div class="media-body">
                          <span class="review-title"
                            >Awesome Tour Experence!!!</span
                          >
                          <h4 class="reviewer-name">
                            Fahim Rahman<span class="review-date"
                              >October 26, 2018</span
                            >
                          </h4>
                          <p>
                            Borem Ipsum is simply dummy text of the printing and
                            type aee setting are industry eorem Ipsum has is
                            simple.
                          </p>
                          <ul class="entry-meta">
                            <li>
                              <a href="#"
                                ><i class="fas fa-thumbs-up"></i
                                ><span>25</span> Liked</a
                              >
                            </li>
                            <li>
                              <a href="#"
                                ><i class="fas fa-reply"></i
                                ><span>19</span> Shared</a
                              >
                            </li>
                          </ul>
                          <ul class="item-rating">
                            <li class="star-one">
                              <i class="fas fa-star"></i>
                            </li>
                            <li class="star-two">
                              <i class="fas fa-star"></i>
                            </li>
                            <li class="star-three">
                              <i class="fas fa-star"></i>
                            </li>
                            <li class="star-four">
                              <i class="fas fa-star"></i>
                            </li>
                            <li class="star-five">
                              <i class="fas fa-star"></i>
                            </li>
                            <li><span>( Good )</span></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="listygo-text-box listing-details-leave-review">
                  <h3 class="inner-item-heading">Leave your review</h3>
                  <div class="rate-wrapper">
                    <div class="rate-label">
                      Your overall rating of this listing
                    </div>
                    <div class="rate">
                      <div class="rate-item">
                        <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <div class="rate-item">
                        <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <div class="rate-item">
                        <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <div class="rate-item">
                        <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <div class="rate-item">
                        <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <form class="contact-form-box" id="contact-form2">
                    <div class="row">
                      <div class="col-12 form-group">
                        <label>Title of your review</label>
                        <input
                          type="text"
                          placeholder=""
                          class="form-control"
                          name="title"
                          data-error="Title field is required"
                          required
                        />
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="col-12 form-group">
                        <label>Write Your review</label>
                        <textarea
                          placeholder=""
                          class="textarea form-control"
                          name="message"
                          rows="7"
                          cols="20"
                          data-error="Message field is required"
                          required
                        ></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="col-sm-6 form-group">
                        <label>Name*</label>
                        <input
                          type="text"
                          placeholder=""
                          class="form-control"
                          name="name"
                          data-error="Name field is required"
                          required
                        />
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="col-sm-6 form-group">
                        <label>E-mail*</label>
                        <input
                          type="email"
                          placeholder=""
                          class="form-control"
                          name="email"
                          data-error="E-mail field is required"
                          required
                        />
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="col-12 form-group mb-0">
                        <button type="submit" class="item-btn">
                          Submit Your Review
                        </button>
                      </div>
                    </div>
                    <div class="form-response"></div>
                  </form>
                </div>
                <div class="related-listing">
                  <h2 class="related-title">May You Also Like</h2>
                  <div id="owl-nav1" class="nav-control-layout3">
                    <span class="rt-prev">
                      <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="rt-next">
                      <i class="fas fa-chevron-right"></i>
                    </span>
                  </div>
                </div>
                <div
                  class="rc-carousel listing-box-grid"
                  data-custom-nav="#owl-nav1"
                  data-loop="true"
                  data-items="4"
                  data-margin="30"
                  data-autoplay="false"
                  data-autoplay-timeout="5000"
                  data-smart-speed="2000"
                  data-dots="false"
                  data-nav="false"
                  data-nav-speed="false"
                  data-r-x-small="1"
                  data-r-x-small-nav="false"
                  data-r-x-small-dots="false"
                  data-r-x-medium="1"
                  data-r-x-medium-nav="false"
                  data-r-x-medium-dots="false"
                  data-r-small="2"
                  data-r-small-nav="false"
                  data-r-small-dots="false"
                  data-r-medium="2"
                  data-r-medium-nav="false"
                  data-r-medium-dots="false"
                  data-r-large="2"
                  data-r-large-nav="false"
                  data-r-large-dots="false"
                  data-r-extra-large="2"
                  data-r-extra-large-nav="false"
                  data-r-extra-large-dots="false"
                >
                  <div class="product-box">
                    <div class="item-img bg--gradient-50">
                      <div class="item-status status-open active">Open</div>
                      <div class="item-status status-save">Save 15%</div>
                      <img
                        src="img/listing/listing-1-1.jpg"
                        alt="Listing"
                        class="img-fluid grid-view-img"
                      />
                      <img
                        src="img/listing/listing-1-2.jpg"
                        alt="Listing"
                        class="img-fluid list-view-img"
                      />
                      <ul class="item-rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li>
                          <span>8.4<span> / 10</span></span>
                        </li>
                      </ul>
                      <div class="item-logo">
                        <img src="img/listing/logo1.png" alt="Logo" />
                      </div>
                    </div>
                    <div class="item-content">
                      <h3 class="item-title">
                        <a href="#">Westfield Restaurant</a>
                      </h3>
                      <p class="item-paragraph">
                        Mountain Refuge Resort is the most ...
                      </p>
                      <ul class="contact-info">
                        <li>
                          <i class="fas fa-map-marker-alt"></i>59 Street, Mk
                          tower, Brooklyn
                        </li>
                        <li>
                          <i class="flaticon-phone-call"></i>+ 132 899 6330
                        </li>
                        <li><i class="fas fa-globe"></i>www.restauant.com</li>
                      </ul>
                      <ul class="meta-item">
                        <li class="item-btn">
                          <a href="#" class="btn-fill">Details</a>
                        </li>
                        <li class="ctg-name">
                          <a href="#"
                            ><i class="flaticon-chef"></i>Restaurant</a
                          >
                        </li>
                        <li class="entry-meta">
                          <ul>
                            <li
                              class="tooltip-item ctg-icon"
                              data-tips="Restaurant"
                            >
                              <a href="#"><i class="flaticon-chef"></i></a>
                            </li>
                            <li class="tooltip-item" data-tips="My Favourite">
                              <a href="#"><i class="fas fa-heart"></i></a>
                            </li>
                            <li class="tooltip-item" data-tips="Gallery">
                              <a href="#"><i class="far fa-image"></i></a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="product-box">
                    <div class="item-img bg--gradient-50">
                      <div class="item-status status-open active">Open</div>
                      <div class="item-status status-save">Save 15%</div>
                      <img
                        src="img/listing/listing-2-1.jpg"
                        alt="Listing"
                        class="img-fluid grid-view-img"
                      />
                      <img
                        src="img/listing/listing-2-2.jpg"
                        alt="Listing"
                        class="img-fluid list-view-img"
                      />
                      <ul class="item-rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li>
                          <span>8.4<span> / 10</span></span>
                        </li>
                      </ul>
                      <div class="item-logo">
                        <img src="img/listing/logo2.png" alt="Logo" />
                      </div>
                    </div>
                    <div class="item-content">
                      <h3 class="item-title">
                        <a href="#">Westfield Restaurant</a>
                      </h3>
                      <p class="item-paragraph">
                        Mountain Refuge Resort is the most ...
                      </p>
                      <ul class="contact-info">
                        <li>
                          <i class="fas fa-map-marker-alt"></i>59 Street, Mk
                          tower, Brooklyn
                        </li>
                        <li>
                          <i class="flaticon-phone-call"></i>+ 132 899 6330
                        </li>
                        <li><i class="fas fa-globe"></i>www.restauant.com</li>
                      </ul>
                      <ul class="meta-item">
                        <li class="item-btn">
                          <a href="#" class="btn-fill">Details</a>
                        </li>
                        <li class="ctg-name">
                          <a href="#"
                            ><i class="flaticon-coffee-cup"></i>Bar &amp;
                            Cafe</a
                          >
                        </li>
                        <li class="entry-meta">
                          <ul>
                            <li
                              class="tooltip-item ctg-icon"
                              data-tips="Bar &amp; Cafe"
                            >
                              <a href="#"
                                ><i class="flaticon-coffee-cup"></i
                              ></a>
                            </li>
                            <li class="tooltip-item" data-tips="My Favourite">
                              <a href="#"><i class="fas fa-heart"></i></a>
                            </li>
                            <li class="tooltip-item" data-tips="Gallery">
                              <a href="#"><i class="far fa-image"></i></a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="product-box">
                    <div class="item-img bg--gradient-50">
                      <div class="item-status status-open active">Open</div>
                      <div class="item-status status-save active">Save 15%</div>
                      <img
                        src="img/listing/listing-3-1.jpg"
                        alt="Listing"
                        class="img-fluid grid-view-img"
                      />
                      <img
                        src="img/listing/listing-3-2.jpg"
                        alt="Listing"
                        class="img-fluid list-view-img"
                      />
                      <ul class="item-rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li>
                          <span>8.4<span> / 10</span></span>
                        </li>
                      </ul>
                      <div class="item-logo">
                        <img src="img/listing/logo3.png" alt="Logo" />
                      </div>
                    </div>
                    <div class="item-content">
                      <h3 class="item-title">
                        <a href="#">Westfield Restaurant</a>
                      </h3>
                      <p class="item-paragraph">
                        Mountain Refuge Resort is the most ...
                      </p>
                      <ul class="contact-info">
                        <li>
                          <i class="fas fa-map-marker-alt"></i>59 Street, Mk
                          tower, Brooklyn
                        </li>
                        <li>
                          <i class="flaticon-phone-call"></i>+ 132 899 6330
                        </li>
                        <li><i class="fas fa-globe"></i>www.restauant.com</li>
                      </ul>
                      <ul class="meta-item">
                        <li class="item-btn">
                          <a href="#" class="btn-fill">Details</a>
                        </li>
                        <li class="ctg-name">
                          <a href="#"
                            ><i class="flaticon-spa"></i>Beauty &amp; Spa</a
                          >
                        </li>
                        <li class="entry-meta">
                          <ul>
                            <li
                              class="tooltip-item ctg-icon"
                              data-tips="Beauty &amp; Spa"
                            >
                              <a href="#"><i class="flaticon-spa"></i></a>
                            </li>
                            <li class="tooltip-item" data-tips="My Favourite">
                              <a href="#"><i class="fas fa-heart"></i></a>
                            </li>
                            <li class="tooltip-item" data-tips="Gallery">
                              <a href="#"><i class="far fa-image"></i></a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="product-box">
                    <div class="item-img bg--gradient-50">
                      <div class="item-status status-open active">Open</div>
                      <div class="item-status status-save">Save 15%</div>
                      <img
                        src="img/listing/listing-4-1.jpg"
                        alt="Listing"
                        class="img-fluid grid-view-img"
                      />
                      <img
                        src="img/listing/listing-4-2.jpg"
                        alt="Listing"
                        class="img-fluid list-view-img"
                      />
                      <ul class="item-rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li>
                          <span>8.4<span> / 10</span></span>
                        </li>
                      </ul>
                      <div class="item-logo">
                        <img src="img/listing/logo4.png" alt="Logo" />
                      </div>
                    </div>
                    <div class="item-content">
                      <h3 class="item-title">
                        <a href="#">Westfield Restaurant</a>
                      </h3>
                      <p class="item-paragraph">
                        Mountain Refuge Resort is the most ...
                      </p>
                      <ul class="contact-info">
                        <li>
                          <i class="fas fa-map-marker-alt"></i>59 Street, Mk
                          tower, Brooklyn
                        </li>
                        <li>
                          <i class="flaticon-phone-call"></i>+ 132 899 6330
                        </li>
                        <li><i class="fas fa-globe"></i>www.restauant.com</li>
                      </ul>
                      <ul class="meta-item">
                        <li class="item-btn">
                          <a href="#" class="btn-fill">Details</a>
                        </li>
                        <li class="ctg-name">
                          <a href="#"
                            ><i class="flaticon-supermarket"></i>Shopping</a
                          >
                        </li>
                        <li class="entry-meta">
                          <ul>
                            <li
                              class="tooltip-item ctg-icon"
                              data-tips="Shopping"
                            >
                              <a href="#"
                                ><i class="flaticon-supermarket"></i
                              ></a>
                            </li>
                            <li class="tooltip-item" data-tips="My Favourite">
                              <a href="#"><i class="fas fa-heart"></i></a>
                            </li>
                            <li class="tooltip-item" data-tips="Gallery">
                              <a href="#"><i class="far fa-image"></i></a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="product-box">
                    <div class="item-img bg--gradient-50">
                      <div class="item-status status-open active">Open</div>
                      <div class="item-status status-save active">Save 15%</div>
                      <img
                        src="img/listing/listing-5-1.jpg"
                        alt="Listing"
                        class="img-fluid grid-view-img"
                      />
                      <img
                        src="img/listing/listing-5-2.jpg"
                        alt="Listing"
                        class="img-fluid list-view-img"
                      />
                      <ul class="item-rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li>
                          <span>8.4<span> / 10</span></span>
                        </li>
                      </ul>
                      <div class="item-logo">
                        <img src="img/listing/logo5.png" alt="Logo" />
                      </div>
                    </div>
                    <div class="item-content">
                      <h3 class="item-title">
                        <a href="#">Westfield Restaurant</a>
                      </h3>
                      <p class="item-paragraph">
                        Mountain Refuge Resort is the most ...
                      </p>
                      <ul class="contact-info">
                        <li>
                          <i class="fas fa-map-marker-alt"></i>59 Street, Mk
                          tower, Brooklyn
                        </li>
                        <li>
                          <i class="flaticon-phone-call"></i>+ 132 899 6330
                        </li>
                        <li><i class="fas fa-globe"></i>www.restauant.com</li>
                      </ul>
                      <ul class="meta-item">
                        <li class="item-btn">
                          <a href="#" class="btn-fill">Details</a>
                        </li>
                        <li class="ctg-name">
                          <a href="#"
                            ><i class="flaticon-musical-note"></i>Nightlife</a
                          >
                        </li>
                        <li class="entry-meta">
                          <ul>
                            <li
                              class="tooltip-item ctg-icon"
                              data-tips="Nightlife"
                            >
                              <a href="#"
                                ><i class="flaticon-musical-note"></i
                              ></a>
                            </li>
                            <li class="tooltip-item" data-tips="My Favourite">
                              <a href="#"><i class="fas fa-heart"></i></a>
                            </li>
                            <li class="tooltip-item" data-tips="Gallery">
                              <a href="#"><i class="far fa-image"></i></a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="product-box">
                    <div class="item-img bg--gradient-50">
                      <div class="item-status status-open active">Open</div>
                      <div class="item-status status-save">Save 15%</div>
                      <img
                        src="img/listing/listing-6-1.jpg"
                        alt="Listing"
                        class="img-fluid grid-view-img"
                      />
                      <img
                        src="img/listing/listing-6-2.jpg"
                        alt="Listing"
                        class="img-fluid list-view-img"
                      />
                      <ul class="item-rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li>
                          <span>8.4<span> / 10</span></span>
                        </li>
                      </ul>
                      <div class="item-logo">
                        <img src="img/listing/logo6.png" alt="Logo" />
                      </div>
                    </div>
                    <div class="item-content">
                      <h3 class="item-title">
                        <a href="#">Westfield Restaurant</a>
                      </h3>
                      <p class="item-paragraph">
                        Mountain Refuge Resort is the most ...
                      </p>
                      <ul class="contact-info">
                        <li>
                          <i class="fas fa-map-marker-alt"></i>59 Street, Mk
                          tower, Brooklyn
                        </li>
                        <li>
                          <i class="flaticon-phone-call"></i>+ 132 899 6330
                        </li>
                        <li><i class="fas fa-globe"></i>www.restauant.com</li>
                      </ul>
                      <ul class="meta-item">
                        <li class="item-btn">
                          <a href="#" class="btn-fill">Details</a>
                        </li>
                        <li class="ctg-name">
                          <a href="#"><i class="flaticon-bed"></i>Hotel</a>
                        </li>
                        <li class="entry-meta">
                          <ul>
                            <li class="tooltip-item ctg-icon" data-tips="Hotel">
                              <a href="#"><i class="flaticon-bed"></i></a>
                            </li>
                            <li class="tooltip-item" data-tips="My Favourite">
                              <a href="#"><i class="fas fa-heart"></i></a>
                            </li>
                            <li class="tooltip-item" data-tips="Gallery">
                              <a href="#"><i class="far fa-image"></i></a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
              <div class="widget widget-follow-us2 widget-box-padding">
                <figure class="item-thumb">
                  <img src="img/blog/follow.jpg" alt="Figure" />
                </figure>
                <h4 class="item-title">Julia Zosef</h4>
                <div class="item-info">
                  <ul class="block-list">
                    <li><i class="flaticon-user"></i>Admin</li>
                    <li><i class="flaticon-phone-call"></i>+ 132 899 6330</li>
                  </ul>
                </div>
                <div class="social-info">
                  <ul class="block-list">
                    <li>
                      <div class="count-number counter" data-num="1290">
                        1,290
                      </div>
                      <div class="count-title">Followers</div>
                    </li>
                    <li>
                      <div class="count-number counter" data-num="20">20</div>
                      <div class="count-title">Following</div>
                    </li>
                  </ul>
                </div>
                <a href="#" class="item-btn"
                  ><i class="fas fa-rss"></i>Follow Me</a
                >
              </div>
              <div class="widget widget-information widget-box-padding">
                <h3 class="widget-title">Information</h3>
                <ul class="block-list">
                  <li class="block-list-item">
                    <i class="fas fa-map-marker-alt"></i>59 Street, Mk tower,
                    Brooklyn
                  </li>
                  <li class="block-list-item">
                    <i class="fas fa-phone"></i>+ 132 899 6330
                  </li>
                  <li class="block-list-item">
                    <i class="far fa-clock"></i><span>Sat - Mon:</span> 09.00am
                    - 10.00pm
                  </li>
                  <li class="block-list-item">
                    <i class="fas fa-globe"></i>www.restauant.com
                  </li>
                  <li class="block-list-item">
                    <i class="fas fa-share-alt"></i>
                    <ul class="inline-list">
                      <li class="inline-list-item">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li class="inline-list-item">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li class="inline-list-item">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                      <li class="inline-list-item">
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                      </li>
                      <li class="inline-list-item">
                        <a href="#"><i class="fab fa-skype"></i></a>
                      </li>
                      <li class="inline-list-item">
                        <a href="#"><i class="fas fa-rss"></i></a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="widget widget-price-range widget-box-padding">
                <h3 class="widget-title">Price Range</h3>
                <div id="price-range-wrapper" class="price-range-wrapper">
                  <div id="price-range-filter"></div>
                  <div class="price-filter-wrap">
                    <div class="price-range-select">
                      <div class="price-range">Price:</div>
                      <div class="price-range" id="price-range-min"></div>
                      <div class="price-range">-</div>
                      <div class="price-range" id="price-range-max"></div>
                    </div>
                    <div class="filter-button">
                      <button
                        class="item-btn btn-ghost size-xs radius-4 text-capitalize"
                        type="submit"
                        value="Login"
                      >
                        Filter
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="widget widget-contact-form widget-box-padding">
                <h3 class="widget-title">Contact Me</h3>
                <form class="contact-form-box" id="contact-form">
                  <div class="row">
                    <div class="col-12 form-group">
                      <label>Your Name*</label>
                      <input
                        type="text"
                        placeholder=""
                        class="form-control"
                        name="name"
                        data-error="Name field is required"
                        required
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-12 form-group">
                      <label>E-mail*</label>
                      <input
                        type="email"
                        placeholder=""
                        class="form-control"
                        name="email"
                        data-error="E-mail field is required"
                        required
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-12 form-group">
                      <label>Subject</label>
                      <input
                        type="text"
                        placeholder=""
                        class="form-control"
                        name="subject"
                        data-error="Subject field is required"
                        required
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-12 form-group">
                      <label>Your Message</label>
                      <textarea
                        placeholder=""
                        class="textarea form-control"
                        name="message"
                        rows="7"
                        cols="20"
                        data-error="Message field is required"
                        required
                      ></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-12 form-group mb-0">
                      <button type="submit" class="item-btn">
                        Submit Message
                      </button>
                    </div>
                  </div>
                  <div class="form-response"></div>
                </form>
              </div>
              <div class="widget widget-get-direction widget-box-padding">
                <div class="google-map-wrap-layout3">
                  <iframe
                    src="https://maps.google.com/maps?q=-37.81618%2C%20144.95692&t=&z=13&ie=UTF8&iwloc=&output=embed"
                  ></iframe>
                </div>
                <div class="item-text">China Hill Town</div>
                <div class="item-text">
                  <a href="#"
                    ><i class="fab fa-telegram-plane"></i>Get Direction</a
                  >
                </div>
              </div>
              <div class="widget widget-claim-box widget-box-padding">
                <h4 class="item-title">Is this your business?</h4>
                <p>
                  Claim listing is the best way to manage and protect your
                  business.
                </p>
                <a href="#" class="item-btn">Claim Now!</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Listing Area End Here -->
      <!-- Brand Area Start Here -->
      <section
        class="brand-wrap-layout1 bg--light padding-top-9p6 padding-bottom-7"
      >
        <div class="container">
          <div
            class="rc-carousel"
            data-loop="true"
            data-items="6"
            data-margin="30"
            data-autoplay="true"
            data-autoplay-timeout="5000"
            data-smart-speed="2000"
            data-dots="false"
            data-nav="false"
            data-nav-speed="false"
            data-r-x-small="2"
            data-r-x-small-nav="false"
            data-r-x-small-dots="false"
            data-r-x-medium="2"
            data-r-x-medium-nav="false"
            data-r-x-medium-dots="false"
            data-r-small="3"
            data-r-small-nav="false"
            data-r-small-dots="false"
            data-r-medium="4"
            data-r-medium-nav="false"
            data-r-medium-dots="false"
            data-r-large="5"
            data-r-large-nav="false"
            data-r-large-dots="false"
            data-r-extra-large="5"
            data-r-extra-large-nav="false"
            data-r-extra-large-dots="false"
          >
            <div class="brand-box-layout1">
              <img src="img/brand/brand1.png" alt="Brand" class="img-fluid" />
            </div>
            <div class="brand-box-layout1">
              <img src="img/brand/brand2.png" alt="Brand" class="img-fluid" />
            </div>
            <div class="brand-box-layout1">
              <img src="img/brand/brand3.png" alt="Brand" class="img-fluid" />
            </div>
            <div class="brand-box-layout1">
              <img src="img/brand/brand4.png" alt="Brand" class="img-fluid" />
            </div>
            <div class="brand-box-layout1">
              <img src="img/brand/brand5.png" alt="Brand" class="img-fluid" />
            </div>
            <div class="brand-box-layout1">
              <img src="img/brand/brand1.png" alt="Brand" class="img-fluid" />
            </div>
          </div>
        </div>
      </section>
      <!-- Brand Area End Here -->
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
    <!-- Owl Carousel Js -->
    <script src="/js/owl.carousel.min.js"></script>
    <!-- Counterup Js -->
    <script src="/js/jquery.counterup.min.js"></script>
    <!-- Waypoints Js -->
    <script src="/js/waypoints.min.js"></script>
    <!-- Nouislider Js -->
    <script src="/js/nouislider.min.js"></script>
    <!-- wNumb Js -->
    <script src="/js/wNumb.js"></script>
    <!-- Magnific Popup Js -->
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <!-- Smoothscroll Js -->
    <script src="/js/smoothscroll.min.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtmXSwv4YmAKtcZyyad9W7D4AC08z0Rb4"></script>
    <!-- Validator js -->
    <script src="/js/validator.min.js"></script>
    <!-- Custom Js -->
    <script src="/js/main.js"></script>
  </body>
</html>
