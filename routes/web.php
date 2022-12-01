<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\TestController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\ContactController;

use App\Http\Controllers\AboutController;

use App\Http\Controllers\Auth\AuthenticatedSessionController;

use App\Http\Controllers\Auth\RegisteredUserController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

# route test page
// Route::get('/user', [TestController::class, 'show_data']);

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

// DIPAKAI BELAKANGAN DAN JANGAN DIHAPUS!!!

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
