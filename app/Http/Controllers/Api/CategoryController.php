<?php

namespace App\Http\Controllers\Api;

use App\Actions\Category\CategoryTreeAction;
use Illuminate\Http\JsonResponse;

final class CategoryController extends ApiController
{
    /**
     * @OA\Get(
     *     path="/api/category/tree",
     *     @OA\Response(response="200", description="Get category tree with names")
     * )
     */
    public function getCategoryTree(CategoryTreeAction $categoryTreeAction): JsonResponse
    {
        $treeResource = $categoryTreeAction();
        return $this->respond($treeResource);
    }
}
