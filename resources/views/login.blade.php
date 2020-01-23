@extends('layouts.master')

@section('content')

@if(count($errors) > 0)

@endif
<form class="form-signin" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label>Username</label>
    <input type="username" name="username" class="form-control" />
  </div>
    <div class="form-group">
      <label>Enter password</label>
      <input type="password" name="password" class="form-control" />
  </div>
  <div class="form-group">
    <input type="submit" name="login" class="btn btn-outline-primary" value="Login" />
  </div>
</form>

@endsection
