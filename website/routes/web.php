<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/products/{product}', 'ProductController@detail');
Route::get('/products/l/{category}', 'ProductController@kindList');
Route::get('/products', 'ProductController@index');

Route::get('/shopping-art', 'TransactionController@shoppingCart');
Route::get('/transaction/make-order', 'TransactionController@makeOrder');
Route::post('/transaction/make-order/purchase', 'TransactionController@purchase');
Route::get('/transaction/r/{record}', 'TransactionController@record');

Route::get('/store/list', 'StoreController@index');
Route::get('/store/{store}/contact', 'StoreController@contact');
Route::get('/store/{store}/products', 'StoreController@products');
Route::get('/store/{store}/salesperson', 'StoreController@salesperson');

Route::get('/dashboard/{store}', 'SalespersonController@index');
Route::get('/dashboard/{store}/inventory/list', 'SalespersonController@inventory');
Route::post('/dashboard/{store}/update-inventory/{product}', 'SalespersonController@updateInventory');
Route::post('/dashboard/{store}/new-product', 'SalespersonController@newProduct');

Route::get('/customer/{customer}/transaction-history', 'CustomerController@transactionHistory');
//Route::get('customer/{customer}/')

Route::get('/test', 'HomeController@test');
