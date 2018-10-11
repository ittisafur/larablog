@extends('user.app')

@section('bgImg', Storage::disk('local')->url($slug->image))
@section('title', $slug->title)
@section('subHeading', $slug->subtitle)

@section('content')
<!-- Post Content -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=2297065220323385&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <small> Created at: {{$slug->created_at->diffForHumans()}} </small>
        @foreach($slug->categories as $category)
          <a href="{{route('category', $category->slug)}}">
            <small class="pull-right" style="margin-right: 20px;"> 
              {{$category->name}}
            </small>
          </a> 
        @endforeach
         </br>
        {{strip_tags($slug->body)}}
        <h1>Tag Clouds</h1>
        @foreach($slug->tags as $tag)
          <a href="{{route('tag', $tag->slug)}}">
            <small class="pull-left" style="margin-right: 20px; border-radius: 5px;border: 1px solid grey; padding: 5px;"> {{$tag->name}}</small>
          </a>
        @endforeach
      </div>

      <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="10"></div>
    </div>
  </div>
</article>

<hr>

@stop

