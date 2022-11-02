<?php

namespace App\Http\Resources;

use App\Models\Entities\Category;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class CategoryResource extends JsonResource
{
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        /** @var Category $this */
        return [
            'name' => $this->name,
        ];
    }
}
