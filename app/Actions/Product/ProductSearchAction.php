<?php

namespace App\Actions\Product;

use App\Contracts\SearchActionContract;
use App\Http\Resources\ProductCollection;
use App\Repositories\ProductSearchRepository;

final class ProductSearchAction implements SearchActionContract
{
    public function __construct(
        private readonly ProductSearchRepository $productSearchRepository,
    )
    {

    }

    public function __invoke(string $query): ProductCollection
    {
        $products = $this->productSearchRepository->search($query);
        return new ProductCollection($products);
    }
}
