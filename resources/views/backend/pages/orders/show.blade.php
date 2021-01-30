

@extends('backend.layouts.master')
@section('content')

 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class=".text-*-center"><center> View Order #LE{{$order->id}} </center></h3>
              </div>




<div class="card-body" >

  @include('backend.partials.messges')
  <h3>Order Informations</h3>

  <div class="row">
  	<div class="col-md-6 border-right">
  <p><strong>Orderer Name : </strong>{{$order->name}}</p>
    <p><strong>Orderer Phone : </strong>{{$order->phone_no}}</p>

  <p><strong>Orderer E-Mail : </strong>{{$order->email}}</p>

  <p><strong>Orderer Shipping Address : </strong>{{$order->shipping_address}}</p>

  		
  	</div>
  	<div class="col-md-6">
  		<p><strong>Orderer Payment Method : </strong> {{$order->payment->name}}</p>
  		<p><strong>Orderer Payment Transaction : </strong> {{$order->transaction_id}}</p>
  	</div>
  </div>

  <hr>
  <h3>Ordered Items : </h3>

  @if($order->carts->count() > 0)

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
		@foreach($order->carts as $cart)
		

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
@endif
<hr>
<form action="{{route('backend.order.charge',$order->id)}}" class="" method="post">
	@csrf
	<label for="">Shipping Cost</label>
	

	<input type="number" name="shipping_charge" id="shipping_charge" value="{{$order->shipping_charge}}">
<br>
<label for="">Custom Discount</label>

<input type="number" name="custom_discount" id="custom_discount" value="{{$order->custom_discount}}">
<br>

	<input type="submit" value="Update" class="btn btn-success">
	<a href="{{route('backend.order.invoice',$order->id)}}" class="ml-2 btn btn-info">Generate Invoice</a>

	
	
</form>
<hr>
<form action="{{route('backend.order.completed',$order->id)}}" class="form-inline" style="display: inline-block!important;">
	@csrf
	@if($order->is_completed)
	<input type="submit" value="Cancel Order" class="btn btn-danger">
	@else
	<input type="submit" value="Complete Order" class="btn btn-success">

	@endif
	
</form>
<form action="{{route('backend.order.paid',$order->id)}}" class="form-inline" style="display: inline-block!important;">
	@csrf
	@if($order->is_paid)
	<input type="submit" value="Cancel Payment" class="btn btn-danger">
	@else
	<input type="submit" value="Paid Order" class="btn btn-success">

	@endif
	
</form>

  		
	
</div>
</div>
</div>
</div>
</div>
</section>



            
  @endsection