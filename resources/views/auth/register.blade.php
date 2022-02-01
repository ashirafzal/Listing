@extends('layouts.app')
@section('content')
<main>
    <div class="">
        <!-- hero-section -->
        <div class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="my-4 offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12">
                        <!-- search-block -->
                        <div class="border my-4 p-4 bg-white">
                            <div class="text-center search-head">
                                <h2 class="blue-text">Find Local Wedding Vendors</h2>
                                <p class="d-none d-xl-block d-lg-block d-sm-block">Browse the best wedding vendors in your area — from venues and photographers, to wedding planners, caterers, florists and more by registering yourself.</p>
                            </div>
                            <!-- /.search-block -->
                            <!-- search-form -->
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="font-weight-bold">{{ __('Name') }}</label>
                                </div>
                                <div class="form-group">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="font-weight-bold">{{ __('E-Mail Address') }}</label>
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="font-weight-bold">{{ __('Password') }}</label>
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm" class="font-weight-bold">{{ __('Confirm Password') }}</label>
                                </div>
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                            </form>
                            <!-- /.search-form -->
                            <br />
                            <!-- Sign in text -->
                            <div class="text-center search-head">
                                <p class="d-none d-xl-block d-lg-block d-sm-block">Already have an account ?
                                    <a class="link" href="login"> Sign in</a>
                                </p>
                            </div>
                            <!-- /. Sign in text -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.hero-section -->
    </div>
</main>
@endsection