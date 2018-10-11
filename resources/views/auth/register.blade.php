@extends('user.app')

@section('bgImg', asset('user/img/contact-bg.jpg'))
@section('title', 'Register')
@section('subHeading', '')

@section('content')
<!-- Post Content -->
<article>
  <div class="container">
    <div class="row">
        <form class="col-md-12" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
            @csrf

            <div class="form-group ">
                <label for="name" class="col-form-label text-md-right">{{ __('Name') }}</label>
                
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                
            </div>

            <div class="form-group ">
                <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                
            </div>

            <div class="form-group  mb-0">
                
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                
            </div>
        </form>
    </div>
  </div>
</article>

<hr>

@stop







