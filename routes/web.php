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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@getIndex']);
Route::get('/about', ['as' => 'about', 'uses' => 'PagesController@getAbout']);
Route::get('/services', ['as' => 'services', 'uses' => 'PagesController@getServices']);
Route::get('/gallery', ['as' => 'gallery', 'uses' => 'PagesController@getGallery']);
Route::get('/origin', ['as' => 'origin', 'uses' => 'PagesController@getOrigin']);
Route::get('/products', ['as' => 'products', 'uses' => 'PagesController@getProducts']);
Route::get('/contact', ['as' => 'contact', 'uses' => 'PagesController@getContact']);
Route::post('/contact', ['as' => 'contact.post', 'uses' => 'PagesController@postContact']);