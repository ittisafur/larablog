@extends('user.app')

@section('bgImg', asset('user/img/contact-bg.jpg'))
@section('title', 'Login')
@section('subHeading', '')

@section('content')
<!-- Post Content -->
<article>
  <div class="container">
    <div class="row">
        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf

            <div class="form-group ">
                <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                
            </div>

            <div class="form-group ">
                <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                
            </div>

            <div class="form-group ">
                
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                        </label>
                    </div>
                
            </div>

            <div class="form-group  mb-0">
                
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    <a href="{{route('register')}}" class="btn btn-primary">
                        {{ __('Register') }}
                    </a>

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
               
            </div>
        </form>
    </div>
  </div>
</article>

<hr>

@stop










