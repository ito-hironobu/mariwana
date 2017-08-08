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

Route::get ('/',                  'UsersController@index');
Route::get ('/login',             'UsersController@login');
Route::get ('/login_error',       'UsersController@login_error');
Route::post('/login_complete',    'UsersController@login_complete');
Route::get ('/register',          'UsersController@register');
Route::get ('/register_error',    'UsersController@register_error');
Route::post('/register_complete', 'UsersController@register_complete');
Route::post('/game',              'UsersController@game');
// Route::post('/', 'UsersController@');
