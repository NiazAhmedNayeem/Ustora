<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ProductController;

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



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



    Route::get('/admin/create-admin', [AdminUserController::class, 'index'])->name('admin.user-add');
    Route::post('/admin/created-admin', [AdminUserController::class, 'create'])->name('admin.create-admin');
    Route::get('/admin/manage-admin', [AdminUserController::class, 'manage'])->name('admin.manage-admin');


    Route::get('/admin/add-product', [ProductController::class, 'index'])->name('admin.add-product');
    Route::get('/admin/manage-product', [ProductController::class, 'manage'])->name('admin.manage-product');
});


//Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
