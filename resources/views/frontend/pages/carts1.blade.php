<?php
  use App\Http\Controllers\Controller;
use App\Models\Cart;
$carts=Cart::totalCarts();
//$total_item=Cart::totalitems();
  ?>

@extends('frontend.layouts.master')
@section('content')
<div class="container margin-top-20px">
<h2 style="color:red;"><strong><center>My Cart Items</center></strong></h2>
@if($total_item=Cart::totalitems() > 0)

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>NO.</th>
			<th>Product Title</th>
			<th>Product Image</th>
			<th>Product Quantity</th>
			<th>Unit price</th>
			<th>Sub total price</th>
			<th>
				Delete

			</th>
		</tr>
	</thead>
	<tbody>
		@php
		$total_price=0;

		@endphp
		@foreach($carts=Cart::totalCarts() as $cart)


<tr>
			<td>
				{{$loop->index+1}}
			</td>
			<td>
				<a href="{{route('products.show',$cart->product->slug)}}">{{$cart->product->title}}</a>
			</td>

			<td>
				@if($cart->product->images->count()>0)

				<img src="{{asset('images/products/'. $cart->product->images->first()->image)}}" width="100px">
				@endif
			</td>
			<td>
					<form class=" form-inline" action="{{route('carts.update', $cart->id)}}" method="post">
					@csrf
					<input type="number" name="product_quantity" class="form-cotrol" value="{{$cart->product_quantity}}">
					<button type="submit" class="btn btn-success ml-1">Update</button>

				</form>
				<td>
					{{$cart->product->price}} Taka
				</td>
				<td>

					@php
					$total_price +=$cart->product->price * $cart->product_quantity;


					@endphp
					{{$cart->product->price * $cart->product_quantity}} taka
				</td>
			</td>
			<td>
				<form class=" form-inline" action="{{route('carts.delete',$cart->id)}}">
					@csrf
					<input type="hidden" name="cart_id" class="form-cotrol">
					<button type="submit" class="btn btn-danger">Delete</button>

				</form>
			</td>
		</tr>
		@endforeach

		<tr>
			<td colspan="4"></td>
			<td>
				Total Amount:
			</td>
			<td>
				<strong>{{$total_price}}</strong>
			</td>
		</tr>


	</tbody>

</table>
<div class="float-right">
	<a href="{{route('products')}}" class="btn btn-info btn-lg">Continue Shopping.....</a>
	<a href="{{route('checkouts')}}" class="btn btn-warning btn-lg">Checkout</a>

</div>
<div>

			<a class="btn btn-info btn-lg">You Can Again Shopping</a>
			<a href="{{route('products')}}">click here</a>
		</div>




@else
<div class="alert alert-warning">
	<strong>There is no item in your cart </strong>
	<br>
	<a href="{{route('products')}}" class="btn btn-info btn-lg">Continue Shopping.....</a>


</div>
@endif



</div>

@endsection
