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

Route::resource('/service','ServiceController')->middleware('auth');

Auth::routes();

Route::resource('/anuncio','PrestamistasController')->middleware('auth');

Route::get('/', 'HomeController@index');

//Route::get('/','Controller@getData');

//Route::post('/insert','Controller@insert');
