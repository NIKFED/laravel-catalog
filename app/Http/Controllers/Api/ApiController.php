<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Exceptions\HttpException;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ApiController extends Controller
{
    protected int $statusCode = 200;

    protected function getStatusCode(): int
    {
        return $this->statusCode;
    }

    protected function setStatusCode(int $statusCode): static
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    protected function respond($data, $headers = []): JsonResponse
    {
        return response()->json($data, $this->getStatusCode(), $headers);
    }

    protected function respondWithError(string $message, string $title = 'Ошибка!'): JsonResponse
    {
        return $this->respond([
            'error' => [
                'title' => $title,
                'message' => $message,
                'status_code' => $this->getStatusCode(),
            ]
        ]);
    }

    protected function respondNotFoundError(string $message = 'Объект не найден'): JsonResponse
    {
        return $this->setStatusCode(404)->respondWithError($message);
    }

    protected function respondInternalError(string $message = 'Произошла внутренняя ошибка'): JsonResponse
    {
        return $this->setStatusCode(500)->respondWithError($message);
    }

    protected function respondValidationError(string $message = 'Не все обязательные поля заполнены'): JsonResponse
    {
        return $this->setStatusCode(400)->respondWithError($message);
    }

    protected function respondAuthorisationError($message = 'Нет прав'): JsonResponse
    {
        return $this->setStatusCode(401)->respondWithError($message);
    }


    protected function handleHttpException(HttpException $e): JsonResponse
    {
        return $this->setStatusCode($e->getCode())->respondWithError($e->getMessage());
    }
}
