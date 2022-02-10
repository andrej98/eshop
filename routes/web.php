<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\EmptyCart;
use App\Http\Middleware\EmptyDeliveryPayment;
use Illuminate\Http\Request;
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
// Route::get('clients',function(Request $request){
//     return view('clients', ['clients' => $request->user()->clients]);
// })->middleware('auth');

Route::resource('products', 'ProductController');
Route::resource('orders', 'OrderController')->middleware(EmptyCart::class,EmptyDeliveryPayment::class);

Route::get('/', 'ProductController@index')->name('home');

Auth::routes();
Route::get('/category/{id}', 'CategoryController@show')->name('category');
Route::post('/add-to-cart/{id}', 'CartController@modifyCart')->name('cart.add');
Route::get('/shopping-cart1', 'CartController@cart1')->name('cart1');
Route::get('/shopping-cart2', 'CartController@cart2')->middleware(EmptyCart::class)->name('cart2');
Route::post('/shopping-cart2', 'CartController@deliveryPayment')->middleware(EmptyCart::class)->name('cart.delivery.payment');
Route::get('/shopping-cart3', 'CartController@cart3')->middleware(EmptyCart::class,EmptyDeliveryPayment::class)->name('cart3');
Route::get('/search', 'ProductController@search')->name('search');
Route::view('/admin', 'admin')->middleware('admin');
