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

Route::get('/', 'UserController@index');

Route::get('/list', 'LabController@labList');

Route::get('/book/{id}', 'LabController@bookLab');

Route::get('/view/{id}', 'LabController@viewLab');