<?php

namespace App\Http\Resources;

use App\Models\Entities\Product;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class ProductResource extends JsonResource
{
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        /** @var Product $this */
        return [
            'name' => $this->name,
            'description' => $this->description,
            'category' => new CategoryResource($this->category),
        ];
    }
}
