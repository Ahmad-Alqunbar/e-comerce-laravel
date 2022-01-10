@extends('master')

@section('contant')
<div class=" row  ">
    <div class="col-sm-4">
        <a href="#">Filter</a>
          </div>
                <div class="col-sm-4">
                    <div class="trending-warpper">
                                <h4>Result For Products </h4>
                        @foreach ($products as $item)
                                <div class="searched-item">
                                    <a href="{{url('detail/'.$item['id'])}}">
                                        <img class="trending-image" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
                                        <div class="">
                                            <h2>{{$item['name']}}</h2>
                                            <h5>{{$item['description']}}</h5>

                                        </div>
                                    </a>
                                </div>
                         @endforeach
                    </div>
                </div>
</div>
@endsection
