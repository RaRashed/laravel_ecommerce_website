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
     @include('frontend.partials.cart-button')
   
  </div>
</div>
</div>
 
@endforeach
        

      </div>

      <div class="mt-4 pagination">
        {{$products->links()}}
        </div>
          
        