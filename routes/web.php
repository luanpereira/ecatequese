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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'CatequistaController@getIndex')->name('catequistas');

//CATEQUISTAS
/*Route::group(['prefix' => 'admin/catequistas'], function () {
    Route::get('/', 'CatequistaController@getIndex')->name('catequistas');
    Route::get('/create', 'CatequistaController@getCreate')->name('catequistas');
    Route::post('/create', 'CatequistaController@postCreate')->name('catequistas');
    Route::get('/edit/{id}', 'CatequistaController@getEdit')->name('catequistas');
    Route::put('/edit/{id}', 'CatequistaController@putEdit')->name('catequistas');
    Route::post('/delete', 'CatequistaController@postDelete')->name('catequistas');
});*/
