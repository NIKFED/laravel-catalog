<?php

namespace Database\Seeders;

use App\Models\Entities\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::factory(100)->create();
    }
}
