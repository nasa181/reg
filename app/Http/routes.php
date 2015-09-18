<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'loginManager@firstPage');
Route::post('/','loginManager@checkID');

Route::get('logout', 'loginManager@getLogout');
Route::get('testLogin','loginManager@getLogin');
Route::get('createNewUser','loginManager@getNewUser');
Route::post('createNewUser','loginManager@postForm');
