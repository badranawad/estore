<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;

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
// Dashboard Routes
Route::prefix('admin')->group(function(){
    Route::get('products', [ProductController::class, 'index']);
    Route::get('products/create', [ProductController::class, 'create']);
    Route::post('products/store', [ProductController::class, 'store']);
    Route::get('products/edit/{id}', [ProductController::class, 'edit']);
    Route::get('products/delete/{id}', [ProductController::class, 'destroy']);
    Route::patch('products/update/{id}', [ProductController::class, 'update']);

    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('categories/create', [CategoryController::class, 'create']);
    Route::post('categories/store', [CategoryController::class, 'store']);
    Route::get('categories/edit/{id}', [CategoryController::class, 'edit']);
    Route::get('categories/delete/{id}', [CategoryController::class, 'destroy']);
    Route::patch('categories/update/{id}', [CategoryController::class, 'update']);
});


//Front Page Routes
Route::get('/', [FrontController::class, 'index']);
