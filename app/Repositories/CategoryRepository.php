<?php

namespace App\Repositories;

use App\Models\Entities\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository extends BaseRepository
{
    public function __construct(Category $category)
    {
        $this->model = $category;
    }

    public function getRoot(): Category
    {
        return $this->model->query()
            ->whereNull('parent_id')
            ->first();
    }

    public static function getRandom(): ?Category
    {
        return Category::query()
            ->inRandomOrder()
            ->first();
    }
}
