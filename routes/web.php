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

Route::get('/', 'AlumnosController@index');
Route::get('/index', 'AlumnosController@index');
Route::get('/welcome', 'AlumnosController@index');
Route::post('index', ['as' => 'index', 'uses' => 'AlumnosController@index']);

Route::get('/create', 'AlumnosController@create');

Route::get('/read', 'AlumnosController@read');

Route::get('/update', 'AlumnosController@update');

Route::get('/delete', 'AlumnosController@delete');

Route::post('newStudent', ['as' => 'newStudent', 'uses' => 'AlumnosController@newStudent']);