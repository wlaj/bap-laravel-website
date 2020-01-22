@extends('layouts.master')

<head>

</head>

@section('content')
<div class="container">
  <div class="row justify-content center">
    <div class="col-md-8">
	<!-- Hero section -->
  <div class="jumbotron">
  <div class="container text-center">
    <h2 class="text-center" style="color: white">The first social media where you can post anything without having to be logged in</h2>
    <button type="button" style="width: 200px;" class="btn btn-primary text-center">Browse photos</button>
    <button type="button" style="width: 200px;" class="btn btn-outline-primary text-center">Log in</button>
  </div>
        <img class="center-block" src="{{ asset('img/bg2.png') }}" alt="Italian Trulli">
</div>
@stop
