@extends('layouts.app')
@section('content')
<main>
    <div class="">
        <!-- hero-section -->
        <div class="py-4 bg-light">
            <div class="container py-4">
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
                    <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12">
                        <form class="border p-4 bg-white" action="contact-submit" method="POST">
                            @csrf
                            <!-- form -->
                            <div class="contact-form">
                                <div class="row">

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                                        <!-- Text input-->
                                        <div class="form-group service-form-group">
                                            <label class="control-label sr-only" for="fname"></label>
                                            <input id="fname" type="text" name="firstname" placeholder="First Name" class="form-control" required="">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ">
                                        <div class="form-group service-form-group">
                                            <label class="control-label sr-only" for="lname"></label>
                                            <input id="lname" type="text" name="lastname" placeholder="Last Name" class="form-control" required="">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <div class="form-group service-form-group">
                                            <label class="control-label sr-only" for="email"></label>
                                            <input id="email" type="email" name="email" placeholder="Email" class="form-control" required="">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <div class="form-group service-form-group">
                                            <label class="control-label sr-only" for="phone"></label>
                                            <input id="phone" type="text" name="phone" placeholder="Phone" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="message"></label>
                                            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Messages"></textarea>
                                        </div>
                                    </div>
                                    <!--button -->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <button type="submit" class="btn btn-primary">submit</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.form -->
                        </form>
                        <!-- /.search-form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.hero-section -->
    </div>
</main>
@endsection