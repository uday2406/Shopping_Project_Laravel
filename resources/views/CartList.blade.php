@extends('master')
@section('content')
<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total=ProductController::cartItem();
}
?>
    <div class="custom-product">

        <div class="container mt-5 mb-5">
            <h3 class="text-center">Cart List</h3>
            <div class="d-flex justify-content-center row">
                @if($total==0)
                <h4 class="text-center text-info">No Product Found</h4>
                @endif
                <div class="col-md-8">
                    @foreach ($product as $p)
                       
                        <div class="row p-2 bg-white border rounded auto cart-list-divider">
                            <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image"
                                    src="{{ $p->gallery }}"></div>
                            <div class="col-md-6 mt-1">
                                <h5>{{ $p->name }}</h5>
                                <div class="d-flex flex-row">
                                    <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                    <span>{{ $p->category }}</span>
                                </div>
                                
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <div class="d-flex flex-row align-items-center">
                                    <h4 class="mr-1"><i class="fa fa-rupee"></i> {{ $p->price }}</h4>
                                </div>
                                {{-- <h6 class="text-success">Free shipping</h6> --}}
                                <div class="d-flex flex-column mt-4"><a href="removecart/{{$p->cart_id}}"
                                    class="btn btn-danger active" role="button" aria-pressed="true">Remove</a></div>
                            </div>
                        </div>
                    @endforeach
                    <h4 class="text-right">Total Amount : <i class="fa fa-rupee"></i> {{$totals}}</h4>
                    <div class="float-right">
                        @if($total==!0)
                        <a href="ordernow" class="btn btn-primary btn-lg">Order Now</a>    
                        @endif
                        
                    </div>   
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
