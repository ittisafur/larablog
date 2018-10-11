@extends('user.app')

@section('bgImg', asset('user/img/contact-bg.jpg'))
@section('title', 'Welcome to Home')
@section('subHeading', '')

@section('content')
<!-- Post Content -->
<article>
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            Welcome to the website
        </div>
    </div>
  </div>
</article>

<hr>

@stop









{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}