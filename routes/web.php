<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/all-product', [HomeController::class, 'product'])->name('all.product');
Route::get('/product-detail/', [HomeController::class, 'productDetail'])->name('product.detail');
Route::get('/product-category/{id}', [HomeController::class, 'category'])->name('product.category');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
