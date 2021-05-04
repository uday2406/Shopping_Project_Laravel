@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="shopping">Go Back</a>
            <h2>{{$product['name']}}}</h2>
            <h5>{{$product['category']}}</h5>
            <p>{{$product['description']}}</p>
            <h3 style="color:rgba(96, 119, 248, 0.856)"><i class="fa fa-rupee"></i> {{$product['price']}}</h3>
            <br>
            <a href="#" class="btn btn-primary">Buy Now</a> <br><br>
            <form action="add_to_cart" method="POST">
                @csrf
                <input type="text" hidden value="{{$product['id']}}" name="product_id" >
                <input class="btn btn-danger" value="Add to Cart" type="submit">
            </form>
        </div>
    </div>
</div>

@endsection
