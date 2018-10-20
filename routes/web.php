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

Route::get('/login', 'UserController@loginView');

Route::get('/register', 'UserController@registerView');

Route::get('/search', 'LabController@labView');

Route::get('/list', 'LabController@labList');

Route::get('/book/{id}', 'LabController@bookLab');

Route::get('/view/{id}', 'LabController@viewLab');

Route::post('/login', 'UserController@login');

Route::post('/register', 'UserController@register');

Route::post('/search', 'LabController@searchLab');

// Static Pages

Route::get('/about', 'UserController@about');

Route::get('/corporate', 'UserController@corporate');

Route::get('/diagnostics', 'UserController@diagnostics');

Route::get('/diagnostics_notify', 'UserController@diagnostics_notify');

Route::get('/doctor-3', 'UserController@doctor3');

Route::get('/doctor-4', 'UserController@doctor4');

Route::get('/enquiry', 'UserController@enquiry');

Route::get('/essential-health-p', 'UserController@essentialhealthp');

Route::get('/executive-health-checkup', 'UserController@executivehealthcheckup');

Route::get('/healthcheckuppackages', 'UserController@healthcheckuppackages');

Route::get('/personal_health', 'UserController@personal_health');

Route::get('/personalhealth-2', 'UserController@personalhealth2');

Route::get('/premium-health-checkup', 'UserController@premiumhealthcheckup');

Route::get('/privacy', 'UserController@privacy');

Route::get('/refund-policy', 'UserController@refundpolicy');

Route::get('/termsofuse', 'UserController@termsofuse');
