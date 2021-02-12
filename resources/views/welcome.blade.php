@extends('layouts.app')

@section('content')
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
                                    <a href="#"><img style="width:400px; height:250px;" src="{{ asset('images/hero-image.jpg') }}" alt=""  class="img-fluid"></a>
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
                                        <span class="vendor-text">Start From</span></div>
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
                                        <span class="rating-count vendor-text">(20)</span></div>
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
@endsection