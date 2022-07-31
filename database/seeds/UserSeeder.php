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
            'first_name' =>"Rashedul Aziz",
            'last_name' =>"Rashed",
            'username' =>"Rashed",
            'phone_no' =>"1234567812",
            'email' => "rarashed@gmail.com",
            'password' => Hash::make("12345678"),

            'street_address' =>"mirpur",
            'division_id' =>"1",
            'district_id'=>"1",


        ]);
        User::create([
            'first_name' =>"Rashedul Aziz",
            'last_name' =>"Rashed",
            'username' =>"RaRashedRa",
            'phone_no' =>"01827801715",
            'email' => "rarashedra@gmail.com",
            'password' => Hash::make("12345678"),

            'street_address' =>"mirpur",
            'division_id' =>"1",
            'district_id'=>"1",


        ]);
    }
}
