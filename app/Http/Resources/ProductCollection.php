<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\ResourceCollection;
use JsonSerializable;

class ProductCollection extends ResourceCollection
{
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        return parent::toArray($request);
    }
}
