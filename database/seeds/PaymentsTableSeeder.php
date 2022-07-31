<?php

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create([
            'name'=> "Bkash",
    	'image' =>"1224.jpg",
    	'priority' =>"1",
    	'short_name'=> "bkash",
    	'no' =>"01827801715",
    	'type' =>"personal"

        ]);
    }
}
