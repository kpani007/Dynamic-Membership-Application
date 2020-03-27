@extends('layouts.app')
@section('content')
<div class="header bg-blue">
    <h4 class="panel-title">{{ __('Login') }}</h4>
</div>
<div class="text-left">
<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group form-float">
            <div class="form-line">
                <input id="email" type="email" class="form-control" value="{{ old('email') }}" name="email" required autocomplete="email" />
                <label class="form-label">E-Mail Address</label>
            </div>
            @error('email')
            <div class="help-info form-control @error('email') is-invalid @enderror" role="alert">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group form-float">
            <div class="form-line">
                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" />
                <label class="form-label">Password</label>
            </div>
            @error('password')
            <div class="help-info form-control @error('password') is-invalid @enderror invalid-feedback" role="alert">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group row">
            <div class="input-group input-group-lg">
                <div class="form-check ">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                </div>
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                @endif
            </div>
        </div>
        <div class="form-group m-t-25 m-b--5 align-center">
            <label for="terms">Don't have an account? Click <a href="{{ route('register') }}">here to sign-up</a>.</label>
        </div>
    </form>
</div>
</div>
@endsection
