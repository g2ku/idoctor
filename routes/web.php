<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ProductsController::class, 'index'])->name('home');
Route::get('/products/search', [ProductsController::class, 'search'])->name('products.search');
Route::get('/products/show', [ProductsController::class, 'show']) ->name('product.show');
Route::post('/send-email', [\App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');
Route::post('/products/filter', [ProductsController::class, 'filterProducts'])->name('products.filter');
Route::resource('products', ProductsController::class);
