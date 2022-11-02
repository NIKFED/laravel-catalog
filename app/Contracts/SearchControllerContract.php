<?php

namespace App\Contracts;

use Illuminate\Http\JsonResponse;

interface SearchControllerContract
{
    public function search(): JsonResponse;
}
