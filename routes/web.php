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
    return view('auth.login');
    Route::resource('diaries', 'DiariesController', ['only' => ['store', 'destroy']]);
});

Route::get('calendar',function(){
    return view('calendar');
});

Route::get('write/{date}','DiariesController@showwrite')->name('write.get');
Route::post('write','DiariesController@store')->name('write.store'); //その日の日記を投稿するためのページ

Route::get('diary/{id}','DiariesController@show')->name('diary.show'); //日記の詳細ページ

Route::get('read/{date}','DiariesController@index')->name('read.get'); //その日に投稿された日記を読むページ

Route::group(['middleware' => ['auth']],function () {
   Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
