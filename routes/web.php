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
<<<<<<< HEAD
Route::get('/manager', function () {
    return view('/manager');
});
Route::get('/events/manage', function () {
    return view('/event/manage');
});

	
=======
Route::get('/manager', 'EventController@dashboard');
>>>>>>> a78898ef3430f8d3c93ef9fec07d4be49a35750d
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/events/search', 'EventController@lihatEvent');
<<<<<<< HEAD
Route::get('/events/create', 'EventController@create');
// Route::get('/events/manage', 'EventController@manage');
=======
>>>>>>> a78898ef3430f8d3c93ef9fec07d4be49a35750d
Route::get('/search', 'searchController@index');

Route::post('/manager/create', 'EventController@createEvent');

Route::get('/download/{filename}', 'EventController@download');
