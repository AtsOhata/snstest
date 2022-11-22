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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('sns/home', 'Admin\SnsController@init');
    Route::post('sns/home', 'Admin\SnsController@create');
    Route::get('sns/home/delete', 'Admin\SnsController@delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
