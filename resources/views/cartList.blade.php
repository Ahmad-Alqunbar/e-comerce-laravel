@extends('master')

@section('contant')
<div class=" row  ">
                <div class="col-sm-10">
                    <div class="trending-warpper">
                                <h4 class="p-3">Result of Products </h4>
                                <a class="btn btn-success mx-5"href="{{url('ordernow')}}">order Now</a>
                        @foreach ($products as $item)
                                <div class=" row searched-item cart-list-devider">

                                    <div class="col-sm-3">
                                        <a href="{{url('detail/'.$item->id)}}">
                                            <img class="trending-image" src="{{$item->gallery}}" class="d-block w-100" alt="...">
                                            <div class="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="{{url('detail/'.$item->id)}}"> </a>
                                            <div class="">
                                                <h2>{{$item->name}}</h2>
                                                <h5>{{$item->description}}</h5>
                                            </div>

                                    </div>
                                    <div class="col-sm-3">
                                       <a  href="{{url('removecart/'.$item->cart_id)}}"class="btn btn-warning">Remove From Cart</a>
                                    </div>
                                </div>
                         @endforeach
                    </div>
                </div>
</div>
@endsection
