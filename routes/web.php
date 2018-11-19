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
    return view('auth.login');
});

Route::resource('musicrecords/album','AlbumController');
Route::resource('musicrecords/artista','ArtistaController');
Route::resource('musicrecords/vocalista','VocalistaController');
Route::resource('musicrecords/cancion','CancionController');

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('cerrar');

Route::get('/home', 'HomeController@index')->name('home');
