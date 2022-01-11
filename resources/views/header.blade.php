<?php
use App\Http\Controllers\productController;
$total=0;
if(Session::has('user')){
    $total=productController::cartId();
}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-success ">
    <a class="navbar-brand text-white" href="{{url('/')}}">SooqCom</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class=" nav-link text-white" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{url('myorders')}}">Orders</a>
        </li>

          <form action="{{url('/search')}}" method=""class="form-inline my-2 my-lg-0">
            <input name="query"class="form-control mr-sm-2 search-box" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
          </form>

      </ul>
<ul class="navbar-nav ">

      <li class="nav-item">
        <a class="nav-link text-white" href="{{url('cartList')}}">Cart({{$total}})</a>
      </li>
      @if (Session::has('user'))

      <ul class="dropdown mx-4">
        <a class="btn btn-link dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
            {{session::get('user')['name']}}
       <span class="cart"></span> </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item " href="{{url('/logout')}}">Logout</a>
        </div>
    </ul>

    @else
   <li> <a class="nav-link text-white" href="{{url('/login')}}">Login</a></li>
   <li> <a class="nav-link text-white" href="{{url('/register')}}">Register</a></li>
    @endif
</ul>

    </div>
  </nav>
