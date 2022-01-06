@extends('master')
@section('contant')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 mx-auto">
<form method="post" action="{{url('/login')}}">
    @csrf
    <div class="form-group ">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1"name="email" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password"name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>
</div>
</div>
@endsection
