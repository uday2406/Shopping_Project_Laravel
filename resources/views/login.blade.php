@extends('master')
@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST">
  <div class="form-group">
      @csrf
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
  </div>
  <button type="submit"  class="btn btn-primary">Login</button>
  <button type="reset" class="btn btn-danger">Reset</button>
</form>
        </div>
    </div>
</div>
@endsection
