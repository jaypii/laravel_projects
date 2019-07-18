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
use Illuminate\Http\Request;
use App\Task;

Route::get('/', function () {
    //$links = \App\Link::all();
    return view('welcome'); 
    //['links' => $links]);
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/submit', function () {
    return view('submit');
});

Route::post('/submit', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);

    $link = tap(new App\Link($data))->save();

    return redirect('/');
});

Route::view('admin', 'ihome');
Route::get('admin', 'ItemController@index');

Route::get('/about', 'PagesController@index')->name('about');
Route::get('/impressum', 'PagesController@imprint')->name('impress');
Route::get('/kontakt', 'PagesController@contact')->name('contact');

Route::get('/coins', 'CoinController@index');
Route::post('/coins', 'CoinController@store');

Route::get('stocks','StockController@index');
Route::get('stocks/chart','StockController@chart');
Route::get('stocks/add','StockController@create');
Route::post('stocks/add','StockController@store');

/*
Route::get('/tasklist', 'TaskController@index')->name('todos');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');
*/
