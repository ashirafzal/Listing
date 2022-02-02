@extends('layouts.normal_dashboard')
@section('content')
<div class="dashboard-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">Your Listed Items</h3>
                            <p>Lists present multiple line items vertically as a single continuous element.</p>
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
                                            <a href="list-detail/{{ $listing->id }}"><img src="listing-image/{{ $listing->hero_image }}" alt="" class="img-fluid listing-img"></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-5 col-md-6 col-sm-12 col-12 ">
                                        <div class="dashboard-list-content">
                                            <h3 class="mb0"><a href="list-detail/{{ $listing->id }}" class="title">{{ $listing->title }}</a></h3>
                                            <p>{{ $listing->description }}</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="dashboard-list-btn">
                                            <a href="edit-listing/{{ $listing->id }}" class="btn btn-primary">edit</a>
                                            <a href="delete-list/{{ $listing->id }}" class="btn btn-danger ">delete</a>
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
@endsection 