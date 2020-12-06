<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productsController;
use App\Http\Controllers\ordersController;

Route::get('/', function () {
    return view('home');
});

Route::resource('/product', productsController::class);
Route::resource('/order', ordersController::class);

// Route::get('/product', [productsController::class, 'index']);
// Route::get('/product/addproducts', [productsController::class, 'create']);
// Route::post('/product/addproducts/submitproducts', [productsController::class, 'store']);