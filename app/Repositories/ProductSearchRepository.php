<?php

namespace App\Repositories;

use App\Contracts\SearchRepositoryContract;
use App\Models\Entities\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductSearchRepository implements SearchRepositoryContract
{
    public function __construct(
        private readonly Product $model,
    )
    {

    }

    public function search(string $query = ''): Collection
    {
        return $this->model->query()
            ->where('name', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->get();
    }
}
