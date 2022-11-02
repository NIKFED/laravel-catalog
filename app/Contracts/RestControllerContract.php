<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

interface RestControllerContract
{
    public function index(): JsonResponse;

    public function store(FormRequest $request): JsonResponse;

    public function show(Model $resource): JsonResponse;

    public function update(FormRequest $request, Model $resource): JsonResponse;

    public function destroy(Model $resource): JsonResponse;
}
