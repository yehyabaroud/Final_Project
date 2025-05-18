<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::factory(20)->create()->each(function ($product) {
            $ids = Category::inRandomOrder()->limit(rand(1, 3))->pluck('id');
            $product->categories()->attach($ids);
        });
    }
}
