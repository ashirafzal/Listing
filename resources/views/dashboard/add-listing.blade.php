@extends('layouts.normal_dashboard')
@section('content')
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
                                        <option value="Venue">Venue</option>
                                        <option value="Florist">Florist</option>
                                        <option value="Cake">Cake</option>
                                        <option value="Photographer">Photographer</option>
                                        <option value="Catering">Catering</option>
                                        <option value="Dress">Dress</option>
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
                                        <option value="Karachi">Karachi</option>
                                        <option value="Lahore">Lahore</option>
                                        <option value="Islamabad">Islamabad</option>
                                        <option value="Rawalpindi">Rawalpindi</option>
                                        <option value="Hyderabad">Hyderabad</option>
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
@endsection