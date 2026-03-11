<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/shop', [PageController::class, 'shop'])->name('shop');
Route::get('/product/{slug}', [PageController::class, 'product'])->name('product');
Route::get('/cart', [PageController::class, 'cart'])->name('cart');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
