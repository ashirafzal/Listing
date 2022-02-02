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
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="dashboard-page-header">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h3 class="dashboard-page-title">Request List</h3>
                            <p>Check your request quote.</p>
                        </div>
                    </div>
                </div>
                <div class="card request-list-table table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="color: #00a591; font-weight:500;">Name</th>
                                <th style="color: #00a591; font-weight:500;">Email</th>
                                <th style="color: #00a591; font-weight:500;">Phone</th>
                                <th style="color: #00a591; font-weight:500;">Comment</th>
                                <th style="color: #00a591; font-weight:500;">Submitted</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($RequestQuote as $RequestQuotes)
                            <tr>
                                <td class="requester-name">{{ $RequestQuotes->name }}</td>
                                <td class="wedding-date">{{ $RequestQuotes->email }}</td>
                                <td class="requester-id">{{ $RequestQuotes->phone }}</td>
                                <td class="requester-phone">{{ $RequestQuotes->comment }}</td>
                                <td class="requester-phone">{{ $RequestQuotes->created_at->diffForHumans() }}</td>
                                <td class="requester-action"><a href="request-quote-delete/{{ $RequestQuotes->id }}" class="btn btn-primary">delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center">{{ $RequestQuote->links() }}</div>
</div>
@endsection