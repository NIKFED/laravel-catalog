<?php

namespace App\Http\Controllers\Api\Rest;

use App\Contracts\RestControllerContract;
use App\Http\Controllers\Api\ApiController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

final class CategoryController extends ApiController implements RestControllerContract
{
    public function index(): JsonResponse
    {
        // TODO: Implement index() method.
        return $this->respondNotFoundError('Not implemented');
    }

    public function store(FormRequest $request): JsonResponse
    {
        // TODO: Implement store() method.
        return $this->respondNotFoundError('Not implemented');
    }

    public function show(Model $resource): JsonResponse
    {
        // TODO: Implement show() method.
        return $this->respondNotFoundError('Not implemented');
    }

    public function update(FormRequest $request, Model $resource): JsonResponse
    {
        // TODO: Implement update() method.
        return $this->respondNotFoundError('Not implemented');
    }

    public function destroy(Model $resource): JsonResponse
    {
        // TODO: Implement destroy() method.
        return $this->respondNotFoundError('Not implemented');
    }
}
