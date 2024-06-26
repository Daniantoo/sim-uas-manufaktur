@extends('layouts.main', ['layout' => 'auth'])

@section('title', 'Silahkan masuk')

@section('main-content')
    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
        @csrf

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" value="{{ old('email') }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" tabindex="1" required autofocus>
        </div>

        <div class="form-group">
            <div class="d-block">
                <label for="password" class="control-label">Password</label>
                <div class="float-right">
                    <a href="{{ action('App\Http\Controllers\AuthController@forgotPassword') }}" class="text-small">
                        {{ __('auth.Forgot Password') }} ?
                    </a>
                </div>
            </div>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" tabindex="2" required>
        </div>

        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                <label class="custom-control-label" for="remember-me">Remember Me</label>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                Masuk
            </button>
        </div>
    </form>

@endsection
