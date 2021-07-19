<?php

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
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

Route::redirect('/', '/home');

Auth::routes();

// Route::resource('home', App\Http\Controllers\ProductController::class);

Route::get('/products/search', [App\Http\Controllers\ProductController::class, 'search'])->name('products.search');

Route::get('/add-to-cart/{product}', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add')->middleware('auth');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index')->middleware('auth');

Route::get('/cart/destroy/{itemId}', [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy')->middleware('auth');

Route::get('/cart/update/{product}', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update')->middleware('auth');

Route::get('/cart/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('cart.checkout')->middleware('auth');

Route::resource('orders', App\Http\Controllers\OrderController::class);

Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])->middleware('auth')->name('pay');


Route::resource('shops', App\Http\Controllers\ShopController::class)->middleware('auth');

Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback'])->middleware('auth');

// Route::view('/paystack/checkout','paystack/checkout')->name('paystack.checkout');

Route::get('home', [App\Http\Controllers\ProductController::class, 'index'])->name('home');

Route::get('/cart/apply-coupon', [App\Http\Controllers\CartController::class, 'applyCoupon'])->name('cart.coupon')->middleware('auth');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/order/pay/{suborder}', [App\Http\Controllers\SubOrderController::class, 'pay'])->name('order.pay');

Route::group(['prefix' => 'seller', 'middleware' => 'auth', 'as' => 'seller.'], function() {
    Route::redirect('/', 'seller/orders');
    Route::resource('/orders', App\Http\Controllers\Seller\OrderController::class);
    Route::get('/orders/delivered/{suborder}', [App\Http\Controllers\Seller\OrderController::class, 'markDelivered'])->name('order.delivered');
});

Route::get('/test', function(){
    $o = Order::find(1);

    $o->generateSubOrders();
});