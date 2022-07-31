<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'category_id' =>"1",
            'brand_id' =>"1",
            'title'=>"panjabi1",
            'description' => "White Cotton casual Panjabi for men.",
            'slug' =>'panjabi1',
            'quantity' =>"10",
            'price' =>"4000",
            'status'  =>"0",

            'admin_id' =>"1"

        ]);
        Product::create([
            'category_id' =>"1",
            'brand_id' =>"2",
            'title'=>"panjabi2",
            'description' => "White Cotton casual Panjabi for men.",
            'slug' =>'panjabi2',
            'quantity' =>"10",
            'price' =>"3000",
            'status' =>"0",

            'admin_id' =>"1"

        ]);
        Product::create([
            'category_id' =>"1",
            'brand_id' =>"2",
            'title'=>"panjabi3",
            'description' => "White Cotton casual Panjabi for men.",
            'slug' =>'panjabi3',
            'quantity' =>"10",
            'price' =>"5000",
            'status'  =>"0",

            'admin_id' =>"1"

        ]);
        Product::create([
            'category_id' =>"2",
            'brand_id' =>"2",
            'title'=>"panjabi",
            'description' => "men's Collection",
            'slug' =>'panjabi',
            'quantity' =>"10",
            'price' =>"4000",
            'status'  =>"0",

            'admin_id' =>"1"

        ]);
        Product::create([
            'category_id' =>"2",
            'brand_id' =>"5",
            'title'=>"panjabi101",
            'description' => "men's Collection",
            'slug' =>'panjabi101',
            'quantity' =>"10",
            'price' =>"3000",
            'status'  =>"0",

            'admin_id' =>"1"

        ]);
        Product::create([
            'category_id' =>"3",
            'brand_id' =>"4",
            'title'=>"Lotto",
            'description' => "Womenn's Collection",
            'slug' =>'Lotto',
            'quantity' =>"10",
            'price' =>"2000",
            'status'  =>"0",

            'admin_id' =>"1"

        ]);
    }
}
