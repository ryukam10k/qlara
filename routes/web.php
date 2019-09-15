<?php

/* Auth */
Auth::routes();

Route::get('localLogin', 'Auth\LoginController@localLogin');

/** SocialLogin */
Route::get('login/{provider}', 'Auth\LoginController@socialLogin');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'DealController@index');

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
    Route::get('deal/delivery', 'DealController@delivery');
    Route::post('deal/delivery', 'DealController@exeDelivery');

    /** Customer */
    Route::resource('customers', 'CustomerController');

    /** DealCategory */
    Route::resource('dealCategories', 'DealCategoryController');
});
