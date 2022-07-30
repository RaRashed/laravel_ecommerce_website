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
            'username' =>"RaRashed",
            'phone_no' =>"123456",
            'email' => "rashed@gmail.com",
            'password' => "12345678",
            'street_address' =>"mirpur",
            'division_id' =>"1",
            'district_id'=>"1",


        ]);
    }
}
