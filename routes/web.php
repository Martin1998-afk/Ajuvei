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
Route::get('/detalles-anuncio/{id}',function(){
return view('detalles-anuncio');
});

Route::resource('/service','ServiceController')->middleware('auth');

Route::get('/service/{id}', 'ServiceController@show');
Route::get('/service/{id}','ServiceController@destroy');
Route::get('/service/{prestamistas}','ServiceController@index');

Auth::routes();

Route::resource('/anuncio','PrestamistasController')->middleware('auth');
Route::get('/servicios/{id}','PrestamistasController@show');
Route::get('/prestamistas/{id}','PrestamistasController@destroy');



Route::get('/', 'HomeController@index');

//Route::get('/','Controller@getData');

//Route::post('/insert','Controller@insert');
