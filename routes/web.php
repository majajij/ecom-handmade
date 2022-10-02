<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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

Route::fallback(function () {
    return redirect('404');
});
Route::get('404', function () {
    return view('404');
});
Route::get('/', [HomeController::class, 'index']);
Route::get('/quick-view-product/{id}', [ProductController::class, 'quickview'])->name('quick-view-product');
Route::resource('products', ProductController::class);
Route::get('shop', [ProductController::class, 'shop']);
Route::post('shop', [ProductController::class, 'shop'])->name('shopFilter');
Route::post('add_to_cart', [CartController::class, 'addToCart']);
Route::get('cart', [CartController::class, 'showCart']);
Route::get('clear_cart', [CartController::class, 'clearCart']);
Route::get('remove_from_cart/{id}', [CartController::class, 'removeFromCart']);
Route::post('update_cart', [CartController::class, 'updateCart'])->name('update_cart');

// ['middleware' => ['auth', 'verify']]

require __DIR__ . '/auth.php';
