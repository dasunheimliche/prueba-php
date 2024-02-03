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
    <title>Listygo | Blog Details</title>
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
                <h1>Our Latest Blog</h1>
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
      <section
        class="single-blog-wrap padding-top-6 padding-bottom-7 bg--accent"
      >
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="single-blog-box">
                <div class="single-blog-main-thumb">
                  <img src="img/blog/blog-details.jpg" alt="Blog" />
                </div>
                <div class="single-blog-content">
                  <ul class="entry-meta">
                    <li>
                      <a href="#"
                        ><i class="far fa-calendar-alt"></i>22 October, 2018</a
                      >
                    </li>
                    <li>
                      <a href="#"
                        ><i class="fas fa-user"></i>by <span>author</span></a
                      >
                    </li>
                    <li>
                      <a href="#"
                        ><i class="fas fa-comments"></i
                        ><span>02</span> Comments</a
                      >
                    </li>
                  </ul>
                  <h2 class="item-title">
                    A strong statement of artistic intential
                  </h2>
                  <p>
                    Aimply dummy text offer the printing and types etting
                    industry remarea.simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standar dear dummy text ever since thenknown printer took a
                    galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuriesAimply offer
                    the printing and types etting industry remarea.
                  </p>
                  <blockquote>
                    Gimply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever
                    since the 1500s, when an unknown printer took a galley of
                    type and scrambled.<span></span>
                  </blockquote>
                  <p>
                    Aimply dummy text offer the printing and types etting
                    industry remarea.simply dummy text of the printing and
                    typesetting industry. wn printer took a galley of type and
                    scrambled it to make a type specimen book
                  </p>
                  <figure class="single-blog-sub-thumb">
                    <img src="img/blog/blog-details2.jpg" alt="Blog" />
                  </figure>
                  <p>
                    Bimply dummy text offer the printing and types etting
                    industry remarea.simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standar dear dummy text ever since thenknown printer took a
                    galley of type and scrambled it to make a type specimen
                    book.
                  </p>
                  <ul class="tag-share">
                    <li>
                      <ul class="inner-tag">
                        <li>
                          <a href="#">architechture</a>
                        </li>
                        <li>
                          <a href="#">building</a>
                        </li>
                        <li>
                          <a href="#">safety</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <ul class="inner-share">
                        <li>
                          <a href="#">
                            <i class="fab fa-facebook-f"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fab fa-twitter"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fab fa-google-plus-g"></i>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <ul class="post-view">
                  <li>
                    <a href="#"
                      ><i class="flaticon-back"></i>Previous Artcile</a
                    >
                  </li>
                  <li>
                    <a href="#"
                      >Previous Artcile<i class="flaticon-right-arrow"></i
                    ></a>
                  </li>
                </ul>
                <div class="blog-author">
                  <h3 class="inner-item-heading">About Author</h3>
                  <div class="media media-none--xs">
                    <img
                      src="img/blog/author.jpg"
                      alt="Blog Author"
                      class="rounded-circle media-img-auto"
                    />
                    <div class="media-body">
                      <h4 class="author-title">Fahim Rahman</h4>
                      <div class="post-date">21st Oct 2018</div>
                      <p>
                        Sorem Ipsum is simply dummy text of the rinting and
                        typesetting industry aeorem Ipsum has been the industry
                        standard dummy text ever sincer they Nullam id
                        condimentum dear artechtecure puruse.
                      </p>
                      <ul class="author-social">
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
                  </div>
                </div>
                <div class="blog-comment">
                  <h3 class="inner-item-heading">02 Comments</h3>
                  <ul>
                    <li>
                      <div class="media media-none--xs">
                        <img
                          src="img/blog/reply1.jpg"
                          alt="Comment"
                          class="rounded-circle media-img-auto"
                        />
                        <div class="media-body">
                          <h4 class="comment-title">Julian</h4>
                          <span class="post-date">June 29, 2018</span>
                          <p>
                            Sorem Ipsum is simply dummy text of the rinting and
                            typesetting industry aeorem Ipsum has been the
                            industry standard .
                          </p>
                          <a href="#" class="item-btn">Reply</a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media media-none--xs">
                        <img
                          src="img/blog/reply2.jpg"
                          alt="Comment"
                          class="rounded-circle media-img-auto"
                        />
                        <div class="media-body">
                          <h4 class="comment-title">Nadim</h4>
                          <span class="post-date">June 29, 2018</span>
                          <p>
                            Sorem Ipsum is simply dummy text of the rinting and
                            typesetting industry aeorem Ipsum has been the
                            industry standard.
                          </p>
                          <a href="#" class="item-btn">Reply</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="leave-comment-box">
                  <h3 class="inner-item-heading">Leave Us Message</h3>
                  <form class="leave-form-box">
                    <div class="row gutters-15">
                      <div class="col-md-4 form-group">
                        <input
                          type="text"
                          placeholder="Name *"
                          class="form-control"
                          name="Phone"
                          id="leave-name"
                          data-error="Phone field is required"
                          required
                        />
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="col-md-4 form-group">
                        <input
                          type="email"
                          placeholder="E-mail *"
                          class="form-control"
                          name="email"
                          id="leave-email"
                          data-error="E-mail field is required"
                          required
                        />
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="col-md-4 form-group">
                        <input
                          type="text"
                          placeholder="Website"
                          class="form-control"
                          name="subject"
                          id="leave-subject"
                          data-error="Subject field is required"
                          required
                        />
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="col-12 form-group">
                        <textarea
                          placeholder="Write your comment ..."
                          class="textarea form-control"
                          name="message"
                          id="leave-message"
                          rows="7"
                          cols="20"
                          data-error="Message field is required"
                          required
                        ></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="col-12 form-group margin-b-none">
                        <button class="item-btn">Leave Comment</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
              <div class="widget widget-box-padding widget-search">
                <h3 class="widget-title">Search</h3>
                <div class="input-group stylish-input-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="What are you looking For?"
                  />
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
                      <i class="fas fa-angle-right"></i>Destinations</a
                    >
                  </li>
                  <li>
                    <a href="#">
                      <i class="fas fa-angle-right"></i>Food & Drink</a
                    >
                  </li>
                  <li>
                    <a href="#"> <i class="fas fa-angle-right"></i>Lifestyle</a>
                  </li>
                  <li>
                    <a href="#"> <i class="fas fa-angle-right"></i>Stay</a>
                  </li>
                  <li>
                    <a href="#"> <i class="fas fa-angle-right"></i>Travel</a>
                  </li>
                </ul>
              </div>
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
              <div class="widget widget-box-padding widget-new-rated">
                <h3 class="widget-title">Latest Posts</h3>
                <ul class="block-list">
                  <li class="single-item">
                    <div class="item-img">
                      <a href="#"
                        ><img src="img/blog/post1.jpg" alt="Post"
                      /></a>
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
                      <a href="#"
                        ><img src="img/blog/post2.jpg" alt="Post"
                      /></a>
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
                      <a href="#"
                        ><img src="img/blog/post3.jpg" alt="Post"
                      /></a>
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
