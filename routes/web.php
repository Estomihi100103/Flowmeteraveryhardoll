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


Route::get('/', [\App\Http\Controllers\Controller::class, 'home'])->name('home');

//product
Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index'])->name('product.products');
Route::get('/product/{product:slug}', [\App\Http\Controllers\ProductController::class, 'show'])->name('product.show');

//category
Route::get('/category', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category.categories');
Route::get('/category/{category:slug}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');


//contact us
Route::get('/contact', [\App\Http\Controllers\Controller::class, 'contactUs'])->name('contact.index');