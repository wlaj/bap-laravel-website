@extends('layouts.master')

@section('content')
	<!-- Hero section -->
  <div class="jumbotron">
  <div class="container text-center">
    <h2 class="text-center" style="color: white">The first social media with both photos and a post feed</h2>
    <a type="button" style="width: 200px;" href="{{ route('company.list') }}" class="btn btn-primary text-center">Browse companies</a>
    <a type="button" style="width: 200px;" href="{{ route('post.posts') }}" class="btn btn-outline-primary text-center">Go to posts</a>
  </div>
        <img class="center-block" src="{{ asset('img/bg2.png') }}" alt="Italian Trulli">
</div>
@stop
