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

/**
 * フォルダの作成
 */
Route::get('/video', 'VideoController@index')->name('videos.index');
Route::get('/video/create', 'VideoController@create')->name('videos.create');
Route::post('/video/create', 'VideoController@s3_upload');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
