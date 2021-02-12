<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="wedding vendor directory HTML template">
    <title> Wedding Vendor &amp; Supplier Directory HTML Template - RealWed </title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('fontello/css/fontello.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.css') }}" type="text/css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="body-bg">
    <div class="dashboard-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-8 col-md-8 col-sm-6 col-6">
                    <div class="header-logo">
                        <a href="/"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
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
                                                            <div class="notification-list-user-img"><img src="{{ asset('images/avatar-2.jpg') }}" alt="" class="user-avatar-md rounded-circle"></div>
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
                                        <span class="user-icon">
                                            <img src="" alt="" class="rounded-circle mb10">
                                        </span>
                                        <span class="user-vendor-name">{{ $user->name }}</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="{{ route('home') }}">Dashboard</a>
                                        <a class="dropdown-item" href="#"> My Listed Item </a>
                                        <a class="dropdown-item" href="#">Pricing Plan</a>
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
                <div class="vendor-profile-img">
                    <img src="#" alt="" class="rounded-circle">
                </div>
                <h3 class="vendor-profile-name">{{ $user->name }}</h3>
                <a href="#" class="edit-link">edit profile</a>
            </div>
            <div class="dashboard-nav">
                <ul class="list-unstyled">
                    <li class="active"><a href="{{ route('home') }}"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li><a href="#"><span class="dash-nav-icon"><i class="fas fa-list-alt"></i> </span> My Listed Item </a>
                    <li><a href="#"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Pricing Plan</a></li>
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
                            <h3 class="dashboard-page-title ">My Profile</h3>
                            <p>Change your profile image and information edit and save.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Password Change</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Email Notifications</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Delete Account</a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="card">
                                    <div class="card-header">Profile</div>
                                    <div class="card-body">
                                        <div class="alert alert-info alert-block" style="display:none;">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong></strong>
                                        </div>
                                        <div class="alert alert-danger alert-block" style="display:none;">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong></strong>
                                        </div>
                                        <form id="userupdateform" action="{{ url('updateuser') }}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            {{ method_field('POST') }}
                                            @if ($message = Session::get('success'))
                                            <div class="alert alert-success alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            <br>
                                            @endif
                                            <!-- Form Name -->
                                            <div class="profile-upload-img">
                                                <div class="row">
                                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div id="image-preview">
                                                            <img src="#" alt="" class="rounded-circle">
                                                        </div>
                                                        <input type="file" name="image" id="image" class="upload-profile-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="personal-form-info">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <input id="vendorid" name="vendorid" type="hidden" placeholder="" value="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <input id="vendorpass" name="vendorpass" type="hidden" placeholder="" value="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <!-- Text input-->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="vendorname">User Name</label>
                                                            <input id="vendorname" name="vendorname" type="text" placeholder="{{ $user->name }}" value="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="email">Email</label>
                                                            <input id="email" name="email" type="email" placeholder="" value="{{ $user->email }}" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="phone">Phone</label>
                                                            <input id="phone" name="phone" type="text" placeholder="" value="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="summernote">Descriptions </label>
                                                            <textarea class="form-control" id="editordata" name="editordata" rows="6" placeholder="Write Descriptions for your venue">description</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="social-form-info mb-0">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <h3>Social Media </h3>
                                                        <div class="dashboard-section-line">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="facebook">Facebook</label>
                                                            <input id="facebook" name="facebook" value="" type="url" placeholder="https://www.facebook.com" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="twitter">Twitter</label>
                                                            <input id="twitter" name="twitter" value="" type="url" placeholder="https://www.twitter.com" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="instagram">Instagram</label>
                                                            <input id="instagram" name="instagram" value="" type="url" placeholder="https://www.instagram.com" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="youtube">Youtube</label>
                                                            <input id="youtube" name="youtube" value="" type="url" placeholder="https://www.youtube.com" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <button class="btn btn-default" id="submit_profile" type="submit">Update profile</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="card">
                                    <div class="card-header">Password Change</div>
                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    <br>
                                    @endif
                                    <div class="card-body">
                                        <form id="passwordupdate" action="updatepassword" class="row" method="POST">
                                            {{ csrf_field() }}
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="currentpassword">Current Password</label>
                                                    <input id="currentpassword" name="currentpassword" type="password" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="newpassword">New Password</label>
                                                    <input id="newpassword" name="newpassword" type="password" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="retypepassword">Retype Password</label>
                                                    <input id="retypepassword" name="retypepassword" type="password" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <button class="btn btn-default" type="submit">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div class="card">
                                    <div class="card-header">Email Notifications</div>
                                    <div class="">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">Email Notifications List #1
                                                <div class="switch-notification">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">Email Notifications List #2
                                                <div class="switch-notification">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">Email Notifications List #3
                                                <div class="switch-notification">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider"></span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="card">
                                    <div class="card-header">Account Delete</div>
                                    <div class="card-body">
                                        <p>In the fields below, enter your new password.</p>
                                        <form>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Delete my account and data listing also.</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">Delete my account only.</label>
                                            </div>
                                            <button class="btn btn-primary mt30" type="submit">Delete My Account</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/menumaker.min.js') }}"></script>
    <script src="{{ asset('js/custom-script.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/offcanvas.js') }}"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/menumaker.min.js') }}"></script>
    <script src="{{ asset('js/custom-script.js') }}"></script>
    <script>
    $(document).ready(function() {
        $.uploadPreview({
            input_field: "#image-upload", // Default: .image-upload
            preview_box: "#image-preview", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "Choose File", // Default: Choose File
            label_selected: "Change File", // Default: Change File
            no_label: false // Default: false
        });
    });
    </script>
    <script src="{{ asset('js/jquery.uploadPreview.js') }}"></script>
    <script src="{{ asset('js/summernote-bs4.js') }}"></script>
    <script src="{{ asset('js/offcanvas.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
</body>

</html>