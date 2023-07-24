<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing.index', [
        'title' => 'Home',
    ]);
})->name('index');

Route::get('wishlist', [LandingController::class, 'wishlist'])->name('landing.wishlist');
Route::get('details/{slug}', [LandingController::class, 'details'])->name('landing.details');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('role')->name('admin.')->prefix('admin')->group(function(){
    Route::resource('/', AdminController::class);
    Route::get('/products', [AdminController::class, 'products'])->name('products');
    Route::get('/rewards', [AdminController::class, 'rewards'])->name('rewards');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
