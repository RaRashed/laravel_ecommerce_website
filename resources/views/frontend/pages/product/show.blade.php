<!-- start slidebar+content -->
@extends('frontend.layouts.master')
@section('content')

<div class="container margin-top-20">
  <div class="row">
    <div class="col-md-4">




    {{--<li>
  <a class="nav-link" href="{{route('carts')}}">
    <button class="btn btn-danger">

      <span class="mt-1">Cart</span>
    <span class="badge badge-warning">
       App\Models\Cart::totalitems()
    </span>
    </button>


  </a>


</li>--}}

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">


    @php
$i=1;
@endphp

@foreach($product->images as $image)
<div class="product_item carousel-item {{$i==1 ? 'active': ''}}">
      <img class="d-block w-100" src="{{asset('images/products/'.$image->image)}}" alt="First slide">
    </div>
@php
$i++;
@endphp
@endforeach


    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div class="mt-3">
  <p>Category <span class="badge badge-info">{{$product->category->name}}</span></p>


</div>



    </div>

    <div class="col-md-8">
      <div class="widget">
        <h3>{{$product->title}}</h3>
         <h1>{{$product->price}} tk</h1>
         <span class="badge badge-primary">
          {{$product->quantity <1 ? 'No Item is Available': $product->quantity.'Item in stock'}}

         </span>
         <div class="product-description">
             <h5>{{$product->description}}</h5>
         </div>




      <div class="widget">


      </div>
    </div>

  </div>
  @if(auth::user())
  @include('frontend.partials.cart-button')
  @else
  <button type="submit" class="btn btn-warning mb-3"><i class="fa fa-plus"></i>ADD to cart</button>
  <h6> <i class="fa fa-login"></i> Login first to buy product</h6>

  @endif
</div>



@endsection

