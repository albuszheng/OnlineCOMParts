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

Route::get('/404', function() {
    return view('layouts.404');
});

Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/products/{product}', 'ProductController@detail');
Route::get('/products/l/{category}', 'ProductController@kindList');
Route::get('/products', 'ProductController@index');
Route::get('/product/new', 'ProductController@create');
Route::post('/product', 'ProductController@store');


Route::get('/transaction/new/{productID}', 'TransactionController@create');
Route::post('/transaction', 'TransactionController@store');
Route::get('/transaction/{record}', 'TransactionController@show');
Route::get('/transaction', 'TransactionController@index');

Route::get('/store/list', 'StoreController@index');
Route::get('/store/{store}', 'StoreController@show');

Route::get('/dashboard/{store}', 'SalespersonController@index');
Route::get('/dashboard/{store}/inventory/list', 'SalespersonController@inventory');
Route::post('/dashboard/{store}/update-inventory/{product}', 'SalespersonController@updateInventory');
Route::post('/dashboard/{store}/new-product', 'SalespersonController@newProduct');

Route::get('/customer/{customer}/transaction-history', 'CustomerController@transactionHistory');
//Route::get('customer/{customer}/')

Route::get('/test', 'HomeController@test');
