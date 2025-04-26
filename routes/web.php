<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Home page redirect to products
Route::get('/', function () {
    return redirect()->route('products.index');
});

// Product CRUD routes
Route::resource('products', ProductController::class);

// Verification form route
Route::get('/verify', [ProductController::class, 'showForm'])->name('products.showForm');

// Verification submit route
Route::post('/verify', [ProductController::class, 'verify'])->name('products.verify');
Route::get('/verify', [ProductController::class, 'showForm'])->name('products.verify-form');

// QR code generation route
Route::get('/products/{code}/qrcode', [ProductController::class, 'generateQRCode'])->name('products.qrcode');
