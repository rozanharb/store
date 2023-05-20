<?php

use Illuminate\Support\Facades\Route;

use App\Models\Category;
use App\Models\products;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use GuzzleHttp\Psr7\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/products/create', function () {
    return view('admin.products.create');
});
Route::get('admin/products', function () {
    return view('admin.products.index');
});
////Dashboard Routes
Route::get('products', [ProductsController::class, 'index']);
Route::get('products/create', [ProductsController::class, 'create']);
Route::get('products/store', [ProductsController::class, 'store']);
Route::get('products/edit/{id}', [ProductsController::class, 'edit']);
Route::get('products/delete/{id}', [ProductsController::class, 'destroy']);
Route::get('products/update/id', [ProductsController::class, 'update']);

Route::get('categories', [CategoryController::class, 'index']);
Route::get('categories/create', [CategoryController::class, 'create']);
Route::get('categories/store', [CategoryController::class, 'store']);
Route::get('categories/edit/{id}', [CategoryController::class, 'edit']);
Route::get('categories/delete/{id}', [CategoryController::class, 'destroy']);
Route::get('categories/update/id', [CategoryController::class, 'update']);

Route::get('orders', [OrdersController::class, 'index']);
Route::get('orders/create', [OrdersController::class, 'create']);
Route::get('orders/store', [OrdersController::class, 'store']);
Route::get('orders/edit/{id}', [OrdersController::class, 'edit']);
Route::get('orders/delete/{id}', [OrdersController::class, 'destroy']);
Route::get('orders/update/id', [OrdersController::class, 'update']);

////Front Page Routes
Route::get('/', [FrontController::class, 'index']);
