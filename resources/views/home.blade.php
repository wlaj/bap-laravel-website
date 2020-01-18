@extends('layouts.master')

<head>
     <link rel="stylesheet" href="/css/home.css">
</head>

@section('content')
<div class="row">

<div class="col-lg-4 col-md-4 col-xs-4 thumb">
    <a class="thumbnail" href="#">
        <img class="img-responsive" src="{{ asset('/img/firefox.png') }}" alt="">
    </a>
</div>
<div class="col-lg-4 col-md-4 col-xs-4 thumb">
    <a class="thumbnail" href="#">
        <img class="img-responsive" src="{{ asset('/img/firefox.png') }}" alt="">
    </a>
</div>
<div class="col-lg-4 col-md-4 col-xs-4 thumb">
    <a class="thumbnail" href="#">
        <img class="img-responsive" src="{{ asset('/img/firefox.png') }}" alt="">
    </a>
</div>
@stop
