<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::get('products/list/{page}', 'API\ProductController@list');
    Route::get('products/{product}/show', 'API\ProductController@show');
    Route::delete('products/{product}', 'API\ProductController@destroy');
    Route::post('products/', 'API\ProductController@store');
    Route::put('products/{product}', 'API\ProductController@update');
    Route::post('products/{product}/images', 'API\ProductController@uploadImages');
    Route::put('products/{product}/images', 'API\ProductController@deleteImages');
    Route::post('logout', 'Auth\LoginController@logout');
});
Route::post('login', 'Auth\LoginController@login');
