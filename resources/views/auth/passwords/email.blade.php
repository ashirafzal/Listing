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
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <h1 class="search-head-title">{{ __('Reset Password') }}</h1>
                        </div>
                        <!-- /.search-block -->
                        <!-- search-form -->
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email" class="form-group">{{ __('E-Mail Address') }}</label>

                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-danger btn-block">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </form>
                        <!-- /.search-form -->
                        <br />
                        <!-- Sign in text -->
                        <div class="text-center search-head">
                            <p class="d-none d-xl-block d-lg-block d-sm-block text-white">
                                <a class="text-white" href="login"> Back to sign in</a>
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
