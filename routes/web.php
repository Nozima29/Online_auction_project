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

Route::get('/', [				
				'uses' => 'LotsController@recentLots',
				'as'   => 'contents.index'
]);
Route::resource('news', 'NewsController');

Route::resource('lots', 'LotsController');

Route::get('createLots', [
					  'uses' => 'LotsController@getCreate',
					  'as' =>'contents.createLots'
]);

Route::post('created', [
					'uses'=>'LotsController@store',
					'as'=> 'contents.lots'
]);

Route::get('/search', [
		'uses'=>'LotsController@search',
		'as'=>'search'
]);

Route::get('post/create', 'PostController@create');
Route::post('post', 'PostController@store');

Route::group(['prefix'=>'admin'], function(){
	
	Route::get('', 'PagesController@getAdmin');

	Route::get('allLots', [
					'uses'=>'PagesController@getLots',
					'as'=>'admin.adm_lots'
				]);

});

Route::get('/aboutme', function () {
    return view('aboutme');
});
Route::get('/contact', function () {
    return view('contact_us');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');