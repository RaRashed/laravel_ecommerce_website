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
            'email' => "rashed@gmail.com",
            'password' => "12345678"

        ]);
    }
}
