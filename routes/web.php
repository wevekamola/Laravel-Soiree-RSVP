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

Route::get('/', 'EventController@latest');

Route::resource('events', 'EventController');

Route::resource('guests', 'GuestController');

Route::get('/events/{event}/invite/{guest}', 'EventController@inviteguest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


