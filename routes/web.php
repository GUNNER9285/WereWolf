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

Route::get('/','CardController@home');
Route::get('/home','CardController@home');

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
