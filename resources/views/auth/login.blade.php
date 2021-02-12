@extends('layouts.app')

@section('content')
<div class="">
    <!-- hero-section -->
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12">
                    <!-- search-block -->
                    <div class="">
                        <div class="text-center search-head">
                            <h1 class="search-head-title">Find Local Wedding Vendors</h1>
                            <p class="d-none d-xl-block d-lg-block d-sm-block text-white">Browse the best wedding vendors in your area — from venues and photographers, to wedding planners, caterers, florists and more by registering yourself.</p>
                        </div>
                        <!-- /.search-block -->
                        <!-- search-form -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="font-weight-bold text-white">{{ __('E-Mail Address') }}</label>
                            </div>
                            <div class="form-group">                              
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="font-weight-bold text-white">{{ __('Password') }}</label>
                            </div>                            
                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-white" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                    <button type="submit" class="btn btn-danger btn-block">
                                        {{ __('Login') }}
                                    </button>
                            </div>
                        </form>
                        <!-- /.search-form -->
                        <br/>
                        <!-- Sign in text -->
                        <div class="text-center search-head">
                            <p class="d-none d-xl-block d-lg-block d-sm-block text-white">
                                <a class="text-white" href="/register">Don't have an account ? Register Yourelf</a>
                                <br/>
                                <a class="text-white" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
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
@endsection
