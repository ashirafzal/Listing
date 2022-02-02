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
        <a class="btn btn-primary" href="/create-user">Create User</a>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card request-list-table table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="color: #00a591; font-weight:500;">ID</th>
                            <th style="color: #00a591; font-weight:500;">Name</th>
                            <th style="color: #00a591; font-weight:500;">Email</th>
                            <th style="color: #00a591; font-weight:500;">Number</th>
                            <th style="color: #00a591; font-weight:500;">Role</th>
                            <th style="color: #00a591; font-weight:500;">Blocked</th>
                            <th style="color: #00a591; font-weight:500;">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($TotalUser as $TotalUsers)
                        <tr>
                            <td class="requester-name" style="color: #00a591; font-weight:500;">{{ $TotalUsers->id }}</td>
                            <td class="requester-name">{{ $TotalUsers->name }}</td>
                            <td class="requester-name">{{ $TotalUsers->email }}</td>
                            <td class="requester-name">{{ $TotalUsers->phone_number }}</td>
                            @if($TotalUsers->role == 1)
                            <td class="requester-name" style="color: #00a591; font-weight:500;">Users</td>
                            @elseif($TotalUsers->role == 2)
                            <td class="requester-name" style="color: #00a591; font-weight:500;">Vendor</td>
                            @elseif($TotalUsers->role == 3)
                            <td class="requester-name" style="color: #00a591; font-weight:500;">Admin</td>
                            @else
                            <td class="requester-name" style="color: #00a591; font-weight:500;">Super Admin</td>
                            @endif
                            @if(!$TotalUsers->blocked == 0)
                            <td class="requester-name text-center" style="color: green; font-weight:500;"><i class="fa fa-check" aria-hidden="true"></i></td>
                            @else
                            <td class="requester-name text-center" style="color: red; font-weight:500;"><i class="fa fa-ban" aria-hidden="true"></i></td>
                            @endif
                            <td class="requester-phone">{{ $TotalUsers->created_at->diffForHumans() }}</td>
                            <td class="requester-action"><a href="user-show/{{ $TotalUsers->id }}" class=""><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                            <td class="requester-action"><a href="user-delete/{{ $TotalUsers->id }}" class=""><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        {{ $TotalUser->links() }}
    </div>
</div>
@endsection