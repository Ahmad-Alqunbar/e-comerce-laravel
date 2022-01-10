@extends('master')

@section('contant')
<div class=" custom-product">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach ( $products as $item )

          <div class="carousel-item {{$item['id']==1 ?'active':''}} ">
            <a href="{{url('detail/'.$item['id'])}}">
            <img class="slider-img" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block slider-text bg-success">
              <h5>{{$item['name']}}</h5>
              <p>{{$item['description']}}</p>
            </div>
            </a>
          </div>
          @endforeach
        </div>
        <button class="carousel-control-prev slider-next" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next slider-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
      <div class="trending-wrapper">
        <h2>Trendaing Products</h2>
        <br>
        @foreach ( $products as $item )
        <a href="{{url('detail/'.$item['id'])}}">
<div class="trending-item">
      <div class="">
        <img class="trending-image" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
        <div class="">
          <h5>{{$item['name']}}</h5>
        </div>
    </a>
      </div>
</div>
      @endforeach
    </div>
    </div>
    <br><br><br>
@endsection
