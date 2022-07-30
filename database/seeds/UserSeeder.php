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
            'email' => 'rnrashedrn@gmail.com',
            'password' => sha1('12345678')

        ]);
    }
}
