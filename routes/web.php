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
Route::get('/blog','PagesController@blog')->name('blog');
Route::get('/fipulp','PagesController@fipulp')->name('fipulp');
Route::get('/fipulp/','PagesController@fipulp')->name('fipulp');
Route::get('/admin','AdminController@redirect')->name('admin');
Route::get('/oops','AdminController@sorry')->name('sorry');

Route::get('/jurnal/{id}', 'PagesController@detailjurnal')->name('detailjurnal');

Route::get('/blog/detail/{id}','PagesController@detailblog')->name('detailblog');


Route::get('/biodegum/blog/detail/{id}','PagesController@detailblogbiodegum')->name('detailblogbiodegum');

Route::get('/fipulp/blog/detail/{id}','PagesController@detailblogfipulp')->name('detailblogfipulp');

//admin
Route::group(['middleware' => ['auth','superuser']], function() {
	Route::get('/admin/dashboard',array('as'=>'admindashboard','uses'=>'AdminController@index'));
	Route::get('/admin/asriw/dashboard',array('as'=>'suasridashboard','uses'=>'Admin\Asriwulandari\AsriController@index'));
	Route::get('/admin/biodegum/dashboard',array('as'=>'subiodegumdashboard','uses'=>'Admin\Biodegum\BiodegumController@index'));
	Route::get('/admin/fipulp/dashboard',array('as'=>'sufipulpdashboard','uses'=>'Admin\Fipulp\FipulpController@index'));
});

Route::group(['namespace' => 'Admin\Asriwulandari','middleware' => ['auth','asriwulandari']], function() {
	Route::get('/asriw/dashboard',array('as'=>'asridashboard','uses'=>'AsriController@index'));
	Route::resource('asriw/gallery', 'GalleryController');
	Route::resource('asriw/achievement', 'AchievementController');
	Route::resource('asriw/about', 'AboutController');
	Route::resource('asriw/pagesetting', 'PagesController');
	Route::resource('asriw/hasilriset', 'HasilRisetController');
	Route::resource('asriw/blog', 'BlogController', ['names' => ['index' => 'asriwulandari.blog.index']]);
	Route::resource('asriw/journal', 'JournalController', ['names' => ['index' => 'asriwulandari.journal.index']]);
});

Route::group(['namespace' => 'Admin\Biodegum','middleware' => ['auth','biodegum']], function() {
	Route::get('/biodegum/dashboard',array('as'=>'biodegumdashboard','uses'=>'BiodegumController@index'));
	Route::resource('/biodegum/dashboard/posts','BiodegumPostsController', ['names' => ['index' => 'biodegum.posts.index']]);
	Route::resource('/biodegum/dashboard/portfolio','BiodegumPortfolioController', ['names' => ['index' => 'biodegum.portfolio.index']]);
	Route::resource('/biodegum/dashboard/pages','BiodegumPagesController');
});

Route::group(['namespace' => 'Admin\Fipulp','middleware' => ['auth','fipulp']], function() {
	Route::get('/fipulp/dashboard',array('as'=>'fipulpdashboard','uses'=>'FipulpController@index'));
	Route::resource('/fipulp/dashboard/posts','FipulpPostsController', ['names' => ['index' => 'fipulp.posts.index']]);
	Route::resource('/fipulp/dashboard/gallery','FipulpGalleryController', ['names' => ['index' => 'fipulp.gallery.index']]);
	Route::resource('/fipulp/dashboard/pages','FipulpPagesController');
});

Auth::routes();
Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout');


Route::post('/upload', 'AdminController@Upload')->name('upload');