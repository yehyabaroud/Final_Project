<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = ['Electronics', 'Books', 'Clothing', 'Home', 'Toys'];
        foreach ($categories as $name) {
            Category::create(['name' => $name]);
        }
    }
}
