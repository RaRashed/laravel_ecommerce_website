<?php

use App\Models\Cart;
use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cart::create([
            'product_id'=>"6",
            'user_id' =>"1",
            'order_id' =>null,
            'ip_address' => "172.0.0.1",
            'product_quantity' =>"2"
        ]);
        Cart::create([
            'product_id'=>"5",
            'user_id' =>"1",
            'order_id' =>null,
            'ip_address' => "172.0.0.1",
            'product_quantity' =>"1"
        ]);
    }
}
