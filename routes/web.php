<?php

use Illuminate\Support\Facades\Route;

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


Route::get('cardpage','CardController@create');
Route::post('cardsave','CardController@cardsave');
Route::get('dashboard','CardController@displaycard');
Route::get('cardshow/{id}','CardController@showcard');
Route::get('cardedit/{id}','CardController@editcard');
Route::post('cardupdate','CardController@updatecard');
Route::get('carddel/{id}','CardController@delcard');