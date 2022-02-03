@extends('layouts.normal_dashboard')
@section('content')
<div class="dashboard-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="dashboard-page-header">
                    <h3 class="dashboard-page-title">Your Wish Lists</h3>
                </div>
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
        </div>
        <div class="dashboard-vendor-list">
            <ul class="list-unstyled">
                @foreach($wishlists as $wishlist)
                    <li>
                        <div class="dashboard-list-block">
                            <div class="row">
                                <div class="col-xl-2 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="dashboard-list-img">
                                        <a href="list-detail/{{ $wishlist->listings->id }}"><img src="listing-image/{{ $wishlist->listings->hero_image }}" alt="" class="img-fluid listing-img"></a>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-5 col-md-6 col-sm-12 col-12 ">
                                    <div class="dashboard-list-content">
                                        <h3 class="mb0"><a href="list-detail/{{ $wishlist->listings->id }}" class="title">{{ $wishlist->listings->title }}</a></h3>
                                        <p>{{ $wishlist->listings->description }}</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="dashboard-list-btn">
                                        <a href="delete-wishlist/{{ $wishlist->id }}" class="btn btn-outline-primary"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="d-flex justify-content-center">
            {{ $wishlists->links() }}
        </div>
    </div>
</div>
@endsection 