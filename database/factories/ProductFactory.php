<?php

namespace Database\Factories;

use App\Models\Entities\Product;
use App\Repositories\CategoryRepository;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'category_id' => CategoryRepository::getRandom()->id,
        ];
    }
}
