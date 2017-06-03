<?php


Route::get('/', function () {
    return view('homepage');
});

/*Route::get('/events/manage', 'EventController@dashboard');*/
Auth::routes();

Route::get('/home', 'EventController@dashboard');



Route::get('/manager/create', function(){
	return view('event.create');
});
// Route::get('/events/manage', 'EventController@manage');

Route::get('/search/{category}', 'searchController@kategori');

Route::get('/search', 'searchController@index');

Route::post('/manager/create', 'EventController@createEvent');

Route::get('/download/{filename}', 'EventController@download');

Route::get('/event/detail/{id}', 'EventController@detail');
Route::get('/manager/edit/{id}', 'EventController@edit');
Route::get('/manager/hapus/{id}', 'EventController@hapus');