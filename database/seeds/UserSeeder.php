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
            'username' =>"RaaaaRashed",
            'phone_no' =>"1234567812",
            'email' => "rarashed@gmail.com",
            'password' => Hash::make("12345678"),

            'street_address' =>"mirpur",
            'division_id' =>"1",
            'district_id'=>"1",


        ]);
    }
}
