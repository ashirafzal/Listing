<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Detail</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('fontello/css/fontello.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.rateyo.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
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
    </style>
</head>

<body>
    <!-- Floating messages -->
    <div class="container float">
        @if(session('success'))
        <div class="alert alert-info alert-block">
            <!-- <button type="button" class="close" data-dismiss="alert">×</button> -->
            <strong>{{session('success')}}</strong>
        </div>
        @endif
        @if(session('errors'))
        <div class="alert alert-danger alert-block">
            <!-- <button type="button" class="close" data-dismiss="alert">×</button> -->
            <strong>{{session('errors')}}</strong>
        </div>
        @endif
    </div>
    <!-- Floting messages ends -->
    <!-- header -->
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
    <!-- /.header -->
    <!-- page-header -->
    <div class="venue-pageheader" style="background-image: url({{ asset('listing-image/' . $listings->hero_image) }})">
        <div class="container">
            <div class="row align-items-end page-section">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="">
                        <h1 class="vendor-heading">{{ $listings->title }}</h1>
                        <p class="text-white"><span class="mr-2"><i class="fas fa-map-marker-alt "></i></span>{{ $listings->address }}<a href="#view-map" class="btn-primary-link"><b>view map</b></a></p>
                    </div>
                </div>
                <div class="col-xl-5 text-lg-right">
                    <div class="mt-xl-4">
                        <a href="#" class="btn btn-primary" id="open-popup">View Gallery</a>
                        <a href="wish-list/{{ $listings->id }}" class="btn-default-wishlist"><i class="fa fa-heart"></i> <span class="pl-1">Add To Wishlist</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header -->
    <!-- page-header -->
    <div class="vendor-content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                    <div class="mt20">
                        <div class="card border card-shadow-none">
                            <h3 class="card-header bg-white">About Wedding Venue</h3>
                            <div class="card-body">
                                <!--/.vendor-details -->
                                <!--vendor-description -->
                                <p class="lead">Description</p>
                                <p>
                                    {{ $listings->description }}
                                </p>
                                <div class="venue-highlights">
                                    <div class=" table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col"><b>Venue Highlights</b></th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-heading">Title</td>
                                                    <td class="venue-highlight-meta">{{ $listings->title }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-heading">Category</td>
                                                    <td class="venue-highlight-meta">{{ $listings->category }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-heading">City</td>
                                                    <td class="venue-highlight-meta">{{ $listings->city }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-heading">Country</td>
                                                    <td class="venue-highlight-meta">{{ $listings->country}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-heading">Zipcode</td>
                                                    <td class="venue-highlight-meta">{{ $listings->zipcode }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-heading">Latitude</td>
                                                    <td class="venue-highlight-meta">{{ $listings->latitude }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-heading">Longitude</td>
                                                    <td class="venue-highlight-meta">{{ $listings->longitude }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-heading">Facebook</td>
                                                    <td class="venue-highlight-meta">{{ $listings->facebook }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-heading">Twitter</td>
                                                    <td class="venue-highlight-meta">{{ $listings->twitter }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-heading">Instagram</td>
                                                    <td class="venue-highlight-meta">{{ $listings->instagram }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-heading">Youtube</td>
                                                    <td class="venue-highlight-meta">{{ $listings->youtube }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-heading">Vendor Name</td>
                                                    <td class="venue-highlight-meta">{{ $listings->vendor_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-heading">Vendor Email</td>
                                                    <td class="venue-highlight-meta">{{ $listings->vendor_email }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-heading">Vendor Phone Number</td>
                                                    <td class="venue-highlight-meta">{{ $listings->vendor_phone_number }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.venue-highlights -->
                            </div>
                        </div>
                        <!--vendor-description -->
                        <!-- review-block -->
                        <div id="reviews">
                            <div class="card border card-shadow-none ">
                                <div class="card-header bg-white">
                                    <h3 class="mb0 d-inline-block">Reviews</h3>
                                    <a href="#review-form" class="btn btn-primary btn-sm float-right d-inline-block">write a review</a>
                                </div>
                                <div class="card-body">
                                    <div class="review-block">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <!-- review-sidebar -->
                                                <div class="review-sidebar">
                                                    @isset($AvgReviewsRating)
                                                    <div class="review-total">{{ number_format($AvgReviewsRating, 2, '.', ',') }}</div>
                                                    @endisset
                                                    @empty($AvgReviewsRating)
                                                    <div class="review-total">-</div>
                                                    @endempty
                                                    <div class="review-text">Reviews</div>
                                                    @if($AvgReviewsRating == 5.0)
                                                    <span class="rated">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa  fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    @elseif($AvgReviewsRating > 4.5)
                                                    <span class="rated">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa  fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                    </span>
                                                    @elseif($AvgReviewsRating > 4)
                                                    <span class="rated">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa  fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                    @elseif($AvgReviewsRating > 3.5)
                                                    <span class="rated">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa  fa-star-half"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                    @elseif($AvgReviewsRating > 3.0)
                                                    <span class="rated">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="far  fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                    @elseif($AvgReviewsRating > 2.5)
                                                    <span class="rated">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                        <i class="far  fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                    @elseif($AvgReviewsRating > 2.0)
                                                    <span class="rated">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far  fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                    @elseif($AvgReviewsRating > 1.5)
                                                    <span class="rated">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far  fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                    @elseif($AvgReviewsRating > 1.0)
                                                    <span class="rated">
                                                        <i class="fa fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far  fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                    @elseif($AvgReviewsRating > 0.5)
                                                    <span class="rated">
                                                        <i class="fa fa-star-half"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far  fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                    @else
                                                    <span class="rated">
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far  fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                    @endif
                                                    @isset($AvgReviewsRating)
                                                    <p>{{ number_format($AvgReviewsRating, 2, '.', ',') }} average based on {{ $ReviewsCount }} ratings.</p>
                                                    @endisset
                                                    @empty($AvgReviewsRating)
                                                    <p> average based rating not available.</p>
                                                    @endempty
                                                </div>

                                                <!-- /.review-sidebar -->
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="review-box">
                                                    <!-- review-list -->
                                                    <div class="review-list">
                                                        <div class="review-for"><b>Rating</b></div>
                                                        <div class="review-rating">
                                                            @if($AvgReviewsRating == 5.0)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa  fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                            @elseif($AvgReviewsRating > 4.5)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa  fa-star"></i>
                                                                <i class="fa fa-star-half"></i>
                                                            </span>
                                                            @elseif($AvgReviewsRating > 4)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa  fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </span>
                                                            @elseif($AvgReviewsRating > 3.5)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa  fa-star-half"></i>
                                                                <i class="far fa-star"></i>
                                                            </span>
                                                            @elseif($AvgReviewsRating > 3.0)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="far  fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </span>
                                                            @elseif($AvgReviewsRating > 2.5)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half"></i>
                                                                <i class="far  fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </span>
                                                            @elseif($AvgReviewsRating > 2.0)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far  fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </span>
                                                            @elseif($AvgReviewsRating > 1.5)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far  fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </span>
                                                            @elseif($AvgReviewsRating > 1.0)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far  fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </span>
                                                            @elseif($AvgReviewsRating > 0.5)
                                                            <span class="rated">
                                                                <i class="fa fa-star-half"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far  fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </span>
                                                            @else
                                                            <span class="rated">
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far  fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </span>
                                                            @endif
                                                        </div>
                                                        @isset($AvgReviewsRating)
                                                        <div class="review-number">{{ number_format($AvgReviewsRating, 2, '.', ',') }}</div>
                                                        @endisset
                                                        @empty($AvgReviewsRating)
                                                        <div class="review-number">No Rating</div>
                                                        @endempty
                                                    </div>
                                                    <!-- /.review-list -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.review-block -->
                        @foreach($Reviews as $Review)
                        <div class="card border card-shadow-none ">
                            <!-- review-user -->
                            <div class="card-header bg-white mb0">
                                <div class="review-user">
                                    <div class="user-img">
                                        <img src="{{ url('user-image') }} {{ '/'.$Review->user_image}}" alt="" class="rounded-circle">
                                    </div>
                                    <div class="user-meta">
                                        <h5 class="user-name mb-0">{{ $Review->user_name }}
                                            <span class="user-review-date">{{ $Review->created_at->diffForHumans() }}</span>
                                        </h5>
                                        <div class="given-review">
                                            @if($Review->rating == 5.0)
                                            <span class="rated">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa  fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            @elseif($Review->rating > 4.5)
                                            <span class="rated">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa  fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </span>
                                            @elseif($Review->rating > 4)
                                            <span class="rated">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa  fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </span>
                                            @elseif($Review->rating > 3.5)
                                            <span class="rated">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa  fa-star-half"></i>
                                                <i class="far fa-star"></i>
                                            </span>
                                            @elseif($Review->rating > 3.0)
                                            <span class="rated">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="far  fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </span>
                                            @elseif($Review->rating > 2.5)
                                            <span class="rated">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="far  fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </span>
                                            @elseif($Review->rating > 2.0)
                                            <span class="rated">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far  fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </span>
                                            @elseif($Review->rating > 1.5)
                                            <span class="rated">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far  fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </span>
                                            @elseif($Review->rating > 1.0)
                                            <span class="rated">
                                                <i class="fa fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far  fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </span>
                                            @elseif($Review->rating > 0.5)
                                            <span class="rated">
                                                <i class="fa fa-star-half"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far  fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </span>
                                            @else
                                            <span class="rated">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far  fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.review-user -->
                            <div class="card-body">
                                <!-- review-descripttions -->
                                <div class="review-descriptions">
                                    <p>{{ $Review->review_text }}</p>
                                </div>
                                <!-- /.review-descripttions -->
                            </div>
                        </div>
                        @endforeach
                        <!-- <div>{{ $Reviews->links() }}</div> -->
                        <div class="card border card-shadow-none text-center">
                            <a class="view-all p-2" href="#">View All</a>
                        </div>
                        <!-- /.review-content -->
                        <!-- /.review-block -->
                    </div>
                    <!-- /.review-content -->
                    <!-- review-form -->
                    <!-- /.review-block -->
                    <div class="card border card-shadow-none leave-review" id="review-form">
                        <div class="card-header bg-white mb0">
                            <h3 class="mb0">Write Your Reviews</h3>
                        </div>
                        <div class="card-body">
                            <div class="review-rating-select">
                                <div class="rate-selection">
                                    <span class="text-dark"><b>Rating</b></span>
                                    <span id="rateYo1"></span>
                                </div>
                            </div>
                            <form action="{{ url('review-create') }}" method="post">
                                @csrf
                                <div class="row">
                                    <!-- Textarea -->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt30">
                                        <div class="form-group">
                                            <label class="control-label" for="review">Write Your Review</label>
                                            <textarea class="form-control" id="review" name="review" rows="5" placeholder="Write Review"></textarea>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="name">Name</label>
                                            <!-- Hidden Field -->
                                            <input id="vendor_id" name="vendor_id" type="hidden" value="{{ $listings->vendor_id }}" placeholder="rating" class="form-control input-md">
                                            <input id="listing_id" name="listing_id" type="hidden" value="{{ $listings->id }}" placeholder="rating" class="form-control input-md">
                                            <input id="rating" name="rating" type="hidden" placeholder="rating" class="form-control input-md">
                                            <!-- Hidden Field -->
                                            <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="email">Email</label>
                                            <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <button id="submit" name="submit" class="btn btn-primary">Submit review</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- /.review-form -->
                    <!-- location -->
                    <div class="card border card-shadow-none" id="view-map">
                        <div class="card-header bg-white mb0">
                            <h3 class="mb0">Location - Map</h3>
                        </div>
                        <div class="card-body">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
                <!-- /.location -->
                <!-- list-sidebar -->
                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                    <div class="sidebar-venue">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ url('request-quote-create') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <h3 class="mb20">Request Quote</h3>
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label sr-only" for="name1">Name</label>
                                                <input name="listing_id" type="hidden" value="{{ $listings->id }}" placeholder="Name" class="form-control input-md" required="">
                                                <input id="name1" name="name" type="text" placeholder="Name" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class=" control-label sr-only" for="email1">Email</label>
                                                <input id="email1" name="email" type="text" placeholder="Email" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class=" control-label sr-only" for="phone">Phone</label>
                                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                        <!-- Textarea -->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label sr-only" for="comments">Comment</label>
                                                <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Write Comment"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">Submit Quote</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- venue-admin -->
                        <div class="vendor-owner-profile mb30">
                            <div class="vendor-owner-profile-head">
                                @if($VendorDetails->image)
                                <div class="vendor-owner-profile-img">
                                    <img src="{{ url('user-image') }} {{ '/'.$VendorDetails->image}}" class="rounded-circle" alt="">
                                </div>
                                @else
                                <div class="vendor-owner-profile-img">
                                    <img src="{{ asset('images/dashboard-profile.jpg') }}" class="rounded-circle" alt="">
                                </div>
                                @endif
                                <h4 class="vendor-owner-name mb0">{{ $VendorDetails->name }}</h4>
                            </div>
                            <div class="vendor-owner-profile-content">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><span class="mr-2"><i class="fas fa-fw fa-phone"></i></span>{{ $VendorDetails->phone_number }}</li>
                                    <li class="list-group-item"><span class="mr-2"><i class="fas fa-fw fa-envelope"></i></span>{{ $VendorDetails->email }}</li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.venue-admin -->
                        <!-- social-media -->
                        <div class="widget">
                            <h4 class="widget-title">Share this </h4>
                            <div class="social-icons">
                                <a href="#" class="icon-square-outline facebook-outline"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="icon-square-outline twitter-outline"><i class="fab fa-twitter"></i> </a>
                                <a href="#" class="icon-square-outline googleplus-outline"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#" class="icon-square-outline instagram-outline"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="icon-square-outline linkedin-outline"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="icon-square-outline pinterest-outline"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                        <!-- /.social-media -->
                    </div>
                </div>
            </div>
            <!-- /.list-sidebar -->
        </div>
    </div>
    <!-- vendor-thumbnail section -->
    <div class="space-small">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2>More listing from this vendor</h2>
                </div>
            </div>
            <div class="row">
                @foreach($SimiliarListing as $SimiliarListings)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="vendor-thumbnail">
                        <!-- Vendor thumbnail -->
                        <div class="vendor-img zoomimg">
                            <!-- Vendor img -->
                            <a href="{{ $SimiliarListings->id }}"><img src="{{ asset('listing-image/' . $SimiliarListings->hero_image) }}" alt="" class="img-fluid"></a>
                            <div class="wishlist-sign"><a href="wish-list/{{ $SimiliarListings->id }}" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                        </div>
                        <!-- /.Vendor img -->
                        <div class="vendor-content">
                            <!-- Vendor Content -->
                            <h2 class="vendor-title"><a href="{{ $SimiliarListings->id }}" class="title blue-text">{{ $SimiliarListings->title }}</a></h2>
                            <p class="vendor-address">{{ $SimiliarListings->city }} , <span>{{ $SimiliarListings->country }}</span> </p>
                        </div>
                        <div class="vendor-meta">
                            <div class="vendor-meta-item vendor-meta-item-bordered blue-text">
                                <span class="">
                                    {{ $SimiliarListings->city }}
                                </span>
                                <span class="rating-count vendor-text">City</span>
                            </div>
                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                <span class="blue-text">
                                    {{ $SimiliarListings->country }}
                                </span>
                                <span class="rating-count vendor-text">Country</span>
                            </div>
                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                <span class="blue-text">
                                    {{ $SimiliarListings->vendor_name }}
                                </span>
                                <span class="rating-count vendor-text">Vendor</span>
                            </div>
                        </div>
                        <!-- /.Vendor Content -->
                    </div>
                    <!-- /.Vendor thumbnail -->
                </div>
                @endforeach
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <a class="view-all blue-text p-2" href="#">View All</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.vendor-thumbnail section -->
    <!-- social-media-section -->
    <div class="social-media-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
                    <h3 class="text-white mb0 mt10">Would you like to connect with us</h3>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12 text-right">
                    <div class="social-icons">
                        <a href="#" class="icon-square"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-twitter"></i> </a>
                        <a href="#" class="icon-square"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.social-media-section -->
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
                            <li><a href="/about">About us</a></li>
                            <li><a href="/contact">Contact us</a></li>
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
                        <a href="/login" class="btn btn-primary">List your Business</a>
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

    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/fastclick.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <!-- <script src="{{ asset('js/custom-script.js') }}"></script> -->
    <script>
        function initMap() {
            var uluru = {
                lat: 23.0732195,
                lng: 72.5646902
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 17,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map,
                icon: "{{ asset('images/map-pin(3).png') }}"
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvZiQwPXkkIeXfAn-Cki9RZBj69mg-95M&amp;callback=initMap">
    </script>
    <script src="{{ asset('js/jquery.rateyo.min.js') }}"></script>
    <script>
        $(function() {

            $("#rateYo1").rateYo({
                rating: 0.0
            });

            $("#rateYo1").rateYo().on("rateyo.change", function(e, data) {
                var rating = data.rating;
                $('#rating').val(rating); //add rating value to input field
            });
        });
    </script>
    <script>
        if ($('#open-popup').length) {
            $('#open-popup').magnificPopup({
                items: [{
                        src: "{{ asset('listing-image/' . $listings->image1) }}",
                        title: 'Image #1'
                    },
                    {
                        src: "{{ asset('listing-image/' . $listings->image2) }}",
                        title: 'Image #2'
                    },
                    {
                        src: "{{ asset('listing-image/' . $listings->image3) }}",
                        title: 'Image #3'
                    },
                ],
                gallery: {
                    enabled: true
                },
                type: 'image' // this is a default type
            });

        }
    </script>
    <script src="{{ asset('js/return-to-top.js') }}"></script>
</body>

</html>