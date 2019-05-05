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
    'as' => 'contents.index'
]);

Route::get('news', [
    'uses' => 'NewsController@index',
    'as' => 'news'
]);

//Route::resource('lots', 'LotsController');

Route::get('lots', [
    'uses' => 'LotsController@index',
    'as' => 'lots'
]);

Route::get('lots/{id}', [
    'uses' => 'LotsController@getLot',
    'as' => 'lots.lot'
]);

Route::post('lots/bid', [
    'uses' => 'LotsController@postBid',
    'as' => 'lots.lot.bid'
]);

Route::get('createLots', [
      'uses' => 'LotsController@getCreate',
      'as' => 'contents.createLots'
]);

Route::post('created', [
    'uses' => 'LotsController@store',
    'as' => 'contents.lots'
]);

Route::group(['prefix' => 'admin'], function(){
	
	Route::get('', 'PagesController@getAdmin');

	Route::get('allLots', [
        'uses' => 'PagesController@getLots',
        'as' => 'admin.adm_lots'
    ]);

});

Route::get('/aboutme', [
    'uses' => 'PagesController@getAboutMe',
    'as' => 'aboutme'
]);

Route::get('/contact', [
    'uses' => 'PagesController@getContact',
    'as' => 'contact'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');