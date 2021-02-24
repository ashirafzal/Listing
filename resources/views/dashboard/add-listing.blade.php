<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Listing</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('fontello/css/fontello.css') }}" rel="stylesheet">
    <link href="{{ asset('css/summernote-bs4.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/offcanvas.css') }}">
    <style>
        .header-logo {
            width: 100px;
            height: 50px;
        }

        .img-fluid {
            width: 100%;
        }

        label,
        input {
            color: #484848;
        }

        a:hover {
            color: #00a591;
        }

        .notification-list-user-name {
            color: #00a591;
        }

        .dropdown-menu>li>.list-footer {
            background-color: #00a591;
            border-color: #00a591;
        }

        .vendor-profile-name {
            color: #484848;
            font-weight: 400;
        }

        .edit-link {
            color: #484848;
        }

        .dashboard-nav ul li a {
            color: #5c5a5a;
            font-weight: 400;
        }

        .dashboard-nav ul li a:hover {
            color: #00a591;
        }

        .dashboard-nav ul li.active a {
            color: #00a591;
        }

        .dropdown-item:hover {
            color: #00a591;
            background: none;
        }

        .notification-icon {
            color: #00a591;
        }

        .btn-default {
            background-color: #00a591;
            border-color: #00a591;
        }

        .btn-default:hover {
            background-color: #00a591;
            border-color: #00a591;
        }

        .btn-default:active {
            background-color: #00a591;
            border-color: #00a591;
        }

        .dashboard-page-header>p {
            color: #00a591;
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
    </style>
</head>

<body class="body-bg">
    <div class="dashboard-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-8 col-md-8 col-sm-6 col-6">
                    <div class="header-logo">
                        <!-- <a href="/"><img src="images/logo.png" alt="Weddings | Find A Wedding Venue &amp; Supplier WordPress Theme"></a> -->
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
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <nav class="navbar navbar-expand-lg float-right db-nav-list">
                        <div>
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown dropleft notification ">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="notification-icon"> <i class="fas fa-bell"></i></span><span class="user-vendor-name"></span></a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                        <li>
                                            <div class="notification-title"> Notification</div>
                                            <div class="notification-list">
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item list-group-item-action active">
                                                        <div class="notification-info">
                                                            <div class="notification-list-user-img"><img src="images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                                <div class="notification-date">2 min ago</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="list-footer"> <a href="#">View all notifications</a></div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown dropleft user-vendor ">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @if($user->image)
                                        <span class="user-icon">
                                            <img src="user-image/{{ $user->image }}" alt="" class="rounded-circle mb10">
                                        </span>
                                        @else
                                        <span class="user-icon">
                                            <img src="images/dashboard-profile.jpg" alt="" class="rounded-circle mb10">
                                        </span>
                                        @endif
                                        <span class="user-vendor-name">
                                            {{ $user->name }}
                                        </span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="/home">Dashboard</a>
                                        <a class="dropdown-item" href="/listing"> My Listed Item </a>
                                        <a class="dropdown-item" href="/request-quote">Request Quotes</a>
                                        <a class="dropdown-item" href="/reviews">Reviews </a>
                                        <a class="dropdown-item" href="/profile">My Profile </a>
                                        <a class="dropdown-item" href="/logout">Log Out</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="offcanvas">
            <span id="icon-toggle" class="fa fa-bars"></span>
        </button>
    </div>
    <div class="dashboard-wrapper">
        <div class="dashboard-sidebar offcanvas-collapse">
            <div class="vendor-user-profile">
                @if($user->image)
                <div class="vendor-profile-img">
                    <img src="user-image/{{ $user->image }}" alt="" class="rounded-circle">
                </div>
                @else
                <div class="vendor-profile-img">
                    <img src="images/dashboard-profile.jpg" alt="" class="rounded-circle">
                </div>
                @endif
                <h3 class="vendor-profile-name">{{ $user->name }}</h3>
                <a href="#" class="edit-link">edit profile</a>
            </div>
            <div class="dashboard-nav">
                <ul class="list-unstyled">
                    <li><a href="/home"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li class="active"><a href="/listing"><span class="dash-nav-icon"><i class="fas fa-list-alt"></i> </span> My Listed Item </a></li>
                    <li><a href="/request-quote"><span class="dash-nav-icon"><i class="fas fa-edit"></i></span>Request Quotes</a></li>
                    <li><a href="/reviews"><span class="dash-nav-icon"><i class="fas fa-comments"></i></span>Reviews </a></li>
                    <li><a href="/profile'"><span class="dash-nav-icon"><i class="fas fa-user-circle"></i></span>My Profile </a></li>
                    <li><a href="/logout'"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Logout </a></li>
                </ul>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">Add New Listing</h3>
                            <p>Lists present multiple line items vertically as a single continuous element.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    @if(session('success'))
                    <div class="alert alert-info alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{session('success')}}</strong>
                    </div>
                    @endif
                    @if(session('errors'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{session('errors')}}</strong>
                    </div>
                    @endif
                    <div class="card-header">
                        <h4 class="mb0">About Listing</h4>
                    </div>
                    <div class="">
                        <form action="create-list" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="venue-form-info card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="title">Title</label>
                                            <input id="title" name="title" type="text" placeholder="Title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="Category">Category</label>
                                            <select class="wide" id="category" name="category">
                                                <option value="Select Category">Select Category</option>
                                                <option value="1">Hotel</option>
                                                <option value="2">Restaurant</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="address">Address </label>
                                            <input id="address" name="address" type="text" placeholder="Street address" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="city">City</label>
                                            <select class="wide" name="city" id="city">
                                                <option value="karachi">karachi</option>
                                                <option value="Hyderebad">Hyderebad</option>
                                                <option value="Islamabad">Islamabad</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="Country">Country</label>
                                            <select class="wide" name="country" id="country">
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="India">India</option>
                                                <option value="Nepal">Nepal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="zipcode">Zip Code</label>
                                            <input id="zipcode" name="zipcode" type="text" placeholder="Zip code" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="summernote">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="6" placeholder="Write Descriptions for your venue"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-location-map card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h4>Location Map</h4>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="latitude">Latitude</label>
                                            <input id="latitude" name="latitude" type="number" placeholder="23.0732195" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="longitude">Longitude</label>
                                            <input id="longitude" name="longitude" type="number" placeholder="72.5646902" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="well-box">
                                            <div id="map"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-venue-gallery card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Add Gallery Of Venue</h3>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="filebutton">Choose Main Image <label class="text-danger"><b>(Required)*</b></label> </label>
                                            <input id="hero_image" name="hero_image" class="btn btn-default btn-block" type="file">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="gallery-upload-img">
                                                    <img src="images/gallery-thumb.html" alt="" class="img-fluid">
                                                    <span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="filebutton">Image 1 (Optional)</label>
                                            <input id="image1" name="image1" class="btn btn-default btn-block" type="file">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="gallery-upload-img">
                                                    <img src="images/gallery-thumb.html" alt="" class="img-fluid">
                                                    <span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="filebutton">Image 2 (Optional)</label>
                                            <input id="image2" name="image2" class="btn btn-default btn-block" type="file">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="gallery-upload-img">
                                                    <img src="images/gallery-thumb.html" alt="" class="img-fluid">
                                                    <span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="filebutton">Image 3 (Optional)</label>
                                            <input id="image3" name="image3" class="btn btn-default btn-block" type="file">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="gallery-upload-img">
                                                    <img src="images/gallery-thumb.html" alt="" class="img-fluid">
                                                    <span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="social-form-info card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Social Media </h3>

                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="facebook">Facebook</label>
                                            <input id="facebook" name="facebook" type="url" placeholder="https://www.facebook.com" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="twitter">Twitter</label>
                                            <input id="twitter" name="twitter" type="url" placeholder="https://www.twitter.com" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="instagram">Instagram</label>
                                            <input id="instagram" name="instagram" type="url" placeholder="https://www.instagram.com" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="youtube">Youtube</label>
                                            <input id="youtube" name="youtube" type="url" placeholder="https://www.youtube.com" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <button class="btn btn-default" type="submit">Submit New Item</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/menumaker.min.js') }}"></script>
    <script src="{{ asset('js/custom-script.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/fastclick.js') }}"></script>
    <script src="{{ asset('js/offcanvas.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
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
                icon: 'images/map-pin.png',
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvZiQwPXkkIeXfAn-Cki9RZBj69mg-95M&amp;callback=initMap">
    </script>
    <script src="{{ asset('js/summernote-bs4.js') }}"></script>
</body>

</html>