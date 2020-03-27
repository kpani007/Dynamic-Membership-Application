@extends('layouts.app')
@section('content')

                        <div class="header bg-blue">
                            <h4 class="panel-title">{{ __('Register') }}</h4>
                        </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input id="name" type="text" class="form-control" value="{{ old('name') }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                                <label class="form-label">Your Name</label>
                            </div>
                            @error('name')
                            <div class="help-info form-control @error('name') is-invalid @enderror invalid-feedback" role="alert">{{$message}}</div>
                            @enderror
                        </div>
                        <br/>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input id="name_english" type="text" class="form-control" value="{{ old('name_english') }}" name="name_english" value="{{ old('name_english') }}" required autocomplete="name_english" autofocus />
                                <label class="form-label">Name Of Institution In English</label>
                            </div>
                            @error('name_english')
                            <div class="help-info form-control @error('name_english') is-invalid @enderror invalid-feedback" role="alert">{{$message}}</div>
                            @enderror
                        </div>
                         <br/>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input id="name_other" type="text" class="form-control" value="{{ old('name_other') }}" name="name_other" value="{{ old('name_other') }}" required autocomplete="name_other" autofocus />
                                <label class="form-label">Name Of Institution In  Native Language</label>
                            </div>
                            @error('name_other')
                            <div class="help-info form-control @error('name_other') is-invalid @enderror invalid-feedback" role="alert">{{$message}}</div>
                            @enderror
                        </div>
                        <br/>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input id="email" type="email" class="form-control" value="{{ old('email') }}" name="email" required autocomplete="email" />
                                <label class="form-label">Your E-Mail Address</label>
                            </div>
                            @error('email')
                            <div class="help-info form-control @error('email') is-invalid @enderror" role="alert">{{$message}}</div>
                            @enderror
                        </div>
                        <br/>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input id="phone" type="text" class="form-control" value="{{ old('phone') }}" name="phone" required autocomplete="phone" />
                                <label class="form-label">Your Phone Number</label>
                            </div>
                            @error('phone')
                            <div class="help-info form-control @error('phone') is-invalid @enderror" role="alert">{{$message}}</div>
                            @enderror
                        </div>
                        <br/>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input id="position" type="text" class="form-control" value="{{ old('position') }}" name="position" required autocomplete="position" />
                                <label class="form-label">Your Position</label>
                            </div>
                            @error('position')
                            <div class="help-info form-control @error('position') is-invalid @enderror" role="alert">{{$message}}</div>
                            @enderror
                        </div>
                        <br/>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" />
                                <label class="form-label">Password</label>
                            </div>
                            @error('password')
                            <div class="help-info form-control @error('password') is-invalid @enderror invalid-feedback" role="alert">{{$message}}</div>
                            @enderror
                        </div>
                        <br/>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                                <label class="form-label">Confirm Password</label>
                            </div>
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="terms">By clicking register, you agree to our <a href="{{url('/terms-and-conditions')}}" target="_blank">terms and conditions</a>.</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                        <div class="form-group m-t-25 m-b--5 align-center">
                            <label for="terms">Already have an account? Click <a href="{{ route('login') }}">here to login</a>.</label>
                        </div>
                    </form>
               
@endsection