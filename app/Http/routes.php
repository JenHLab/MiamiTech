<?php


//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');

Route::get('acin', 'AcinController@index'); //Accelerator and Incubator controller

Route::get('acin/create', 'AcinController@create');

Route::post('acin', 'AcinController@store');
	

Route::get('acin/update', 'AcinController@update');

Route::get('acin/{acin}', 'AcinController@show');

Route::get('json', 'AcinController@acin_json');


//Route::get('about', function() {
//	return view('pages.about');
//});




Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
