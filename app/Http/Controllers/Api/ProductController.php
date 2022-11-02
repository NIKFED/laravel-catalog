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


    /**
     * @OA\Get(
     *     path="/api/product/search",
     *     @OA\Parameter (
     *         description="Query for title and description match",
     *         name="query",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="string"),
     *         @OA\Examples(example="string", value="ad", summary="An string value."),
     *     ),
     *     @OA\Response(response="400", description="Parameter query not specified"),
     *     @OA\Response(response="200", description="Get product with category by title and description match")
     * )
     */
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
