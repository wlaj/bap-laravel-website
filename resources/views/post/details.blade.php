@extends('layouts.master')

<head>
    <link rel="stylesheet" href="/css/style.css">
</head>

@section('header')
<h2>{{ $post->title }}</h2>
<h2>{{ $post->username }}</h2>
@endsection

@section('content')
<img src="{{ asset('storage/post/C56HaBf70umijMsDjBJEywjqd5zyB5Lt3dZBqpKc.png' . $post->image ) }}" />
@endsection
