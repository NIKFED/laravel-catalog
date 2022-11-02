<?php

namespace App\Http\Controllers\Api;

use App\Actions\Category\CategoryTreeAction;
use Illuminate\Http\JsonResponse;

final class CategoryController extends ApiController
{
    public function getCategoryTree(CategoryTreeAction $categoryTreeAction): JsonResponse
    {
        $treeResource = $categoryTreeAction();
        return $this->respond($treeResource);
    }
}
