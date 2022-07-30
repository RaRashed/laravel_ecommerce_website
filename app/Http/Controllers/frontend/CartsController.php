<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Cart;
use Session;

use Auth;


class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.pages.carts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['product_id'=>'required'],['product_id.required' =>'please give a product']);


       if(Auth::check()){
        $cart = Cart::Where('user_id', Auth::id())
                ->where('product_id', $request->product_id)
                ->where('order_id', NULL)
                ->first();

       }





                if(!is_null($cart)){
                    $cart->increment('product_quantity');
                }

                else

                {
                    $cart = new Cart;

            if(Auth::check()){
            $cart->user_id = Auth::id();

        }


        $cart->ip_address = request()->ip();
        $cart->product_id = $request->product_id;
        $cart->save();


    }

        session()->flash('success','Product has added to cart');

        return back();

   // return json_encode(['status'=>'success', 'Message' => 'Item Added', 'totalitems'=>Cart::totalitems()]);




                }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        /**
         * undocumented constant
         **/
        //dd($request, $id);
        $cart = Cart::find($id);
        if(!is_null($cart)){
            $cart->product_quantity= $request->product_quantity;
             $cart->save();


        }
        else{
            return redirect()->route('carts');

        }

        session()->flash('success','Cart updated');
         return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         {
        $cart = Cart::find($id);
        if(!is_null($cart)){

             $cart->delete();

        }
        else{
            return redirect()->route('carts');

        }
        session()->flash('success','Cart deleted');
         return back();
    }

    }
}
