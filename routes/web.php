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

// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('dashboard', function () {
    return view('admin/index');
});

// Artikel
Route::resource('artikel', 'ArtikelController');
Route::post('artikel/search', [
  'as' => 'artikel.search',
  'uses' => 'ArtikelController@search'
]);
