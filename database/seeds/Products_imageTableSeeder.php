<?php

use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class Products_imageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductImage::create([
            'product_id'=>"1",
            'image' =>"1634934239.jpg"

        ]);
        ProductImage::create([
            'product_id'=>"1",
            'image' =>"1634934239.jpg"

        ]);
        ProductImage::create([
            'product_id'=>"1",
            'image' =>"1634934239.jpg"

        ]);
        ProductImage::create([
            'product_id'=>"2",
            'image' =>"1646164746.jpg"

        ]);
        ProductImage::create([
            'product_id'=>"2",
            'image' =>"1646164747.jpg"

        ]);
        ProductImage::create([
            'product_id'=>"2",
            'image' =>"1646164747.jpg"

        ]); ProductImage::create([
            'product_id'=>"3",
            'image' =>"1659195395.jpg"

        ]);
        ProductImage::create([
            'product_id'=>"3",
            'image' =>"1659195396.jpg"

        ]);
        ProductImage::create([
            'product_id'=>"3",
            'image' =>"1659195396.jpg"

        ]);
        ProductImage::create([
            'product_id'=>"4",
            'image' =>"1659196061.jpg"

        ]);
        ProductImage::create([
            'product_id'=>"4",
            'image' =>"1659196061.jpg"

        ]);
        ProductImage::create([
            'product_id'=>"4",
            'image' =>"1659196061.jpg"

        ]);
        ProductImage::create([
            'product_id'=>"5",
            'image' =>"1659196110.jpg"

        ]);
        ProductImage::create([
            'product_id'=>"5",
            'image' =>"1659196110.jpg"

        ]);
        ProductImage::create([
            'product_id'=>"5",
            'image' =>"1659196110.jpg"

        ]);
        ProductImage::create([
            'product_id'=>"5",
            'image' =>"1659196310.jpg"

        ]);
        ProductImage::create([
            'product_id'=>"6",
            'image' =>"1659196310.jpg"

        ]);
        ProductImage::create([
            'product_id'=>"6",
            'image' =>"1659196311.jpg"

        ]);

    }
}
