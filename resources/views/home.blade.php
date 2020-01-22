@extends('layouts.master')

@section('content')
	<!-- Hero section -->
  <div class="jumbotron">
  <div class="container text-center">
    <h2 class="text-center" style="color: white">The first social media where you can post anything without having to be logged in</h2>
    <button type="button" style="width: 200px;" class="btn btn-primary text-center">Browse photos</button>
    <button type="button" style="width: 200px;" class="btn btn-outline-primary text-center">Go to posts</button>
  </div>
        <img class="center-block" src="{{ asset('img/bg2.png') }}" alt="Italian Trulli">
</div>
@stop
