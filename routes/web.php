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
    return view('index');
});

Route::get('/parser', 'Parser\ParserController@index')->name('parser');

Route::post('/ramka/buy', 'Ramka\RamkaController@buy')->name('ramka.buy');

Route::post('/test', 'Ramka\RamkaController@test');

