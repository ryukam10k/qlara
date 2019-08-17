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
Route::get('deal/edit', 'DealController@edit');
Route::post('deal/edit', 'DealController@update');
Route::get('retouchRequest', 'DealController@retouchRequest');
Route::get('deal/show', 'DealController@show');
Route::get('deal/download', 'DealController@download');

/** Customer */
Route::get('customer', 'CustomerController@index');
Route::get('customer/add', 'CustomerController@add');
Route::post('customer/add', 'CustomerController@create');
Route::get('customer/edit', 'CustomerController@edit');
Route::post('customer/edit', 'CustomerController@update');
Route::get('customer/del', 'CustomerController@delete');
Route::post('customer/del', 'CustomerController@remove');

/** DealCategory */
Route::get('dealcategory', 'DealCategoryController@index');
Route::get('dealcategory/add', 'DealCategoryController@add');
Route::post('dealcategory/add', 'DealCategoryController@create');
Route::get('dealcategory/edit', 'DealCategoryController@edit');
Route::post('dealcategory/edit', 'DealCategoryController@update');
Route::get('dealcategory/del', 'DealCategoryController@delete');
Route::post('dealcategory/del', 'DealCategoryController@remove');
