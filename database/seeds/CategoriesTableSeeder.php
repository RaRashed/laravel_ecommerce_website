<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' =>"panjabi",
            'description'=>"Men's Collection",
            'image' =>"1659195124.jpg",


        ]);
        Category::create([
            'name' =>"saree",
            'description'=>"Womens's Collection",
            'image' =>"1659195199.jpg",


        ]);
        Category::create([
            'name' =>"shoe",
            'description'=>"Men's Collection",
            'image' =>"1659195241.jpg",


        ]);
    }
}
