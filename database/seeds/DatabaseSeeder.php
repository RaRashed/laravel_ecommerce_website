<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            BrandsTableSeeder::class,
            CategoriesTableSeeder::class,

            DivisionsTableSeeder::class,
            DistrictsTableSeeder::class,
            ProductsTableSeeder::class,
            Products_imageTableSeeder::class,
            PaymentsTableSeeder::class,
            OrdersTableSeeder::class,
            CartsTableSeeder::class

        ]);
    }
}
