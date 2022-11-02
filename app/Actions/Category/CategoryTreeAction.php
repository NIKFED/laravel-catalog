<?php

namespace App\Actions\Category;

use App\Http\Resources\CategoryWithSubCategoriesResource;
use App\Models\Entities\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Support\Facades\Cache;

final class CategoryTreeAction
{
    public function __construct(
        private readonly CategoryRepository $categoryRepository,
    )
    {

    }


    public function __invoke(): CategoryWithSubCategoriesResource
    {
        $root = $this->categoryRepository->getRoot();
        $tree = $this->cacheThree($root);
        return new CategoryWithSubCategoriesResource($tree);
    }

    private function getSubTree(?Category $tree): ?Category
    {
        if (!$tree) {
            return null;
        }
        foreach ($tree->subCategories as $subTree) {
            $subTree['sub_categories'] = $this->getSubTree($subTree);
        }
        return $tree;
    }

    private function cacheThree($root)
    {
        return Cache::remember('category_tree', 60*60*24, function () use ($root) {
            return $this->getSubTree($root);
        });
    }
}
