@extends('layouts.normal_dashboard')
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
        <div class="row">
            @if(!$vendor) 
                <div class="row">
                    <a href="become-a-vendor" class="btn btn-primary">Be a vendor</a>
                </div>
            @endif
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-10 col-md-9 col-sm-12 col-12">
                <div class="dashboard-page-header">

                    <h3 class="dashboard-page-title">Hi, {{ $user->name }}.</h3>
                    <p class="d-block">Here’s what’s happening today.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card card-summary text-primary">
                    <div class="card-body">
                        <div class="float-left">
                            <div class="summary-count">{{$ListingCount}}</div>
                            <p>Total Listed Item</p>
                        </div>
                        <div class="summary-icon"><i class="icon-051-wedding-arch text-primary"></i></div>

                    </div>
                    <div class="card-footer text-center"><a href="/listing">View All</a></div>

                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card card-summary text-primary">
                    <div class="card-body">
                        <div class="float-left">
                            <div class="summary-count">{{$ReviewsCount}}</div>
                            <p>Request Quote</p>
                        </div>
                        <div class="summary-icon"><i class="icon-021-love-1 text-primary"></i></div>
                    </div>
                    <div class="card-footer text-center"><a href="/request-quote">View All</a></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card card-summary text-primary">
                    <div class="card-body">
                        <div class="float-left">
                            <div class="summary-count">{{$RequestQuotesCount}}</div>
                            <p>Your Reviews</p>
                        </div>
                        <div class="summary-icon"><i class="icon-004-chat text-primary"></i></div>
                    </div>
                    <div class="card-footer text-center"><a href="/reviews">View All</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 