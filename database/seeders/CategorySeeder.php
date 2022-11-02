<?php

namespace Database\Seeders;

use App\Models\Entities\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $subCategoriesCount = config('seed.subcategories_count', 100);

        Category::factory(1)
            ->root()
            ->create();

        for ($i = 1; $i < $subCategoriesCount; $i++) {
            Category::factory(1)
                ->subCategory()
                ->create();
        }
    }
}
