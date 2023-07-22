<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;
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


Route::middleware('role')->name('admin.')->prefix('admin')->group(function(){
    Route::resource('/', AdminController::class);
    Route::get('/products', [AdminController::class, 'products'])->name('products');
    Route::get('/rewards', [AdminController::class, 'rewards'])->name('rewards');
});

// Route::get('/admin/products', [AdminController::class, 'products'])->middleware('role')->name('products');

Route::get('wishlist', [LandingController::class, 'wishlist'])->name('landing.wishlist');
Route::get('details/{slug}', [LandingController::class, 'details'])->name('landing.details');
Route::resource('/', LandingController::class);
