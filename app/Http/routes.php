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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');

Route::resource('api/jurnal','JurnalController');
// Route::get('productindex','ProductController@index');

// Route::get('master',function(){
// 	return view('master');
// });

// Route::get('acc','AccountController@index');

// Route::get('group','GroupController@index');
