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
    <div class="container-fluid">
        <a class="btn btn-primary" href="create-list">Create Listing</a>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card request-list-table table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="color: #00a591; font-weight:500;">ID</th>
                            <th style="color: #00a591; font-weight:500;">Title</th>
                            <th style="color: #00a591; font-weight:500;">Vendor Name</th>
                            <th style="color: #00a591; font-weight:500;">Vendor Email</th>
                            <th style="color: #00a591; font-weight:500;">Category</th>
                            <th style="color: #00a591; font-weight:500;">Blocked</th>
                            <th style="color: #00a591; font-weight:500;">City</th>
                            <th style="color: #00a591; font-weight:500;">Featured</th>
                            <th style="color: #00a591; font-weight:500;">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($TotalListing as $TotalListings)
                        <tr>
                            <td class="requester-name" style="color: #00a591; font-weight:500;">{{ $TotalListings->id }}</td>
                            <td class="requester-name">{{ $TotalListings->title }}</td>
                            <td class="requester-name">{{ $TotalListings->vendor_name }}</td>
                            <td class="requester-name">{{ $TotalListings->vendor_email }}</td>
                            <td class="wedding-date">{{ $TotalListings->category }}</td>
                            @if($TotalListings->status == 0)
                            <td class="requester-name text-center" style="color: green; font-weight:500;"><i class="fa fa-check" aria-hidden="true"></i></td>
                            @else
                            <td class="requester-name text-center" style="color: red; font-weight:500;"><i class="fa fa-ban" aria-hidden="true"></i></td>
                            @endif
                            <td class="requester-id">{{ $TotalListings->city }}</td>
                            @if(!$TotalListings->featured == 0)
                            <td class="requester-name text-center" style="color: green; font-weight:500;"><i class="fa fa-check" aria-hidden="true"></i></td>
                            @else
                            <td class="requester-name text-center" style="color: red; font-weight:500;"><i class="fa fa-ban" aria-hidden="true"></i></td>
                            @endif
                            <td class="requester-phone">{{ $TotalListings->created_at->diffForHumans() }}</td>
                            <td class="requester-action"><a href="listing-show/{{ $TotalListings->id }}" class=""><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                            <td class="requester-action"><a href="list-delete/{{ $TotalListings->id }}" class=""><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        {{ $TotalListing->links() }}
    </div>
</div>
@endsection 