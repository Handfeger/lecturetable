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
    return view('welcome');
});

Route::get('text', function(){
    return view('anzeige');
});


Route::group(['middleware' => ['web']], function () {
	Route::resource('rythmtype', 'RythmTypeController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('rythmtype', 'RythmTypeController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('lecture', 'LectureController');
});