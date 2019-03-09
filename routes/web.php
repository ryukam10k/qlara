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

/** Deal */
Route::get('deal', 'DealController@index');
Route::get('deal/add', 'DealController@add');
Route::post('deal/add', 'DealController@create');

/** Customer */
Route::get('customer', 'CustomerController@index');
Route::get('customer/add', 'CustomerController@add');
Route::post('customer/add', 'CustomerController@create');

/** DealCategory */
Route::get('dealcategory', 'DealCategoryController@index');
Route::get('dealcategory/add', 'DealCategoryController@add');
Route::post('dealcategory/add', 'DealCategoryController@create');
