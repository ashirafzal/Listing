@extends('layouts.dashboard')
@section('content')
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
                    <!-- <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Email Notifications</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Delete Account</a> -->
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                        <div class="card">
                            <div class="card-header">Profile</div>
                            <div class="card-body">
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
                                <form action="edit" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Form Name -->
                                    <div class="profile-upload-img">
                                        <div class="row">
                                            @if($user->image)
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div id="image-preview">
                                                    <img src="user-image/{{ $user->image }}" alt="" class="rounded-circle">
                                                </div>
                                                <input type="file" name="image" id="image" class="upload-profile-input">
                                            </div>
                                            @else
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div id="image-preview">
                                                    <img src="#" alt="" class="rounded-circle">
                                                </div>
                                                <input type="file" name="image" id="image" class="upload-profile-input">
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="personal-form-info">
                                        <div class="row">
                                            <!-- Text input-->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="vendorname">User Name</label>
                                                    <input name="name" type="text" placeholder="" value="{{ $user->name }}" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="email">Email</label>
                                                    <input name="email" type="email" placeholder="" value="{{ $user->email }}" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="phone">Phone</label>
                                                    <input name="phone" type="text" placeholder="" value="{{ $user->phone_number }}" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="summernote">Description</label>
                                                    <textarea class="form-control" name="description" rows="6" placeholder="Write description of your yourself">{{ $user->description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="social-form-info mb-0">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <button class="btn btn-default" type="submit">Update profile</button>
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="card">
                            <div class="card-header">Password Change</div>
                            <div class="card-body">
                                <form class="row" method="POST" action="update-password">
                                    @csrf
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="currentpassword">Current Password</label>
                                            <input name="currentpassword" type="password" placeholder="" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="newpassword">New Password</label>
                                            <input name="newpassword" type="password" placeholder="" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="retypepassword">Retype Password</label>
                                            <input name="retypepassword" type="password" placeholder="" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <button class="btn btn-default" type="submit">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
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
                </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection