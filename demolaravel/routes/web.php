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




Auth::routes();

Route::get('/', 'PagesController@index');
Route::get('/impressum', 'PagesController@imprint');
Route::get('/kontakt', 'PagesController@contact');

Route::get('/home', 'MemesController@getDailyLuck');

Route::resource('admin/product', 'ProductController');
Route::resource('books', 'BookController');