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

Route::get('/',array('as'=>'home','uses'=>'PagesController@Home'));
Route::get('/biodegum',array('as'=>'biodegum','uses'=>'PagesController@biodegum'));
Route::get('/fipulp',array('as'=>'fipulp','uses'=>'PagesController@fipulp'));
Route::get('/jurnal/detail',array('as'=>'detailjurnal','uses'=>'PagesController@detailjurnal'));
Route::get('/blog',array('as'=>'detailblog','uses'=>'PagesController@detailblog'));

Auth::routes();

Route::get('/login', 'PagesController@Login')->name('login');
