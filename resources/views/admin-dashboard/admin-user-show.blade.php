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
                <a class="bg-white px-2 py-1 mx-2" href="/admin-user-edit-show/{{$Users->id}}"><i class="fas fa-edit"></i></a>
                <a class="bg-white px-2 py-1 mx-2" href="/user-delete/{{$Users->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </div>
            <br><br>
            <div class="border p-4 bg-white text-dark">
                <div class="contact-form">
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">ID</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p>{{$Users->id}}</p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Name</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="blue-text font-weight-bold">{{$Users->name}}</p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Email</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="blue-text font-weight-bold">{{$Users->email}}</p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Number</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p>{{$Users->phone_number}}</p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">User Image</p>
                        </div>
                        @if($Users->image)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <img class="user-list-image" src="../user-image/{{$Users->image}}" alt="">
                        </div>
                        @else
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <img class="user-list-image" src="../user-image/grey.jpg" alt="">
                        </div>
                        @endif
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="border-right">Status</p>
                        </div>
                        @if($Users->status == 1)
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
                            <p class="border-right">Role</p>
                        </div>
                        @if($Users->role == 1)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="blue-text font-weight-bold">User</p>
                        </div>
                        @elseif($Users->role == 2)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="blue-text font-weight-bold">Vendor</p>
                        </div>
                        @elseif($Users->role == 3)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="blue-text font-weight-bold">Admin</p>
                        </div>
                        @else
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="blue-text font-weight-bold">Super Admin</p>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="row py-3 border-bottom">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <p class="border-right">Created At</p>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <p>{{$Users->created_at}}</p>
                    </div>
                </div>
                <div class="row py-3 border-bottom">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <p class="border-right">Updated At</p>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <p>{{$Users->updated_at}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection