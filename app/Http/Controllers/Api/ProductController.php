<?php

namespace App\Http\Controllers\Api;

use App\Actions\Product\ProductSearchAction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class ProductController extends ApiController
{
    public function __construct(
        private readonly Request $request,
    )
    {

    }


    public function search(ProductSearchAction $productSearchAction): JsonResponse
    {
        if (!$this->request->has('query')) {
            return $this->respondValidationError('Request not specified');
        }
        $query = $this->request->get('query');

        $productResources = $productSearchAction($query);
        return $this->respond($productResources);
    }
}
