<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HistoryController;
use App\Models\Order;
use App\Models\Product;

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

Route::get('/', [PagesController::class, 'index']);



//history
Route::get('/history', [HistoryController::class, 'index']);
//history


// Order
Route::get('/order', [OrderController::class, 'index']);
// order


// produk
Route::get('/product', [ProductController::class, 'index']);
Route::get('/create', [ProductController::class, 'create']);
Route::post('/product', [ProductController::class, 'store']);
Route::delete('{product}', [ProductController::class, 'destroy']);
Route::get('/product/{product}/edit', [ProductController::class, 'edit']);
Route::patch('/product/{product}', [ProductController::class, 'update']);
// produk