<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/beranda', 'BerandaController@index')->name('beranda');
Route::get('{path}', 'HomeController@index')->where('path', '([A-z\d-\/_.]+)?');