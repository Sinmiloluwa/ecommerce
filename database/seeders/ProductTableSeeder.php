<?php

namespace Database\Seeders;

use fake;
use Faker\Factory;
use App\Models\Product;
use Illuminate\Database\Seeder;


class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()->count(100)->create();
    }
}
