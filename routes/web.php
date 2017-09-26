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

Route::get('/','PagesController@Home')->name('home');
Route::get('/biodegum','PagesController@biodegum')->name('biodegum');
Route::get('/fipulp','PagesController@fipulp')->name('fipulp');
Route::get('/jurnal/detail','PagesController@detailjurnal')->name('detailjurnal');
Route::get('/blog','PagesController@detailblog')->name('detailblog');

//admin
Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function() {
	Route::get('admin/dashboard', 'DashboardController@index')->name('dashboard');
	Route::get('admin', 'Asriwulandari\DashboardController@index')->name('dashboard');
	Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
