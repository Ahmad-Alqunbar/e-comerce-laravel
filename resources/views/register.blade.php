@extends('master')

@section('contant')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 mx-auto">
<form method="post" action="{{url('register')}}">
    @csrf
    <div class="form-group ">
        <label for="exampleInputEmail1">User Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1"name="name" aria-describedby="emailHelp" placeholder="Enter User Name">

      </div>
    <div class="form-group ">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1"name="email" aria-describedby="emailHelp" placeholder="Enter User email">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password"name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
  </form>
</div>
</div>
</div>
@endsection
