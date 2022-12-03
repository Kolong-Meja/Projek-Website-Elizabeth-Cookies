<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

# admin page route
Route::resource('admin', AdminController::class);

# home page route
Route::get('/', [HomeController::class, 'index']);

# route login page
Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

# rote post login page
Route::post('login', [AuthenticatedSessionController::class, 'store']);

# route register page
Route::get('register', [RegisteredUserController::class, 'create'])->name('register');

# route post register page
Route::post('register', [RegisteredUserController::class, 'store']);

# route logout
Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

# product page route
Route::resource('/product', ProductController::class);

# contact page route
Route::get('/contact', [ContactController::class, 'index']);

# about page route
Route::get('/about', [AboutController::class, 'index']);

# profile page route
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
