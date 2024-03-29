<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="wedding vendor directory HTML template">
    <title>Listing</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <link href="fontello/css/fontello.css" rel="stylesheet">
    <link href="css/owl.carousel.css" type="text/css" rel="stylesheet">
    <link href="css/owl.theme.default.css" type="text/css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link href="css/style.css" rel="stylesheet">
    <style>
        body {
            font-family: sans-serif;
            background: #ffffff;
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

        .container>a {
            color: #00a591;
        }

        .container>a:hover {
            color: #00a591;
            font-weight: 500;
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
            background-color: #302d34;
            color: #959ba7;
            border-bottom: 1px solid #374252;
        }

        .icon-square:hover {
            background: #00a591;
        }

        .footer {
            background-color: #302d34;
            color: #98969b;
        }

        .tiny-footer {
            background-color: #302d34;
            border-top: 1px solid #374252;
        }

        .footer-widget .widget-title {
            font-weight: 400;
        }

        .tiny-footer {
            color: #aaaaaa;
        }

        .footer-widget ul li a:hover {
            color: #00a591;
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

        .testimonial-block {
            height: 450px;
        }

        .container-a {
            border: 1px solid #e3e3e3;
            padding: 1rem;
            position: relative;
            margin-bottom: 1rem;
        }

        .container>div {
            margin: 10px;
        }

        .img>img {
            height: 155px;
            width: 250px;
            margin: 5px;
        }

        .title {
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .title>a {
            color: #00a591;
            font-size: 1.3rem;
        }

        .button>p {
            width: 6rem;
            border-radius: 5%;
            background: rgb(189, 2, 2);
            color: #ffffff;
            text-align: center;
            height: 1.7rem;
            position: absolute;
            top: 31px;
            left: 31px;
        }

        .blue>p {
            background: rgb(2, 28, 255);
        }

        .nice-select .option:hover,
        .nice-select .option.focus,
        .nice-select .option.selected.focus {
            background: #00bda7;
            color: #ffffff;
        }

        @media all and (max-width: 768px) {
            .img>img {
                height: 130px;
                width: 220px;
            }

            .img3 {
                display: none;
            }

            .img4 {
                display: none;
            }
        }

        @media all and (max-width: 533px) {
            .img2 {
                display: none;
            }

            .img>img {
                height: 220px;
                width: 420px;
            }

            .pdb0 {
                padding-right: 1rem;
                padding-left: 1rem;
            }
        }

        @media all and (max-width: 430px) {
            .img>img {
                height: 200px;
            }
        }

        @media all and (max-width: 400px) {
            .img>img {
                height: 180px;
            }
        }

        @media all and (max-width: 366px) {
            .img>img {
                height: 160px;
            }
        }

        @media all and (max-width: 330px) {
            .img>img {
                height: 140px;
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
                            <a class="navbar-brand" href="/">
                                <img src="images/adifier-logo.PNG" alt="">
                            </a>
                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-classic" aria-controls="navbar-classic" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar top-bar mt-0"></span>
                                <span class="icon-bar middle-bar"></span>
                                <span class="icon-bar bottom-bar"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar-classic">
                                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-3">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown" href="/">
                                            Home
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown" href="/contact">
                                            Contact Us
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown" href="/about">
                                            About Us
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown" href="/login">
                                            Login
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown" href="/register">
                                            Register
                                        </a>
                                    </li>
                                </ul>
                                <a href="/login" class="btn btn-primary">Get Started Now</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- navigation close -->
        </div>
        <main>
            @yield('content')
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