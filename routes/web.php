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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/','CardController@hometo');
Route::get('/hometo','CardController@hometo');
Route::get('/guide', 'GameController@guide');

Route::get('/card', 'CardController@index');

Route::get('/card/create', 'CardController@create');
Route::post('/card','CardController@store');

Route::get('/card/{id}/edit', 'CardController@edit');
Route::patch('card/{id}','CardController@update');

Route::delete('/card/{id}', 'CardController@destroy');

Route::get('/game', 'GameController@index');

Route::get('/newgame', 'GameController@newgame');
Route::post('/selectcard', 'GameController@store');
Route::get('game/{id}/selectcard', 'GameController@selectcard');
Route::post('/start', 'GameController@start');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/join_game/{id}','GameController@join');

Route::delete('/game/{id}/delete', 'GameController@destroy');
