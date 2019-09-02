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
    return view('home');
});

/* Auth */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {
    /* Users */
    Route::resource('users', 'UserController');

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
    Route::resource('customers', 'CustomerController');

    /** DealCategory */
    Route::resource('dealCategories', 'DealCategoryController');
});