@extends('layouts.master')

@section('header')
Browser
@endsection

@section('content')
<h2>Browsers</h2>
<p>
Welkom tot {{ $Name }}. {{ $information }} We bestaan als sinds {{ $experience }} jaar.
</p>
<ol>
@foreach ($producten as $product)
<li>{{ $product }} </li>

@endforeach
</ol>

@for($i=1;$i<=10;$i++){
  {{ $i }}<br/>
  @endfor

@endsection
