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
    return view('homepage');
});
	
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/events/search', 'EventController@lihatEvent');
Route::get('/events/create', 'EventController@create');
Route::get('/events/manage', 'EventController@manage');
Route::get('/search', 'searchController@index');

Route::post('/events/create', 'EventController@createEvent');
