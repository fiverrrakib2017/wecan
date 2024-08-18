@extends('layouts.frontend.auth')
@section('title', 'Login')
@section('content')
<div class="container" id="container">
    {{-- <div class="form-container sign-up">
        <form>
            <h1>Create Account</h1>
            <div class="social-icons">
                <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <span>or use your email for registeration</span>
            <div class="name" style="display: flex">
                <input type="text" style="margin-right: 5px" placeholder="{{ __('First Name') }}">
                <input type="text" placeholder="{{ __('Last Name') }}">
            </div>
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Password">
            <button>Sign Up</button>
        </form>
    </div> --}}
    <div class="form-container sign-in">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 style="text-align: center; font-size: 25px">{{ __('Log in to your account') }}</h1>
            <div class="social-icons">
                <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <span>use your email and password</span>

            <input type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                required autocomplete="email" autofocus placeholder="{{ __('Email Address')}}">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input type="password" class="@error('password') is-invalid @enderror" name="password" required
                autocomplete="current-password" placeholder="{{ __('Password')}}">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
            <p style="margin: 5px 0">Don"t have an account?<a href="{{ route('register') }}" style="color: #b83375">Sign Up</a>
            </p>
        </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-right">
                <h1>Hello, Friend!</h1>
                <p>Register with your personal details to use all of site features</p>
            </div>
        </div>
    </div>
</div>
@endsection
