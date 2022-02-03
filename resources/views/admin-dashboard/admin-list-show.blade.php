@extends('layouts.dashboard')
@section('content')
<div class="dashboard-content">
    <div class="container-fluid">
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
    </div>
    <br>
    <!-- <div class="row px-4">
    <a class="bg-white px-2 py-1 mx-2" href="#"><i class="fas fa-edit"></i></a>
    <a class="bg-white px-2 py-1 mx-2" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
    </div> -->
    <br>
    <div class="row">
        <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12">
            <div class="row float-right px-4 py-2">
                <a class="bg-white px-2 py-1 mx-2" href="/admin-list-show/{{$Listing->id}}"><i class="fas fa-edit"></i></a>
                <a class="bg-white px-2 py-1 mx-2" href="/list-delete/{{$Listing->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </div>
            <br><br>
            <div class="border p-4 bg-white text-dark">
                <div class="contact-form">
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">ID</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p>{{$Listing->id}}</p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Title</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="blue-text font-weight-bold">{{$Listing->title}}</p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Category</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="blue-text font-weight-bold">{{$Listing->category}}</p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">City</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p>{{$Listing->city}}</p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Country</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p>{{$Listing->country}}</p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Zipcode</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p>{{$Listing->zipcode}}</p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Description</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p>{{$Listing->description}}</p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Address</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p>{{$Listing->address}}</p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Latitude</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p>{{$Listing->latitude}}</p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Longitude</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p>{{$Listing->longitude}}</p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Hero Image</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <img class="list-image" src="../listing-image/{{$Listing->hero_image}}" alt="">
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Image 1</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <img class="list-image" src="../listing-image/{{$Listing->image1}}" alt="">
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Image 2</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <img class="list-image" src="../listing-image/{{$Listing->image2}}" alt="">
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Image 3</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <img class="list-image" src="../listing-image/{{$Listing->image3}}" alt="">
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Facebook</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p>{{$Listing->facebook}}</p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Twitter</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p>{{$Listing->twitter}}</p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Instagram</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p>{{$Listing->instagram}}</p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Youtube</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p>{{$Listing->youtube}}</p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Featured</p>
                        </div>
                        @if($Listing->featured == 0)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p style="color: red; font-weight:500;"><i class="fa fa-ban" aria-hidden="true"></i></p>
                        </div>
                        @else
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p style="color: green; font-weight:500;"><i class="fa fa-check" aria-hidden="true"></i></p>
                        </div>
                        @endif
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Status</p>
                        </div>
                        @if($Listing->status == 1)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p style="color: red; font-weight:500;"><i class="fa fa-ban" aria-hidden="true"></i></p>
                        </div>
                        @else
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p style="color: green; font-weight:500;"><i class="fa fa-check" aria-hidden="true"></i></p>
                        </div>
                        @endif
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Vendor Name</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="blue-text font-weight-bold">{{$Listing->vendor_name}}</p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Vendor Email</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="blue-text font-weight-bold">{{$Listing->vendor_email}}</p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Vendor Contact</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p>{{$Listing->vendor_phone_number}}</p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Vendor Status</p>
                        </div>
                        @if($Listing->vendor_status == 1)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p style="color: red; font-weight:500;"><i class="fa fa-ban" aria-hidden="true"></i></p>
                        </div>
                        @else
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p style="color: green; font-weight:500;"><i class="fa fa-check" aria-hidden="true"></i></p>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="row py-3 border-bottom">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <p class="border-right">Created At</p>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <p>{{$Listing->created_at}}</p>
                    </div>
                </div>
                <div class="row py-3 border-bottom">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <p class="border-right">Updated At</p>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <p>{{$Listing->updated_at}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection