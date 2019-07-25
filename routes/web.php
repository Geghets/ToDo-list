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

Route::get('main', 'MainController@index')->name('main');

Route::get('add', 'AddController@index')->name('add');

Route::post('add_action', 'AddController@Store')->name('add_action');

/*Route::delete('del', 'MainController@destroy')->name('del');*/

Route::delete('del/{id}', 'MainController@destroy')->name('del');

Route::get('edit/{id}', 'MainController@show')->name('edit');

Route::post('update/{id}', 'MainController@update')->name('update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
