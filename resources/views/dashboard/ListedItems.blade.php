<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listing</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('fontello/css/fontello.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/offcanvas.css') }}">
    <style>
        .listing-img{
            height: 120px;
        }
    </style>
</head>

<body class="body-bg">
    <div class="dashboard-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-8 col-md-8 col-sm-6 col-6">
                    <div class="header-logo">
                        <a href="/"><img src="images/logo.png" alt="Weddings | Find A Wedding Venue &amp; Supplier WordPress Theme"></a>
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
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="notification-info">
                                                            <div class="notification-list-user-img"><img src="images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">John Deo</span>is now following you
                                                                <div class="notification-date">2 days ago</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="notification-info">
                                                            <div class="notification-list-user-img"><img src="images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                                <div class="notification-date">2 min ago</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="notification-info">
                                                            <div class="notification-list-user-img"><img src="images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
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
                                        <a class="dropdown-item" href="{{ route('home') }}">Dashboard</a>
                                        <a class="dropdown-item" href="listing"> My Listed Item </a>
                                        <a class="dropdown-item" href="#">Request Quotes</a>
                                        <a class="dropdown-item" href="#">Reviews </a>
                                        <a class="dropdown-item" href="{{ route('profile') }}">My Profile </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}">Log Out</a>
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
                    <li><a href="{{ route('home') }}"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li class="active"><a href="listing"><span class="dash-nav-icon"><i class="fas fa-list-alt"></i> </span> My Listed Item </a></li>
                    <li><a href="#"><span class="dash-nav-icon"><i class="fas fa-edit"></i></span>Request Quotes</a></li>
                    <li><a href="#"><span class="dash-nav-icon"><i class="fas fa-comments"></i></span>Reviews </a></li>
                    <li><a href="{{ route('profile') }}"><span class="dash-nav-icon"><i class="fas fa-user-circle"></i></span>My Profile </a></li>
                    <li><a href="{{ route('logout') }}"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Logout </a></li>
                </ul>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">Your Listed Items</h3>
                            <!-- <p>Lists present multiple line items vertically as a single continuous element.</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right mb20">
                        <a href="add-listing" class="btn btn-default btn-sm">add new Listing</a>
                    </div>
                </div>
                <div class="dashboard-vendor-list">
                    <ul class="list-unstyled">
                        @foreach($listings as $listing)
                        <li>
                            <div class="dashboard-list-block">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="dashboard-list-img">
                                            <a href="#"><img src="listing-image/{{ $listing->hero_image }}" alt="" class="img-fluid listing-img"></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-5 col-md-6 col-sm-12 col-12 ">
                                        <div class="dashboard-list-content">
                                            <h3 class="mb0"><a href="#" class="title">{{ $listing->title }}</a></h3>
                                            <p>{{ $listing->description }}</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="dashboard-list-btn">
                                            <a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a>
                                            <a href="#" class="btn btn-outline-pink btn-xs ">delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="d-flex justify-content-center">
                    {{ $listings->links() }}
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/menumaker.min.js') }}"></script>
    <script src="{{ asset('js/custom-script.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/offcanvas.js"></script>

</body>

</html>