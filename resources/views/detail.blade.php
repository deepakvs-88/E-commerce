@extends('home')
@section('content')
<div class="conatiner">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Back to home</a><br><br>
            <h2>{{$product['name']}}</h2>
            <h3>Price: {{$product['price']}}</h3>
            <h4>Details: {{$product['description']}}</h4>
            <h4>Category: {{$product['category']}}</h4>
            <br><br>
            <form action="/addtocart" method="post">
                {{ csrf_field() }}
                <input type="hidden" name='product_id' value="{{$product['id']}}">
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br><br>
        </div>
    </div>
</div>
@endsection