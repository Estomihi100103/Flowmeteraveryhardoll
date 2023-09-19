<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CreateCategory;

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
Route::get('/search', [\App\Http\Controllers\Controller::class, 'searchProduct'])->name('products.search');



//product
Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index'])->name('product.products');
Route::get('/product/{product:slug}', [\App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
Route::get('/live-search', [\App\Http\Controllers\ProductController::class, 'searchCategory'])->name('live.search');


//category
Route::get('/category', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category.categories');
Route::get('/category/{category:slug}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');


//contact us
Route::get('/contact', [\App\Http\Controllers\Controller::class, 'contactUs'])->name('contact.index');



//admin
Route::resource('admin/dashboard', \App\Http\Controllers\AdminDashboardController::class);
Route::resource('admin/categories', \App\Http\Controllers\AdminCategoryController::class)->name('index', 'admin.categories.index');
Route::resource('admin/products', \App\Http\Controllers\AdminProductController::class)->name('index', 'admin.products.index');