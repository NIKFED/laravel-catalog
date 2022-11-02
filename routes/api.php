<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('category')->group(function () {
    Route::get('/tree', [CategoryController::class, 'getCategoryTree'])->name('category-tree');
});

Route::prefix('product')->group(function () {
    Route::get('/search', [ProductController::class, 'search'])->name('product-search');
});
