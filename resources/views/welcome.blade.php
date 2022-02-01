@extends('layouts.app')
@section('content')
<main>
    <!-- hero-section -->
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12">
                    <!-- search-block -->
                    <div class="">
                        <!-- <div class="text-center search-head">
                            <h1 class="search-head-title ">Find Local Wedding Vendors</h1>
                            <p class="d-none d-xl-block d-lg-block d-sm-block text-white">Browse the best wedding vendors in your area — from venues and photographers, to wedding planners, caterers, florists and more.</p>
                        </div> -->
                        <!-- /.search-block -->
                        <!-- search-form -->
                        <div class="search-form">
                            <form action="search-view" action="POST" class="form-row">
                                <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- select -->
                                    <select class="wide" name="category">
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
                                    <select class="wide" name="city">
                                        <option value="Karachi" data-display="Karachi">Karachi</option>
                                        <option value="Lahore">Lahore</option>
                                        <option value="Islamabad">Islamabad</option>
                                        <option value="Rawalpindi">Rawalpindi</option>
                                        <option value="Hyderabad">Hyderabad</option>
                                    </select>
                                </div>
                                <!-- button -->
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <button class="btn btn-primary btn-block" type="submit">Search</button>
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
    <!-- /.feature-section -->
    <div class="space-medium pdb0 bg-light">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="mb10r">Hot available services</h2>
                        <p>The best hot listing services available on our site.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <!-- <div class="venue-thumbnail-carousel">
                <div class="owl-carousel owl-theme owl-venue-thumb-second">
                    <div class="item">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="vendor-thumbnail">
                                <div class="vendor-img zoomimg">
                                    <a href="#"><img style="width:400px; height:250px;" src="{{ asset('images/hero-image.jpg') }}" alt="" class="img-fluid"></a>
                                    <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                                </div>
                                <div class="vendor-content">
                                    <h2 class="vendor-title"><a href="#" class="title">title</a></h2>
                                    <p class="vendor-address">city , country</p>
                                </div>
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
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        @foreach($FeaturedListing as $FeaturedListings)
        <div class="container container-a bg-white">
            <div class="img">
                <img class="img1" src="listing-image/{{$FeaturedListings->hero_image}}" alt="">
                <img class="img2" src="listing-image/{{$FeaturedListings->image1}}" alt="">
                <img class="img3" src="listing-image/{{$FeaturedListings->image2}}" alt="">
                <img class="img4" src="listing-image/{{$FeaturedListings->image3}}" alt="">
            </div>
            <div class="text">
                <div class="title">
                    <a href="list-detail/{{$FeaturedListings->id}}">{{ $FeaturedListings->title }}</a>
                </div>
                <div class="desc">
                    <p>{{ $FeaturedListings->description }}</p>
                </div>
            </div>
            <div class="button">
                <p class="">Hot</p>
            </div>
        </div>
        @endforeach
        <div class="container text-center py-4">
            <a href="all-listing">View All</a>
        </div>
    </div>
    <!-- /.feature-section -->
    <div class="space-medium pdb0 bg-light">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="mb10r">Other available services</h2>
                        <p>The best listing services available on our site.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
        </div>
        @foreach($NonFeaturedListing as $NonFeaturedListings)
        <div class="container container-a bg-white">
            <div class="img">
                <img class="img1" src="listing-image/{{$NonFeaturedListings->hero_image}}" alt="">
                <img class="img2" src="listing-image/{{$NonFeaturedListings->image1}}" alt="">
                <img class="img3" src="listing-image/{{$NonFeaturedListings->image2}}" alt="">
                <img class="img4" src="listing-image/{{$NonFeaturedListings->image3}}" alt="">
            </div>
            <div class="text">
                <div class="title">
                    <a href="list-detail/{{$NonFeaturedListings->id}}">{{ $NonFeaturedListings->title }}</a>
                </div>
                <div class="desc">
                    <p>{{ $NonFeaturedListings->description }}</p>
                </div>
            </div>
            <div class="button blue">
                <p class="">Normal</p>
            </div>
        </div>
        @endforeach
        <div class="container text-center py-4">
            <a href="all-listing">View All</a>
        </div>
    </div>
    <!-- Testimonial-section -->
    <div class="space-medium bg-light">
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
@endsection