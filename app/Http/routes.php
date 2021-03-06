<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Controller@index', function () {
    return view('welcome')->name('home');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'ProductController@index', function () {

        return view('layouts.default');
    });

    Route::resource('products', 'ProductController');
});
Route::get('locale/{locale}', 'Controller@changeLocale')->name('locale');

Route::auth();

