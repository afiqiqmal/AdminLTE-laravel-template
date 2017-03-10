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

Route::Auth();

Route::group(['middleware' => 'guest'], function () {
	Route::get('/', ['as' => 'dashboard','uses' => 'IndexController@index']);
	Route::get('/widget', ['as' => 'widget','uses' => 'WidgetController@index']);
	Route::get('/forms', ['as' => 'forms','uses' => 'FormController@index']);
	Route::get('/profile', ['as' => 'profile','uses' => 'ProfileController@index']);
	Route::get('/chart', ['as' => 'chart','uses' => 'ChartController@index']);
	Route::get('/icons', ['as' => 'icons','uses' => 'IconController@index']);
	Route::get('/buttons', ['as' => 'buttons','uses' => 'ButtonController@index']);
	Route::get('/timeline', ['as' => 'timeline','uses' => 'TimelineController@index']);
	Route::get('/modals', ['as' => 'modals','uses' => 'ModalController@index']);
	Route::get('/tables', ['as' => 'tables','uses' => 'TableController@index']);
	Route::get('/invoice', ['as' => 'invoice','uses' => 'InvoiceController@index']);
});