<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' =>"Rashed",
            'last_name' =>"Rashed",
            'username' =>"RaaRashed",
            'phone_no' =>"12345678123",
            'email' => "rashed@gmail.com",
            'password' => Hash::make("12345678"),

            'street_address' =>"mirpur",
            'division_id' =>"1",
            'district_id'=>"1",


        ]);
    }
}
