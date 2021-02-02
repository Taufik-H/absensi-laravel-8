@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{asset('css/custom.css')}}">

<div class="container mt-5">
    <div class="row content">
        <div class="col-sm-6  m-0">
            <img src="{{asset('image/login-image.jpg')}}" alt="image" class="img-fluid float-left">
        </div>
        <div class="col-sm-6 mt-5">
            <h3 class="signin-text mb-2 "> <span>{{ __('Login') }}</span></h3>
            <!-- form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- email -->
                <div class="form-group">
                    <label for="email" name="email" class="text-secondary">{{ __('E-Mail Address') }}</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!-- end-email -->

                <!-- password -->
                <div class="form-group">
                    <label for="password" name="password" class="text-secondary">{{ __('Password') }}</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!-- end-password -->

                <!-- checkbox -->
                <div class=" form-group form-check">
                    <input type="checkbox" name="checkbox" class="form-check-input" id="checkbox" {{ old('remember') ? 'checked' : '' }}>
                    <label for="checkbox" class="form-check-label text-secondary">{{ __('Remember Me') }}</label>
                </div>
                <!-- end-checkbox -->
                <button class="btn  btn-outline-primary btn-md" type="submit">{{ __('Login') }}</button>

                <a class="btn btn-link btn-sm mt-4 ml-4" href="{{ __('register') }}">Belum Punya Akun?</a>
                @if (Route::has('password.request'))
                <a class="btn btn-link btn-sm mt-4 float-right" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection
