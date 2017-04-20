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
})->middleware('role:Visiter');

Route::get('/404', function() {
    return view('layouts.404');
});

Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/products/{product}', 'ProductController@detail')->middleware('role:Visiter');
Route::get('/products/l/{category}', 'ProductController@kindList')->middleware('role:Visiter');
Route::get('/products', 'ProductController@index')->middleware('role:Visiter');
Route::get('/product/new', 'ProductController@create')->middleware(['auth','role:Salesperson']);
Route::post('/product', 'ProductController@store')->middleware(['auth','role:Salesperson']);


Route::get('/transaction/new/{productID}', 'TransactionController@create')->middleware(['auth', 'role:Visiter']);
Route::post('/transaction', 'TransactionController@store')->middleware(['auth', 'role:Visiter']);
Route::get('/transaction/{record}', 'TransactionController@show')->middleware(['auth', 'role:Visiter']);
Route::get('/transaction', 'TransactionController@index')->middleware(['auth', 'role:Visiter']);

Route::get('/store/list', 'StoreController@index');
Route::get('/store/{store}', 'StoreController@show');

Route::get('/dashboard', 'SalespersonController@index')->middleware('role:Salesperson');
Route::get('/dashboard/inventory/list', 'SalespersonController@inventory')->middleware('role:Salesperson');
Route::post('/dashboard/update-inventory/{product}', 'SalespersonController@updateInventory')->middleware('role:Salesperson');
Route::post('/dashboard/new-product', 'SalespersonController@newProduct')->middleware('role:Salesperson');

Route::get('/test', 'HomeController@test');
