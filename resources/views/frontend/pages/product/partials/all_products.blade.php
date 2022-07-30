    <div class="row">

@foreach($products as $product)


        <div class="clo-md-3">
      <div class="card">


@php $i=1; @endphp

@foreach( $product->images as $image)

@if($i>0)
  <a href=" {{route('products.show',$product->slug)}}"> <img src="{{asset('images/products/'. $image->image)}}" class="card-img-top feature_img" alt="{{$product->title}}"></a>

  @endif

  @php $i--; @endphp


  @endforeach


  <div class="card-body">
    <h5 class="card-title">
    <a href=" {{route('products.show',$product->slug)}}">  {{ $product->title}}</a>
    </h5>
    <p class="card-text">taka-{{ $product->price }}</p>
@if(auth::user())
@include('frontend.partials.cart-button')
@else
<button type="submit" class="btn btn-warning mb-3"><i class="fa fa-plus"></i>ADD to cart</button>
<h6 class="font-bold"> <i class="fa fa-login"></i> Login first to buy product</h6>

@endif

  </div>
</div>
</div>

@endforeach


      </div>

      <div class="mt-4 pagination">
        {{$products->links()}}
        </div>

