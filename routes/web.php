<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::get('/project', [HomeController::class, 'index'])->name('home');
Route::get('/project/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/project/all-product', [HomeController::class, 'product'])->name('website.all-product');
Route::get('/project/product-detail/{id}', [HomeController::class, 'productDetail'])->name('website.product-detail');
//Route::get('/project/product-category/{id}', [HomeController::class, 'category'])->name('product.category');
Route::get('/project/contact-us', [HomeController::class, 'contact'])->name('contact');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



    Route::get('/admin/create-admin', [AdminUserController::class, 'index'])->name('admin.user-add');
    Route::post('/admin/created-admin', [AdminUserController::class, 'create'])->name('admin.create-admin');
    Route::get('/admin/manage-admin', [AdminUserController::class, 'manage'])->name('admin.manage-admin');

    Route::get('/category/add', [CategoryController::class, 'index'])->name('category.add');
    Route::post('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/category/manage', [CategoryController::class, 'manage'])->name('category.manage');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');


    Route::get('/admin/add-product', [ProductController::class, 'index'])->name('admin.add-product');
    Route::get('/admin/manage-product', [ProductController::class, 'manage'])->name('admin.manage-product');
    Route::get('/product/product-detail/{id}', [ProductController::class, 'detail'])->name('product.detail');
    Route::post('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/admin/update-course-status/{id}', [ProductController::class, 'updateStatus'])->name('admin.update-product-status');


    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');


    Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
});

