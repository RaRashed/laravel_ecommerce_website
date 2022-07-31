
<?php
  use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Payment;
use App\Models\Setting;
$carts=Cart::totalCarts();
$shipping_cost=Setting::cost();

  ?>

@extends('frontend.layouts.master')
@section('content')
<div class="card card-body container margin-top-20px mb-3">

<div class="card card-body">

<h2>Confirm Items</h2>
<br>
<hr>
<div class="row">
	<div class=" col-md-7">
		@foreach($carts=Cart::totalCarts() as $cart)
<p>{{$cart->product->title}} -
<strong>{{$cart->product->price}} taka</strong>
- {{$cart->product_quantity}} item
</p>

@endforeach

	</div>
	<div class="col-md-5">

		@php
		$total_price=0;

		@endphp
		@foreach($carts=Cart::totalCarts() as $cart)
@php
					$total_price +=$cart->product->price * $cart->product_quantity;


					@endphp

@endforeach
<p> Total Price: <strong>{{$total_price}}   Taka</strong></p>
<p> Total Price With Shipping Cost: <strong>{{$total_price + $shipping_cost=Setting::cost()}}</strong></p>
	</div>
</div>

<p>
	<a href="{{route('carts')}}">Change Carts Items</a>
</p>




</div>
<div class="card card-body mt-2 mb-4">

<h2>Shipping  Address</h2>
<br>
<form method="POST" action="{{ route('checkouts.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{Auth::check() ? Auth::user()->first_name. ' '.Auth::user()->last_name : '' }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::check() ? Auth::user()->email : '' }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                          <div class="form-group row">
                            <label for="phone_no" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_no" type="text" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" value="{{ Auth::check() ? Auth::user()->phone_no :'' }}" required autocomplete="phone_no">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                           </div>



                           <div class="form-group row">
                            <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('Additional  Message(optional)') }}</label>

                            <div class="col-md-6">
                                <textarea id="message" type="text" class="form-control @error('message') is-invalid @enderror" name="message" value="" required autocomplete="message" autofocus></textarea>

                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>







                           <div class="form-group row">
                            <label for="shipping_address" class="col-md-4 col-form-label text-md-right">{{ __('Shipping Address(optional)') }}</label>

                            <div class="col-md-6">
                                <input id="shipping_address" type="text" class="form-control @error('shipping_address') is-invalid @enderror" name="shipping_address" value="{{ Auth::check() ? Auth::user()->shipping_address : ''}}" required autocomplete="shipping_address" autofocus>

                                @error('shipping_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                           <div class="form-group row">
                            <label for="payment_method" class="col-md-4 col-form-label text-md-right">{{ __('Select A Payment Method') }}</label>

                            <div class="col-md-6">
                            	@php


                            	@endphp
                            	<select class="form-control" name="payment_method_id" required id="payments">
                            		<option value="">Select a payment method please</option>
                            		@foreach( $payments as $payment)
                            		<option value="{{$payment->short_name}}">
                            			{{$payment->name}}

                            		</option>

                            		@endforeach

                            	</select>

                            	@foreach($payments as $payment)


                            		@if($payment->short_name =="rocket")
                            			<div id="payment_{{$payment->short_name}}" class="alert alert-success text-center hidden">
                            			<h3>
                            				For Cash in there is nothing necessary. just click Finish Order
                            				<br>
                            				<small>
                            					you will get your product in two or three days
                            				</small>
                            			</h3>
                            		</div>
                            		@else

                            			<div class="row">
                            				<div class="col-md-6">

                            				</div>
                            				<div class="col-md-6">
                            					<div id="payment_{{$payment->short_name}}" class="alert alert-success text-center hidden">
                            			<h3>{{$payment->name}} Payment</h3>
                            			<p>
                            				<strong>{{$payment->name}} No: {{$payment->no}}</strong>
                            				<br>
                            				<strong> Amount Type: {{$payment->type}}</strong>
                            			</p>
                            			<div class=" alert alert-success">
                            				please sent above moneyy to this Bkash No and write your transaction code below there

                            			</div>

                            		</div>


                            				</div>
                            			</div>

                            		@endif



                            	@endforeach
                            	<input type="text" name="transaction_id" id="transaction_id" class="form-control hidden" placeholder="Enter transaction code">

                                    </div>
                                </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Order Now') }}
                                </button>
                            </div>
                        </div>


                                @error('payment_method')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                    </form>

</p>



<p>
	<a href="{{route('carts')}}">Change Carts Items</a>
</p>




</div>

</div>

@endsection

@section('scripts')

                            	<script type="text/javascript">
                            		  $("#payments").change(function(){
                            		$payment_method = $("#payments").val();

                            		if ($payment_method=="rocket") {
                            			$("#payment_rocket").removeClass('hidden');
                            			$("#payment_bkash").addClass('hidden');
                            			$("#payment_nagad").addClass('hidden');

                            		}
                            		else if($payment_method=="bkash"){
                            			$("#payment_bkash").removeClass('hidden');
                            			$("#payment_rocket").addClass('hidden');
                            			$("#payment_nagad").addClass('hidden');
                            			$("#transaction_id").removeClass('hidden');


                            		}
                            		else if($payment_method=="nagad"){
                            			$("#payment_nagad").removeClass('hidden');
                            			$("#payment_bkash").addClass('hidden');
                            			$("#payment_rocket").addClass('hidden')
                            			$("#transaction_id").removeClass('hidden');;

                            		}


                            })</script>


@endsection
