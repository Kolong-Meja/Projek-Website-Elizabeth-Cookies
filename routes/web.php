<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;

use App\Http\Controllers\Auth\RegisteredUserController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\TestController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\ContactController;

use App\Http\Controllers\AboutController;

use App\Http\Controllers\OrderController;

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

# Route for Order (User)
Route::get('order', [OrderController::class, 'index'])->name('order.index');
Route::get('order/export', [OrderController::class, 'export'])->name('order.export');
Route::get('order/create/{product_name}', [OrderController::class, 'create'])->name('order.create');
Route::post('order/{product_name}', [OrderController::class, 'store'])->name('order.store');
Route::get('order/{user_id}', [OrderController::class, 'show'])->name('order.show');

# Route for Home (User)
Route::get('/', [HomeController::class, 'index'])->name('home.index');

# Route for Login account
Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);

# Route for Register account
Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'store']);

# Route for Logout account
Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

# Route for Product
Route::resource('product', ProductController::class);

# Route for Contact
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');

# Route for About
Route::get('about', [AboutController::class, 'index'])->name('about.index');

# Route for Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


// DIPAKAI BELAKANGAN DAN JANGAN DIHAPUS!!!

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/user', [TestController::class, 'show_data']);
// Route::get('admin', [AdminController::class, 'index'])->name('admin.index');


