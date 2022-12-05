<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductAPIController;

use App\Models\User;

use App\Models\Product;

use App\Models\Order;

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

Route::get('/product', [ProductAPIController::class, 'index']);

Route::post('/product', [ProductAPIController::class, 'store']);

Route::put('/product/{id}', [ProductAPIController::class, 'update']);

Route::delete('/product/{id}', [ProductAPIController::class, 'destroy']);

# testing relasi antar tabel dengan JSON
Route::get('user/{user}', function ($id) {
    $user = User::with('products')->find($id);
    return response()->json($user, 200);
});

Route::get('product/{product}', function ($id) {
    $product = Product::with('users')->find($id);
    return response()->json($product, 200);
});

Route::get('order/{order}', function ($id) {
    $order = Order::with('products')->find($id);
    return response()->json($order, 200);
});
