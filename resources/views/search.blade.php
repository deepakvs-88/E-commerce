@extends('home')
@section('content')
<div class="custom-product">
    <div class="col-sm-4">
        <a href="">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="search-wrapper">
            <h3>Result</h3>
            @foreach($products as $item)
            <div class="search-detail">
                <a href="detail/{{$item['id']}}">
                    <img class="search-image" src="{{$item['gallery']}}" alt="">
                    <div class="search-name">
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