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

Route::group([], function (){
    Route::get('/nuestros-filtros', 'ProductCategoryController@usProducts')->name('usProducts');
    Route::get('/product-category/filtros', 'ProductCategoryController@filters')->name('filters');
    Route::get('/product-category/accesorios', 'ProductCategoryController@accessories')->name('accesories');
    Route::get('/product-category/termos', 'ProductCategoryController@thermos')->name('thermos');
});

Route::group([], function (){
    Route::get('/product/{name}', 'ProductCategoryController@getProduct')->name('getProduct');
    Route::get('/cart', 'ShoppingCartController@shoppingCart')->name('shoppingCart');
    Route::get('/add_cart', 'ShoppingCartController@addCart')->name('add_cart');
    Route::post('/remove_cart', 'ShoppingCartController@removeCart')->name('remove_cart');
    Route::get('/checkout', 'OrderController@checkout')->name('checkout');
    Route::post('/create', 'OrderController@order')->name('create');
    Route::get('/congratulations/{uid}', 'MailController@congratulations')->name('congratulations');
});

Route::name('printPDF')->get('/imprimir/{uid}', 'MailController@printPDF');
Route::get('/pdf', 'MailController@showpdf')->name('showpdf');

//administrador
Route::get('/admin', 'LoginController@index')->name('login');
Route::group([], function (){
    Route::post('/loggedIn', 'LoginController@loggedIn')->name('loggedIn');
    Route::get('/home', 'DashboardController@index')->name('dashboard');
    Route::get('/create', 'AdminController@index')->name('create');
    Route::post('/created', 'AdminController@createProduct')->name('created');
    Route::get('/select', 'AdminController@storeProduct')->name('select');
    Route::get('/edit/{id}', 'AdminController@editProduct')->name('edit');
    Route::post('/edited/{id}', 'AdminController@updateProduct')->name('edited');
    Route::get('/suspend/{id}', 'AdminController@disableProduct')->name('suspend');
    Route::get('/return', 'AdminController@returnProduct')->name('return');
    Route::get('/returned/{id}', 'AdminController@returneProduct')->name('returned');
    Route::get('/logout', 'LoginController@logout')->name('logout');
});
