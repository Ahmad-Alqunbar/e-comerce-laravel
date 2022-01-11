@extends('master')

@section('contant')
<div class="container ">
    <div class="row p-5">
                        <div class="col-sm-6">
                                            <img id="zoom_01"class="detail-img"src="{{$product['gallery']}}" data-zoom-image="{{$product['gallery']}}" alt="">
                        </div>
                <div class="col-sm-6">
                                        <a href="{{url('/')}}">Go Back</a>
                                        <h2>{{$product['name']}}</h2>
                                        <h3>Price : {{$product['price']}}</h3>
                                        <h5>Details : {{$product['description']}}</h5>
                                        <h5>Category : {{$product['category']}}</h5>
                                        <br><br>
                                                    <form method="POST"action="{{url('/add_to_cart')}}">
                                                                                                        @csrf
                                                                                                        <input type="hidden"name="product_id"value="{{$product['id']}}">
                                                                                                    <button class="btn btn-success w-25" >Add To Cart</button>
                                                   </form>
                                        <br><br>
                                        <button class="btn btn-primary w-25" >Buy Now</button>
                </div>
    </div>
</div>
@endsection
