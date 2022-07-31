<?php

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' =>"Easy",
            'description' =>"Easy",
            'image' =>"1659195778.jpg"


        ]);
        Brand::create([
            'name' =>"Yellow",
            'description' =>"Yellow",
            'image' =>"1659195499.jpg"


        ]);
        Brand::create([
            'name' =>"Bata",
            'description' =>"Bata",
            'image' =>"1659195818.png"


        ]);
        Brand::create([
            'name' =>"Lotto",
            'description' =>"Lotto",
            'image' =>"1659195838.jpg"


        ]);
        Brand::create([
            'name' =>"Tangail Saree",
            'description' =>"Tangail Saree",
            'image' =>"1659195873.jpg"


        ]);
    }
}
