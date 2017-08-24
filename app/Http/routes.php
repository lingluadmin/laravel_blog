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

Route::get('/', 'WelcomeController@index');

Route::get('home',      'HomeController@index');
Route::get('lldetail',  'HomeController@lldetail');
Route::get('llphoto',   'HomeController@llphoto');
Route::get('lltime',    'HomeController@lltime');
Route::get('llactricle','HomeController@llactricle');

# TODO: 管理
Route::get('articleAdd',    'ManagerController@articleAdd');
Route::post('articleAddDo', 'ManagerController@articleAddDo');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
