<?php

use App\Models\District;
use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        District::create([
            'name'=>"gazipur",
            'division_id' =>"1"
        ]);
    }
}
