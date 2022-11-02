<?php

namespace Database\Factories;

use App\Models\Entities\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
        ];
    }

    public function root(): Factory
    {
        return $this->state(function () {
            return [
                'name' => 'Root',
            ];
        });
    }

    public function subCategory(): Factory
    {
        return $this->state(function () {
            return [
                'parent_id' => CategoryRepository::getRandom()->id,
            ];
        });
    }
}
