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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('kehilangan','KehilanganController');

Route::resource('ditemukan','DitemukanController');

Route::resource('dicuri','DicuriController');

Route::resource('berita','BeritaController');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/front/berita', 'FrontBeritaController@index');
Route::get('/front/dicuri', 'FrontDicuriController@index');
Route::get('/front/ditemukan', 'FrontDitemukanController@index');
Route::get('/front/kehilangan', 'FrontKehilanganController@index');