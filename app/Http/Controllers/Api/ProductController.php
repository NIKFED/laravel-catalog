<?php

namespace App\Http\Controllers\Api;

use App\Contracts\SearchActionContract;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class ProductController extends ApiController
{
    public function __construct(
        private readonly Request $request,
    )
    {

    }


    public function search(SearchActionContract $searchActionContract): JsonResponse
    {
        if (!$this->request->has('query')) {
            return $this->respondValidationError('Request not specified');
        }
        $query = $this->request->get('query');

        $productResources = $searchActionContract($query);
        return $this->respond($productResources);
    }
}
