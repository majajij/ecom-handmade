<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
// Route::fallback(function () {
//     return view('404');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/quick-view-product/{id}', [ProductController::class, 'quickview'])->name('quick-view-product');
Route::resource('products', ProductController::class);
Route::get('shop', [ProductController::class, 'shop']);
Route::post('shopFilter', [ProductController::class, 'shop']);
