<?php

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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/nuestros-filtros', 'ProductCategoryController@usProducts')->name('usProducts');
Route::get('/product-category/filtros', 'ProductCategoryController@filters')->name('filters');
Route::get('/product-category/accesorios', 'ProductCategoryController@accessories')->name('accesories');
Route::get('/product-category/termos', 'ProductCategoryController@thermos')->name('thermos');

Route::get('/product/{name}', 'ProductCategoryController@getProduct')->name('getProduct');
Route::get('/cart', 'OrderController@shoppingCart')->name('shoppingCart');
Route::get('/checkout', 'OrderController@checkout')->name('checkout');