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
    return view('index');
});
Route::get('/biodegum',array('as'=>'biodegum','uses'=>'PagesController@biodegum'));
Route::get('/fipulp',array('as'=>'fipulp','uses'=>'PagesController@fipulp'));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
