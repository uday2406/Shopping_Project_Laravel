@extends('master')
@section('content')

<div class="custom-product">

<div class="container mt-5 mb-5">
    <h4 class="text-center">Search Results</h4>
    <div class="d-flex justify-content-center row">
        <div class="col-md-3">
            Filters
        </div>
        <div class="col-md-8">
            @foreach ($products as $p)
                <div class="row p-2 bg-white border rounded auto cart-list-divider">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="{{$p['gallery']}}"></div>
                <div class="col-md-6 mt-1">
                    <h5>{{$p['name']}}</h5>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>{{$p['category']}}</span>
                    </div>
                     <p class="text-justify text-truncate para mb-0">{{$p['description']}}<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1"><i class="fa fa-rupee"></i> {{$p['price']}}</h4>
                    </div>
                    <h6 class="text-success">Free shipping</h6>
                    <div class="d-flex flex-column mt-4"><a href="details/{{$p['id']}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">View Details</a></div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
   </div>
</div>
</div>

@endsection
