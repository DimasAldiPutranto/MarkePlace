@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center ">
                    <h3 class="fs-5 fw-semibold ">
                        Sign In
                    </h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="grid justify-content-center mb-2 text-center" >
                                <button type="submit" class="btn btn-primary w-50">
                                    Login
                                </button>
                                
                                
                        </div>

                        <div class="justify-content-center text-center">
                            <p class="text-center fs-5 fw-semibold">
                                Login with  
                            </->
                            <div class="flex d-flex gap-2 justify-content-center ">
                                
                                <a href="{{ route('socialite.redirect', 'google')}}" class="justify-content-center rounded-circle border border-2 p-2">
                                    <svg width="24" height="24" viewBox="0 0 62 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="60" height="50" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.3394 24C13.3394 22.4757 13.6664 21.0144 14.25 19.6437L4.03447 13.6042C2.04351 16.7338 0.921783 20.2602 0.921783 24C0.921783 27.7365 2.04213 31.2608 4.03033 34.3882L14.2404 28.337C13.6623 26.9728 13.3394 25.5168 13.3394 24Z" fill="#FBBC05"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M31.276 10.1333C35.5531 10.1333 39.4164 11.3067 42.4518 13.2267L51.2821 6.39998C45.9011 2.77332 39.0025 0.533318 31.276 0.533318C19.2805 0.533318 8.97116 5.84425 4.03447 13.6043L14.25 19.6437C16.6039 14.112 23.3135 10.1333 31.276 10.1333Z" fill="#EB4335"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M31.276 37.8666C23.3135 37.8666 16.6039 33.888 14.25 28.3562L4.03447 34.3946C8.97116 42.1557 19.2805 47.4666 31.276 47.4666C38.6796 47.4666 45.748 45.4314 51.0531 41.6181L41.3563 35.8144C38.6203 37.1488 35.1751 37.8666 31.276 37.8666Z" fill="#34A853"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M60.2504 24C60.2504 22.6133 59.9744 21.12 59.5605 19.7333H31.276V28.8H47.5568C46.7428 31.8912 44.5269 34.2677 41.3563 35.8144L51.0531 41.6181C56.6258 37.6138 60.2504 31.649 60.2504 24Z" fill="#4285F4"/>
                                        </svg>
                                </a>
                                
                                <a href="{{ route('socialite.redirect', 'facebook')}}" class="justify-content-center rounded-circle border border-2 p-2">
                                    <svg width="24" height="24" viewBox="0 0 62 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="60" height="50" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.3394 24C13.3394 22.4757 13.6664 21.0144 14.25 19.6437L4.03447 13.6042C2.04351 16.7338 0.921783 20.2602 0.921783 24C0.921783 27.7365 2.04213 31.2608 4.03033 34.3882L14.2404 28.337C13.6623 26.9728 13.3394 25.5168 13.3394 24Z" fill="#FBBC05"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M31.276 10.1333C35.5531 10.1333 39.4164 11.3067 42.4518 13.2267L51.2821 6.39998C45.9011 2.77332 39.0025 0.533318 31.276 0.533318C19.2805 0.533318 8.97116 5.84425 4.03447 13.6043L14.25 19.6437C16.6039 14.112 23.3135 10.1333 31.276 10.1333Z" fill="#EB4335"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M31.276 37.8666C23.3135 37.8666 16.6039 33.888 14.25 28.3562L4.03447 34.3946C8.97116 42.1557 19.2805 47.4666 31.276 47.4666C38.6796 47.4666 45.748 45.4314 51.0531 41.6181L41.3563 35.8144C38.6203 37.1488 35.1751 37.8666 31.276 37.8666Z" fill="#34A853"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M60.2504 24C60.2504 22.6133 59.9744 21.12 59.5605 19.7333H31.276V28.8H47.5568C46.7428 31.8912 44.5269 34.2677 41.3563 35.8144L51.0531 41.6181C56.6258 37.6138 60.2504 31.649 60.2504 24Z" fill="#4285F4"/>
                                        </svg>
                                </a>
                            </div>
                          
                        </div>

                        
                        <div class="text-center">
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        </div>
                        <div class="row text-center">
                            <p>Do you have an account? <a href="{{ route('register') }}" class="btn btn-link">Register</a></p> 
                            
                        </div>
                   
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
