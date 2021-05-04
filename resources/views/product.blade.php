@extends('master')
@section('content')

<div class="custom-product">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      @foreach ($products as $item)
      <div class="item {{$item['id']==1?'active':''}}">
        <img class="slider-img" src="{{$item['gallery']}}" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption slider-text">
          <h3>{{$item['name']}}</h3>
          <p>{{$item['description']}}</p>
        </div>
      </div>
      @endforeach

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row ">
        <div class="col-md-10">
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
