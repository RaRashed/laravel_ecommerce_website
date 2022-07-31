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
            'username' =>"admina",
            'phone_no' =>"01621796596",
            'email' => "admina@gmail.com",
            'password' => Hash::make("12345678"),

            'street_address' =>"mirpur",
            'division_id' =>"1",
            'district_id'=>"1",


        ]);
        User::create([
            'first_name' =>"Rashedul Aziz",
            'last_name' =>"Rashed",
            'username' =>"adminab",
            'phone_no' =>"01814784235",
            'email' => "adminab@gmail.com",
            'password' => Hash::make("12345678"),

            'street_address' =>"mirpur",
            'division_id' =>"1",
            'district_id'=>"1",


        ]);
    }
}
