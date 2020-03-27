@extends('layouts.app')

@section('content')
<div class="header bg-blue">
    <h4 class="panel-title">{{ __('Verify Your Email Address') }}</h4>
</div>
<div class="text-left">
    <div class="card-body">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif
            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.        
    </div>
</div>
@endsection
