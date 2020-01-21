@extends('layouts.master')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container center">
        <h1 class="display-4">Foto Uploaden</h1>
        <p class="lead">Upload je foto's en video's in het onderstaande formulier om te delen</p>
    </div>
</div>

<!-- form -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('photo.store') }}" method="POST" class="browser-add">
    @csrf
    <form class="div-photo-upload">
        <div class="form-group">
            <label for="formGroupExampleInput">Naam</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="formGroupExampleInput" placeholder="John Doe">
            @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Beschrijving</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" aria label="With textarea">{{ old('description') }}</textarea>
            @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
        </div>
        <div class="form-row">
            <div class="col">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">@</span>
                    </div>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
                @error('username')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Kies bestand</label>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Upload</button>
    </form>

@endsection
