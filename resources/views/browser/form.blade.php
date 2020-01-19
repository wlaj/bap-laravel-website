@extends('layouts.master')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container center">
    <h1 class="display-4">Foto Uploaden</h1>
    <p class="lead">Upload je foto's en video's in het onderstaande formulier om te delen</p>
  </div>
</div>
  <form action="{{ route('photo.store') }}" method="POST" class="browser-add">
    @csrf
    <form class="div-photo-upload">
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationDefault01">First name</label>
        <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="Mark" required>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationDefault02">Last name</label>
        <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationDefaultUsername">Username</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend2">@</span>
          </div>
          <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
        </div>
      </div>
    </div>
    <div class="form-row" style="padding-bottom: 30px;">
    <div class="photo-upload" style="padding-left: 5px;">
      <label>Upload</label>
      <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>
</div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault04">State</label>
        <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault05">Zip</label>
        <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="invalidCheck2">
          Agree to terms and conditions
        </label>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
  </form>
@endsection
