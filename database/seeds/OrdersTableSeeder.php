<?php

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'user_id' =>"5",
        'payment_id'=>"1",
    	'ip_address'=>"172.0.0.1",
    	'name' => "Rashed",
    	'phone_no'=> "01827801715",
    	'Shipping_address' =>"mirpur",
    	'email'=> "abc@gmail.com",
    	'message'=>"hey",
        'transaction_id' =>"12345"
        ]);
    }
}
