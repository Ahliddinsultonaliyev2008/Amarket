<?php

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

Route::middleware('guest')->group(function () {
    Route::get('auth/login', [\App\Http\Controllers\AuntController::class, 'login'])->name('auth.login');
    Route::post('auth/login', [\App\Http\Controllers\AuntController::class, 'loginStore'])->name('auth.store');
    Route::get('/add-product/{product}', [\App\Http\Controllers\CartController::class, 'addProduct'])->name('add-product');
    Route::get('/remove-product/{product}', [\App\Http\Controllers\CartController::class, 'removeProduct'])->name('remove-product');
    Route::get('/cart', [\App\Http\Controllers\CartController::class, 'cart'])->name('cart');
    Route::get('/product', [\App\Http\Controllers\prodeuctController::class, 'index'])->name('product.index');

    Route::get('/', function () {
        return view('home.index');
    })->name('home');

    Route::get('/about', function () {
        return view('about.index');
    })->name('about');

});

Route::middleware('auth')->group(function () {
    Route::post('auth/logout', [\App\Http\Controllers\AuntController::class, 'logout'])->name('auth.logout');
    Route::name('admin.')->prefix('admin')->group(function () {
        Route::get('dashboard/index', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
        Route::resource('products', \App\Http\Controllers\ProductController::class);
        Route::resource('orders', \App\Http\Controllers\OrderController::class);
    });
});
