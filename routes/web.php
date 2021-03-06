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

Route::get('/', 'PagesController@index');
Route::get('/login', 'PagesController@login');
Route::get('/registration', 'PagesController@registration');
Route::get('/history', 'PagesController@history');
Route::get('/userlist', 'PagesController@userlist');


