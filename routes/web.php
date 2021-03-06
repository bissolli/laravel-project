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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return redirect('/home');
    });

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/dishes/create', 'DishesController@create')->name('dishes.create');
    Route::post('/dishes/store', 'DishesController@store')->name('dishes.store');

});


