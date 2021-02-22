<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="wedding vendor directory HTML template">
    <title> Wedding Vendor &amp; Supplier Directory HTML Template - RealWed </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('fontello/css/fontello.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.css') }}" type="text/css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: serif;
        }

        .link:hover {
            color: #484848;
        }

        .navbar-classic .navbar-nav .nav-item .nav-link:hover {
            color: #00a591;
            font-weight: 500;
        }

        .btn-primary {
            background: #00a591;
        }

        #return-to-top {
            background: #00a591;
        }

        #return-to-top:hover {
            background: #00a591;
        }

        #view-map {
            color: #00a591;
        }

        .btn-default-wishlist {
            background: #484848;
            color: #ffffff;
            border: #484848;
        }

        .btn-default-wishlist:hover {
            background: #00a591;
            border: #00a591;
        }

        .social-media-block {
            background-color: #374252;
            color: #959ba7;
            border-bottom: 1px solid #959ba7;
        }

        .icon-square:hover {
            background: #00a591;
        }

        .footer {
            background-color: #374252;
            color: #959ba7;
        }

        .tiny-footer {
            background-color: #374252;
            border-top: 1px solid #959ba7;
        }

        .footer-widget .widget-title {
            font-weight: 400;
        }

        .tiny-footer {
            color: #aaaaaa;
        }

        .mb0 {
            color: #00a591;
        }

        .mb20 {
            color: #00a591;
        }

        .card-header {
            color: #00a591;
        }

        .review-total {
            color: #00a591;
        }

        .icon-square-outline {
            border-color: #00a591;
            color: #00a591;
        }

        .icon-square-outline:hover {
            border-color: #00a591;
            color: #00a591;
        }

        .widget-title {
            color: #00a591;
        }

        h2 {
            color: #00a591;
        }

        .navbar-classic .navbar-toggler {
            border: none;
        }

        .fa-map-marker-alt {
            color: #00a591;
            font-size: 1.5rem;
        }

        .table-heading {
            color: #00a591;
        }

        .icon-bar {
            background-color: #00a591;
        }

        .navbar-toggler.collapsed .top-bar {
            background-color: #00a591;
        }

        .navbar-toggler.collapsed .bottom-bar {
            background-color: #00a591;
        }

        .navbar-toggler .top-bar {
            background-color: #00a591;
        }

        .navbar-toggler .bottom-bar {
            background-color: #00a591;
        }

        .btn-wishlist {
            color: #00a591;
        }

        .btn-wishlist:hover {
            background-color: #00a591;
            border: #00a591;
        }

        .logo>svg {
            width: 150px;
            height: 100px;
        }

        .alert-info {
            background: #00a591;
            color: #ffffff;
        }

        .alert-info>.close {
            color: #ffffff;
        }

        .alert-danger {
            background: #ff4d4d;
            color: #ffffff;
        }

        .alert-danger>.close {
            color: #ffffff;
        }

        .user-img>img {
            width: 70px;
            height: 70px;
        }

        .view-all {
            font-size: 1rem;
        }

        .view-all:hover {
            color: #00a591;
        }

        .float {
            position: absolute;
            z-index: 2;
            right: 0;
            bottom: 0;
            opacity: 1;
            display: block;

            animation: fadeIn 1s;
            animation-delay: 3s;
            animation-fill-mode: forwards;
        }

        .blue-text {
            color: #00a591;
        }

        .title:hover {
            color: #00a591;
            font-weight: 400;
        }

        .mfp-arrow-right:after,
        .mfp-arrow-right .mfp-a {
            border-left: 17px solid #00a591;
        }

        .mfp-arrow-left:after,
        .mfp-arrow-left .mfp-a {
            border-right: 17px solid #00a591;
        }

        @keyframes fadeIn {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="header">
            <!-- navigation start -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <nav class="navbar navbar-expand-lg navbar-classic">
                            <a class="navbar-brand" href="index-2.html">
                                <img src="{{ asset('images/adifier-logo.png') }}" alt="">
                            </a>
                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-classic" aria-controls="navbar-classic" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar top-bar mt-0"></span>
                                <span class="icon-bar middle-bar"></span>
                                <span class="icon-bar bottom-bar"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar-classic">
                                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-3">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown" href="index-2.html" id="menu-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Home
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown" href="#" id="menu-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Contact Us
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown" href="#" id="menu-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            About Us
                                        </a>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-primary">Get Started Now</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- navigation close -->
        </div>
        <main>
            <!-- hero-section -->
            <div class="hero-section">
                <div class="container">
                    <div class="row">
                        <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12">
                            <!-- search-block -->
                            <div class="">
                                <div class="text-center search-head">
                                    <h1 class="search-head-title">Find Local Wedding Vendors</h1>
                                    <p class="d-none d-xl-block d-lg-block d-sm-block text-white">Browse the best wedding vendors in your area — from venues and photographers, to wedding planners, caterers, florists and more.</p>
                                </div>
                                <!-- /.search-block -->
                                <!-- search-form -->
                                <div class="search-form">
                                    <form class="form-row">
                                        <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-12">
                                            <!-- select -->
                                            <select class="wide">
                                                <option value="Venue Type">Vendor Type</option>
                                                <option value="Venue">Venue</option>
                                                <option value="Florist">Florist</option>
                                                <option value="Cake">Cake</option>
                                                <option value="Photographer">Photographer</option>
                                                <option value="Catering">Catering</option>
                                                <option value="Dress">Dress</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-12">
                                            <!-- select -->
                                            <select class="wide">
                                                <option value="Karachi" data-display="Karachi">Karachi</option>
                                                <option value="Lahore">Lahore</option>
                                                <option value="Islamabad">Islamabad</option>
                                                <option value="Rawalpindi">Rawalpindi</option>
                                                <option value="Hyderabad">Hyderabad</option>
                                            </select>
                                        </div>
                                        <!-- button -->
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12 col-12">
                                            <button class="btn btn-default btn-block" type="submit">Search</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.search-form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.hero-section -->
            <!-- feature-section -->
            <div class="bg-white space-large">
                <div class="container">
                    <div class="row">
                        <!-- feature-1 -->
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb20">
                            <div class="icon-3x mb30 text-default"><i class="icon-051-wedding-arch"></i></div>
                            <h3>180+Wedding Venues & Vendors</h3>
                            <p>Fusce sed erat libasellus id orci quis ligula pretium modo lect sodales eu.</p>
                        </div>
                        <!-- /.feature-1 -->
                        <!-- feature-2 -->
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb20">
                            <div class="icon-3x mb30 text-default"><i class="icon-051-love-birds"></i></div>
                            <h3>350+ Real Wedding Success</h3>
                            <p>Quisque ut ligula nec est pretium pharetra atmetus mattis volutpat invel elit.</p>
                        </div>
                        <!-- /.feature-2 -->
                        <!-- feature-3 -->
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb20">
                            <div class="icon-3x mb30 text-default"><i class="icon-017-location"></i></div>
                            <h3>31+Cities Available</h3>
                            <p>Vestibulum elementum pellaliquet dui in massa arius et ornare augue feugiat.</p>
                        </div>
                        <!-- /.feature-3 -->
                    </div>
                </div>
            </div>
            <!-- /.feature-section -->
            <div class="space-medium pdb0">
                <div class="container">
                    <div class="row">
                        <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                            <div class="section-title text-center">
                                <!-- section title start-->
                                <h2 class="mb10r">Hot Fetaured Services</h2>
                                <p>A short description for showcase of latest services.</p>
                            </div>
                            <!-- /.section title start-->
                        </div>
                    </div>
                    <div class="venue-thumbnail-carousel">
                        <div class="owl-carousel owl-theme owl-venue-thumb-second">
                            <div class="item">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="vendor-thumbnail">
                                        <!-- Vendor thumbnail -->
                                        <div class="vendor-img zoomimg">
                                            <!-- Vendor img -->
                                            <a href="#"><img style="width:400px; height:250px;" src="{{ asset('images/hero-image.jpg') }}" alt="" class="img-fluid"></a>
                                            <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                                        </div>
                                        <!-- /.Vendor img -->
                                        <div class="vendor-content">
                                            <!-- Vendor Content -->
                                            <h2 class="vendor-title"><a href="#" class="title">title</a></h2>
                                            <p class="vendor-address">city , country</p>
                                        </div>
                                        <!-- /.Vendor Content -->
                                        <div class="vendor-meta">
                                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                                <span class="vendor-price">
                                                    price
                                                </span>
                                                <span class="vendor-text">Start From</span>
                                            </div>
                                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                                <span class="vendor-guest">
                                                    seat
                                                </span>
                                                <span class="vendor-text">Guest</span>
                                            </div>
                                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                                <span class="rating-star">
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rate-mute"></i>
                                                </span>
                                                <span class="rating-count vendor-text">(20)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.Vendor thumbnail -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- venue-categoris-section-->
            <div class="space-small">
                <div class="container-fluid">
                    <div class="row">
                        <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                            <div class="section-title text-center">
                                <!-- section title start-->
                                <h2 class="mb10">Venues by Category</h2>
                                <p>You can browse all venues by category with thumbnail image and category name.</p>
                            </div>
                            <!-- /.section title start-->
                        </div>
                    </div>
                    <div class="row">
                        <!-- venue-categoris-block-->
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="venue-categories-block zoomimg">
                                <div class="venue-categories-img"> <a href="#"><img src="{{ asset('images/hero-image.jpg') }}" alt="" class="img-fluid"></a>
                                    <div class="venue-categories-overlay">
                                        <h3 class="mb0"><a href="#" class="venue-categories-title">Castles (20)</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- /.venue-categoris-block-->
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                            <!-- venue-categoris-block-->
                            <div class="venue-categories-block">
                                <div class="venue-categories-img zoomimg"> <a href="#"><img src="{{ asset('images/hero-image.jpg') }}" alt="" class="img-fluid"></a>
                                    <div class="venue-categories-overlay">
                                        <h3 class="mb0"><a href="#" class="venue-categories-title">Stately Homes (10)</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- /.venue-categoris-block-->
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                            <!-- venue-categoris-block-->
                            <div class="venue-categories-block">
                                <div class="venue-categories-img zoomimg"> <a href="#"><img src="{{ asset('images/hero-image.jpg') }}" alt="" class="img-fluid"></a>
                                    <div class="venue-categories-overlay">
                                        <h3 class="mb0"><a href="#" class="venue-categories-title">Barns (12)</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- /.venue-categoris-block-->
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                            <!-- venue-categoris-block-->
                            <div class="venue-categories-block ">
                                <div class="venue-categories-img zoomimg"> <a href="#"><img src="{{ asset('images/hero-image.jpg') }}" alt="" class="img-fluid"></a>
                                    <div class="venue-categories-overlay">
                                        <h3 class="mb0"><a href="#" class="venue-categories-title">Outdoors (18)</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- /.venue-categoris-block-->
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                            <!-- venue-categoris-block-->
                            <div class="venue-categories-block ">
                                <div class="venue-categories-img zoomimg"> <a href="#"><img src="{{ asset('images/hero-image.jpg') }}" alt="" class="img-fluid"></a>
                                    <div class="venue-categories-overlay">
                                        <h3 class="mb0"><a href="#" class="venue-categories-title">Landmarks(12)</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- /.venue-categoris-block-->
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                            <!-- venue-categoris-block-->
                            <div class="venue-categories-block">
                                <div class="venue-categories-img zoomimg "> <a href="#"><img src="{{ asset('images/hero-image.jpg') }}" alt="" class="img-fluid"></a>
                                    <div class="venue-categories-overlay">
                                        <h3 class="mb0"><a href="#" class="venue-categories-title">Restaurant (11)</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- /.venue-categoris-block-->
                        </div>
                    </div>
                    <!-- venue-categoris-btn -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mt60"><a href="#" class="btn btn-default btn-lg">View All category</a></div>
                    </div>
                    <!-- /.venue-categoris-btn -->
                </div>
                <!-- /.venue-categoris-section-->
            </div>
            <!-- /.real-wedding-section-->
            <!-- Testimonial-section -->
            <div class="space-medium">
                <div class="container">
                    <div class="row">
                        <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                            <div class="section-title text-center">
                                <!-- section title start-->
                                <h2 class="mb10">Testimonials from our customers</h2>
                                <p>Find out what about real couple have to say about related.</p>
                            </div>
                            <!-- /.section title start-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="testimonial-block">
                                <!-- testimonial block -->
                                <div class="testimonial-icon"> <i class="fa fa-quote-right fa-default"></i></div>
                                <h3 class="testimonial-name">Saima Alvi</h3>
                                <p class="testimonial-text">“And I knew exactly how old Walt Disney’s Cinderella felt when she found her prince.”</p>
                                <div class="testimonial-pic"><img src="{{ asset('images/testimonial-1.jpg') }}" class="rounded-circle" style="height:100px;width:100px;" alt=""></div>
                                <div class="testimonial-meta">
                                    <p class="testimonial-small-text mb0">Karachi</p>
                                </div>
                                <!-- /.testimonial block -->
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="testimonial-block">
                                <!-- testimonial block -->
                                <div class="testimonial-icon"> <i class="fa fa-quote-right fa-default"></i></div>
                                <h3 class="testimonial-name">Zohra Javaid</h3>
                                <p class="testimonial-text">“In the arithmetic of love, one plus one equals everything, and two minus one equals nothing.”</p>
                                <div class="testimonial-pic"><img src="{{ asset('images/testimonial-2.jpg') }}" class="rounded-circle" style="height:100px;width:100px;" alt=""></div>
                                <div class="testimonial-meta">
                                    <p class="testimonial-small-text mb0">Lahore</p>
                                </div>
                                <!-- /.testimonial block -->
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="testimonial-block">
                                <!-- testimonial block -->
                                <div class="testimonial-icon"> <i class="fa fa-quote-right fa-default"></i></div>
                                <h3 class="testimonial-name">Mahira Zafar</h3>
                                <p class="testimonial-text">“Oh the heart that has truly loved never forgets, But as truly loves on to the close.”</p>
                                <div class="testimonial-pic"><img src="{{ asset('images/testimonial-3.jpg') }}" class="rounded-circle" style="height:100px;width:100px;" alt=""></div>
                                <div class="testimonial-meta">
                                    <p class="testimonial-small-text mb0">Islamabad</p>
                                </div>
                                <!-- /.testimonial block -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.Testimonial-section -->
        </main>
        <div class="social-media-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-6 col-sm-6 col-12">
                        <h3 class="text-white mb0 mt10">Would you like to connect with us</h3>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12 text-right">
                        <div class="social-icons">
                            <a href="https://www.facebook.com" class="icon-square"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.twitter.com" class="icon-square"><i class="fab fa-twitter"></i> </a>
                            <a href="https://www.google.com" class="icon-square"><i class="fab fa-google-plus-g"></i></a>
                            <a href="https://www.instagram.com" class="icon-square"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com" class="icon-square"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-section -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <!-- footer-widget -->
                        <div class="footer-widget">
                            <a href="#">
                                <!-- <img src="images/footer-logo.png" alt="" class="mb20"> -->
                                <a href="/" class="logo">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 170 50" enable-background="new 0 0 170 50" xml:space="preserve">
                                        <path fill="#00A591" d="M48,50H25C11.3,50,0,38.8,0,25v0C0,11.2,11.2,0,25,0l23,0c1.1,0,2,0.9,2,2v46C50,49.1,49.1,50,48,50z"></path>
                                        <g>
                                            <path fill="#FFFFFF" d="M39,23.3c0,1.1-0.9,2-2,2v6c0,1.1-0.9,2-2,2c-2.8-2.3-7.3-5.5-12.7-5.9c-1.9,0.6-2.5,2.8-1.3,4
                                        c-1.1,1.8,0.3,3.1,2,4.4c-1,1.9-5,1.9-6.4,0.6c-0.9-2.8-2.3-5.6-1.2-9.1h-1.9c-1.4,0-2.5-1.1-2.5-2.5v-3c0-1.4,1.1-2.5,2.5-2.5H21
                                        c6,0,11-3.5,14-6c1.1,0,2,0.9,2,2v6C38.1,21.3,39,22.2,39,23.3z M35,15.8c-4.1,3.1-8,4.9-12,5.4v4.2c4,0.4,7.9,2.2,12,5.3V15.8z"></path>
                                        </g>
                                        <g>
                                            <path fill="#202020" d="M77.3,34.9c0,0.6-0.2,1-0.6,1.4c-0.4,0.4-0.8,0.5-1.3,0.5c-0.4,0-0.8-0.1-1.1-0.4c-0.3-0.2-0.6-0.6-0.7-1
                                        l-1.7-4h-9.8l-1.7,4c-0.2,0.4-0.4,0.7-0.7,1c-0.3,0.2-0.7,0.3-1,0.3c-0.6,0-1-0.2-1.3-0.5s-0.4-0.7-0.4-1.3c0-0.2,0-0.4,0.1-0.6
                                        l8.2-19.7c0.2-0.4,0.4-0.8,0.8-1c0.4-0.2,0.7-0.3,1.2-0.3c0.4,0,0.8,0.1,1.1,0.3c0.3,0.2,0.6,0.6,0.7,1l8.1,19.3
                                        C77.2,34.4,77.3,34.7,77.3,34.9z M63.7,27.7h6.6L66.9,20L63.7,27.7z"></path>
                                            <path fill="#202020" d="M95.4,12.8c0.4,0.4,0.6,0.9,0.6,1.5v20.4c0,0.6-0.2,1.1-0.6,1.4s-0.8,0.6-1.4,0.6s-1-0.2-1.4-0.6
                                        c-0.4-0.4-0.6-0.8-0.6-1.4c-0.5,0.6-1.3,1.2-2.2,1.6c-0.9,0.5-1.9,0.7-3,0.7c-1.5,0-2.9-0.4-4.1-1.2c-1.2-0.8-2.2-1.9-2.9-3.3
                                        s-1.1-3-1.1-4.7s0.4-3.3,1.1-4.7c0.7-1.4,1.7-2.5,2.9-3.3c1.2-0.8,2.6-1.2,4-1.2c1.1,0,2,0.2,3,0.6c0.9,0.4,1.7,0.9,2.3,1.5v-6.5
                                        c0-0.6,0.2-1.1,0.6-1.4s0.8-0.6,1.4-0.6S95.1,12.5,95.4,12.8z M90.9,31.8c0.9-1,1.4-2.4,1.4-3.9s-0.5-2.9-1.4-4s-2.1-1.6-3.5-1.6
                                        c-1.4,0-2.6,0.5-3.5,1.6s-1.4,2.4-1.4,4s0.4,2.9,1.3,3.9c0.9,1,2.1,1.6,3.5,1.6C88.8,33.4,90,32.9,90.9,31.8z"></path>
                                            <path fill="#202020" d="M100.4,16.5c-0.3-0.2-0.5-0.7-0.5-1.3v-0.6c0-0.6,0.2-1,0.5-1.3c0.3-0.2,0.9-0.4,1.6-0.4
                                        c0.8,0,1.3,0.1,1.6,0.4s0.5,0.7,0.5,1.3v0.6c0,0.6-0.2,1.1-0.5,1.3c-0.3,0.2-0.9,0.3-1.6,0.3C101.3,16.9,100.7,16.8,100.4,16.5z
                                        M103.5,36.1c-0.4,0.4-0.8,0.6-1.4,0.6s-1-0.2-1.4-0.6s-0.6-0.9-0.6-1.4V21.1c0-0.6,0.2-1.1,0.6-1.4c0.4-0.4,0.8-0.6,1.4-0.6
                                        s1,0.2,1.4,0.6c0.4,0.4,0.6,0.9,0.6,1.4v13.6C104,35.3,103.8,35.7,103.5,36.1z"></path>
                                            <path fill="#202020" d="M115,16.4c-0.3,0.4-0.5,0.9-0.5,1.4v1.6h3c0.5,0,1,0.2,1.3,0.5c0.4,0.3,0.5,0.8,0.5,1.3
                                        c0,0.5-0.2,1-0.5,1.3c-0.4,0.3-0.8,0.5-1.3,0.5h-3v11.7c0,0.6-0.2,1.1-0.6,1.4s-0.8,0.6-1.4,0.6s-1-0.2-1.4-0.6s-0.6-0.9-0.6-1.4
                                        V23h-1.8c-0.5,0-1-0.2-1.3-0.5c-0.4-0.3-0.5-0.8-0.5-1.3c0-0.5,0.2-1,0.5-1.3c0.4-0.3,0.8-0.5,1.3-0.5h1.8v-1.5c0-1.7,0.6-3,1.7-4
                                        c1.1-1,2.8-1.6,4.9-1.6c0.8,0,1.5,0.2,2.1,0.5c0.6,0.3,0.9,0.8,0.9,1.5c0,0.5-0.2,1-0.5,1.3c-0.3,0.3-0.7,0.5-1.1,0.5
                                        c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.4-0.1c-0.5-0.1-1-0.2-1.3-0.2C115.8,15.8,115.3,16,115,16.4z M122,16.5
                                        c-0.3-0.2-0.5-0.7-0.5-1.3v-0.6c0-0.6,0.2-1,0.5-1.3s0.9-0.4,1.6-0.4c0.8,0,1.3,0.1,1.6,0.4c0.3,0.2,0.5,0.7,0.5,1.3v0.6
                                        c0,0.6-0.2,1.1-0.5,1.3c-0.3,0.2-0.9,0.3-1.6,0.3C122.8,16.9,122.3,16.8,122,16.5z M125,36.1c-0.4,0.4-0.8,0.6-1.4,0.6
                                        c-0.6,0-1-0.2-1.4-0.6c-0.4-0.4-0.6-0.9-0.6-1.4V21.1c0-0.6,0.2-1.1,0.6-1.4c0.4-0.4,0.8-0.6,1.4-0.6c0.6,0,1,0.2,1.4,0.6
                                        c0.4,0.4,0.6,0.9,0.6,1.4v13.6C125.6,35.3,125.4,35.7,125,36.1z"></path>
                                            <path fill="#202020" d="M144.8,28.7c-0.4,0.3-0.9,0.5-1.4,0.5h-10.9c0.3,1.3,0.9,2.3,1.8,3.1c0.9,0.7,2,1.1,3.2,1.1
                                        c0.9,0,1.6-0.1,2.1-0.2s0.9-0.3,1.2-0.5c0.3-0.2,0.5-0.3,0.6-0.4c0.4-0.2,0.8-0.3,1.1-0.3c0.5,0,0.9,0.2,1.2,0.5s0.5,0.7,0.5,1.2
                                        c0,0.6-0.3,1.1-0.9,1.6c-0.6,0.5-1.4,0.9-2.5,1.3c-1,0.4-2.1,0.5-3.1,0.5c-1.8,0-3.5-0.4-4.8-1.2c-1.4-0.8-2.4-1.8-3.2-3.2
                                        c-0.7-1.4-1.1-2.9-1.1-4.6c0-1.9,0.4-3.6,1.2-5c0.8-1.4,1.8-2.5,3.1-3.3c1.3-0.8,2.7-1.1,4.2-1.1c1.5,0,2.8,0.4,4.1,1.2
                                        s2.3,1.9,3.1,3.2c0.8,1.3,1.2,2.8,1.2,4.4C145.5,28,145.2,28.4,144.8,28.7z M132.6,25.9h8.6v-0.2c-0.1-0.9-0.5-1.7-1.4-2.4
                                        c-0.8-0.7-1.7-1-2.8-1C134.6,22.3,133.1,23.5,132.6,25.9z"></path>
                                            <path fill="#202020" d="M159.6,19.3c0.5,0.4,0.7,0.8,0.7,1.3c0,0.7-0.2,1.2-0.5,1.5c-0.4,0.3-0.8,0.5-1.3,0.5
                                        c-0.3,0-0.7-0.1-1.1-0.2c-0.1,0-0.2-0.1-0.4-0.1s-0.5-0.1-0.7-0.1c-0.6,0-1.1,0.2-1.7,0.5c-0.5,0.4-1,0.9-1.3,1.6
                                        c-0.3,0.7-0.5,1.6-0.5,2.6v7.8c0,0.6-0.2,1.1-0.6,1.4s-0.8,0.6-1.4,0.6s-1-0.2-1.4-0.6s-0.6-0.9-0.6-1.4V21.1
                                        c0-0.6,0.2-1.1,0.6-1.4c0.4-0.4,0.8-0.6,1.4-0.6s1,0.2,1.4,0.6c0.4,0.4,0.6,0.9,0.6,1.4v0.4c0.5-0.9,1.2-1.6,2.2-2.1
                                        c0.9-0.5,2-0.7,3-0.7C158.6,18.7,159.2,18.9,159.6,19.3z"></path>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                    </svg>
                                </a>
                            </a>
                            <p class="mb10">Vestibulum ante elit, convallis quis nibh in, vulputate rhoncus massa. In hac habitasse platea dictumst.</p>
                            <p>In hac habitasse platea dictumst simple dummy content here.</p>
                        </div>
                    </div>
                    <!-- /.footer-widget -->
                    <!-- footer-widget -->
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h3 class="widget-title">
                                Contact Address
                            </h3>
                            <p>4998 Elk Creek Road Canton,
                                <br> GA 30114
                            </p>
                            <p class="mb0 text-primary">+0-800-1234-123</p>
                            <p class="mb0 text-primary">info@realwed.com</p>
                        </div>
                    </div>
                    <!-- /.footer-widget -->
                    <!-- footer-widget -->
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h3 class="widget-title">
                                About Company
                            </h3>
                            <ul class="listnone">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Pricing Plan</a></li>
                                <li><a href="#">Meet The Team</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.footer-widget -->
                    <!-- /.footer-widget -->
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h3 class="widget-title">
                                List you Business
                            </h3>
                            <p>Are you vendor ? List your venue and service get more from listing business.</p>
                            <a href="#" class="btn btn-primary">List your Business</a>
                        </div>
                    </div>
                    <!-- /.footer-widget -->
                </div>
            </div>
        </div>
        <!-- tiny-footer-section -->
        <div class="tiny-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right">
                        <p>© 2020 Adifier. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/return-to-top.js"></script>
</body>

</html>