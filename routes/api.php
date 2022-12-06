<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductAPIController;

use App\Http\Controllers\OrderAPIController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

# Relasi antar Tabel database dengan JSON
Route::get('order', [OrderAPIController::class, 'index'])->name('order.index');

Route::post('order', [OrderAPIController::class, 'store'])->name('order.store');

Route::get('order/{order}', [OrderAPIController::class, 'show'])->name('order.show');

Route::get('product', [ProductAPIController::class, 'index'])->name('product.index');

Route::post('product', [ProductAPIController::class, 'store'])->name('product.store');

Route::get('product/{product}', [ProductAPIController::class, 'show'])->name('product.show');

Route::put('product/edit/{product}', [ProductAPIController::class, 'update'])->name('product.update');

Route::delete('product/{product}', [ProductAPIController::class, 'destroy'])->name('product.delete');


