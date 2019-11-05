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
    return view('inicio');
});

Route::get('login', function () {
   return view('login');
});

Route::get('personas',function(){
    return view('personas');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/','Controller@getData');

//Route::post('/insert','Controller@insert');
