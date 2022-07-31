<?php

use App\Models\Division;
use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Division::create([
            'name'=>"Dhaka",
            'priority' =>"2"
        ]);
    }
}
