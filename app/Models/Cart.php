<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use Auth;
use DB;
use Session;

class Cart extends Model
{
     public $fillable =[
    	'user_id  ',
    	'ip_address',
    	'product_id',
    	'product_quantity',
    	'order_id',
    	];

    	 public function user(){
    	return $this->belongsTo(User::class);
    }
     public function order(){
    	return $this->belongsTo(Order::class);
    }
     public function product(){
    	return $this->belongsTo(Product::class);
    }



    /* public static function totalCarts(){

        if(Auth::check()){

       // $carts = Cart::orWhere('user_id', Auth::id())
               // ->orWhere('ip_address', $request->ip())
                //->get();

              $carts = Cart::where('user_id', Auth::id())

                ->where('order_id',NULL)
                ->get();
            }
            else{
                 //$carts = Cart::orWhere('ip_address', $request->ip()) ->get();
                $carts = Cart::where('ip_address', $ip_address ?? '')->where('order_id',NULL)->get();

            }

       //dd($carts);
        return $carts;

    }

    public static function totalitems(){

        if(Auth::check()){

       // $carts = Cart::orWhere('user_id', Auth::id())
               // ->orWhere('ip_address', $request->ip())
                //->get();

              $carts = Cart::where('user_id', Auth::id())

                ->where('order_id',NULL)
                ->get();
            }
            else{
                 //$carts = Cart::orWhere('ip_address', $request->ip()) ->get();
                $carts = Cart::where('ip_address', $ip_address ?? '')->where('order_id',NULL)->get();

            }
    	$total_item=0;
        foreach ($carts as $cart) {
            $total_item +=$cart->product_quantity;
        }

        return $total_item;


    }

/*
    public static function cartCount(){

        if(Auth::check()){
            $user_id=Auth::user()->user_id;
            $cartCount = DB::table('carts')->where('user_id',$user_id)->sum('product_quantity');

        }

        else{
            $ip_address=Session::get('ip_address');
            $cartCount=DB::table('carts')->where('ip_address',$ip_address)->sum('product_quantity');
        }
        return $cartCount;
    }
    */


     public static function totalCarts(){

        if(Auth::check()){

       // $carts = Cart::orWhere('user_id', Auth::id())
               // ->orWhere('ip_address', $request->ip())
                //->get();

              $carts = Cart::where('user_id', Auth::id())
              //->orWhere('ip_address', $ip_address ?? '')
                ->where('order_id',NULL)
                ->get();
            }

      // dd($carts);
        return $carts;

    }

    public static function totalitems(){

        if(Auth::check()){

       // $carts = Cart::orWhere('user_id', Auth::id())
               // ->orWhere('ip_address', $request->ip())
                //->get();

              $carts = Cart::where('user_id', Auth::id())
               //->orWhere('ip_address', $ip_address ?? '')
                ->where('order_id',NULL)
                ->get();
            }

      $total_item=0;
        foreach ($carts as $cart) {
            $total_item +=$cart->product_quantity;
        }
      //dd($total_item);
        return $total_item;


    }


}
