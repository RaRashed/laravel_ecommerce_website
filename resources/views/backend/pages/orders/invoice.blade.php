<!DOCTYPE html>
<html>
<head>
	<title>Invoice - {{$order->id}}</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
		.content-wrapper{
			background: #fff;
		}
		.invoice-header{
			background: #f7f7f7;
			padding: 10px 20px 10px 20px;
			border-bottom: 1px solid gray;
		}
		.invoice-right-top h3 {
			padding-right: 20px;
			margin-top: 20px;
			color: #ec5d01;
			font-size: 55px!important;
			font-family: serif;

		}
		.invoice-right-top{
			border-left: 4px solid #ec5d00;
			padding-left: 20px;
			padding-top: 20px;

		}
		thead{
			background: #ec5d01;
			color: #FFF;

		}
		.authority h5{
			margin-top: -10px;
			color: #ec5d01;
		}
		.thanks h4{
			color: #ec5d01;
			font-size: 25px;
			font-weight: normal;
			font-family: serif;
			margin-top: 20px;
		}

	</style>

</head>
<body>
	<div class="content-wrapper">
		<div class="invoice-header">
			<div class="float-left">
<img src="{{asset('images/logo/rashed.jpg')}}" alt="Logo" width="100">
	</div>
	<div class="float-right">
		<h4>Search and Buy</h4>
		<p>05/3, Mirpur-2, Dhaka1206</p>
		<p>Phone: 01827801715</p>
		<p>Email: <a href="mailto:rnrashedrn@gmail.com ">rnrashedrn@gmail.com</a></p>

		
	</div>
	<div class="clearfix">
		
	</div>
			
	<div class="invoice-description">
		<div class="invoice-left-top float-left">
			<h6>Invoice to</h6>
			<h3>{{$order->name}}</h3>
			<div class="address">
				<p>
					<strong>Address : </strong>
					{{$order->shipping_address}}
				</p>
				<p>Phone : {{$order->phone_no}}</p>
				<p> Email :<a href="mailto: {{$order->email}}"> {{$order->email}}</a></p>
			</div>

			
		</div>
		<div class="invoice-right-top float-right">
			<h3>Invoice # {{$order->id}}</h3>
			<p>
				{{$order->created_at}}
			</p>
			
			
		</div>
		<div class="clearfix"></div>
	</div>
	


            <div class="card">
             

<div class="card-body" >
  <h3>Products</h3>

  @if($order->carts->count() > 0)

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>NO.</th>
			<th>Product Title</th>
			<th>Product Quantity</th>
			<th>Unit price</th>
			<th>Sub total price</th>
			<th>
		
			
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
				{{$cart->product_quantity}}
				
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
			</td>
		</tr>
		@endforeach

		<tr>
			<td colspan="3"></td>
			<td>
				Discount
			</td>
			<td colspan="2">
				<strong>{{$order->custom_discount}}</strong>
			</td>
		</tr>
			<tr>
			<td colspan="3"></td>
			<td>
				Shipping Cost
			</td>
			<td colspan="2">
				<strong>{{$order->shipping_charge}}</strong>
			</td>
		</tr>
		<tr>
			<td colspan="3"></td>
			<td>
				Total Amount:
			</td>
			<td>
				<strong>{{$total_price + $order->shipping_charge - $order->custom_discount}}</strong>
			</td>
		</tr>
		
		
	</tbody>

</table>
@endif
<div class="thanks mt-3">
	<h4>Thank You for Your Business   !!</h4>
</div>
<div class="authority float-right mt-5">
	<p>---------------------------</p>
	<h5>Authority Signature : </h5>
</div>
<div class="clearfix"></div>

  		
	
</div>
</div>
</div>
</div>





</body>
</html>