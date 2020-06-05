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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Customer
Route::get('customer/create', 'CustomerController@create')->middleware('auth');
Route::post('customer/store', 'CustomerController@store')->middleware('auth');
Route::get('customer/edit', 'CustomerController@edit')->middleware('auth');
Route::post('customer/update', 'CustomerController@update')->middleware('auth');
Route::get('customer/show', 'CustomerController@show')->middleware('auth');
Route::get('customer/destroy', 'CustomerController@destroy')->middleware('auth');
Route::get('customers', 'CustomerController@index')->middleware('auth');

//Products Type
Route::get('type/create', 'TypeController@create')->middleware('auth');
Route::post('type/store', 'TypeController@store')->middleware('auth');
Route::get('type/edit', 'TypeController@edit')->middleware('auth');
Route::post('type/update', 'TypeController@update')->middleware('auth');
Route::get('type/show', 'TypeController@show')->middleware('auth');
Route::get('type/destroy', 'TypeController@destroy')->middleware('auth');
Route::get('types', 'TypeController@index')->middleware('auth');

//Products
Route::get('product/create', 'ProductController@create')->middleware('auth');
Route::post('product/store', 'ProductController@store')->middleware('auth');
Route::get('product/edit', 'ProductController@edit')->middleware('auth');
Route::post('product/update', 'ProductController@update')->middleware('auth');
Route::get('product/show', 'ProductController@show')->middleware('auth');
Route::get('product/destroy', 'ProductController@destroy')->middleware('auth');
Route::get('products', 'ProductController@index')->middleware('auth');