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

Route::get('home',      	'HomeController@index');
Route::get('lldetail',  	'HomeController@lldetail');
Route::get('llphoto',   	'HomeController@llphoto');
Route::get('lltime',    	'HomeController@lltime');
Route::get('llactricle',	'HomeController@llactricle');

//TODO: 个人博客
Route::get('llblogL',      	'BlogController@blogList');                	//博客-列表
Route::get('llblogD',      	'BlogController@blogDetail');              	//博客-详情

//TODO: PAPA篮球
Route::get('llbasketL',  	'BasketballController@llbasketList');      	//PAPA篮球-列表
Route::get('llbasketD',  	'BasketballController@llbasketDetail');    	//PAPA篮球-详情
Route::get('xjs2017L',      'BasketballController@xjs2017List');        //2017夏季赛-列表
Route::get('xjs2017D',      'BasketballController@xjs2017Detail');      //2017夏季赛-详情
Route::get('xjls2017L',     'BasketballController@xjls2017List');       //2017夏季联赛-列表
Route::get('xjls2017D',     'BasketballController@xjls2017Detail');     //2017夏季联赛-详情
Route::get('basketPerson',  'BasketballController@basketPerson');       //个人风采照
Route::get('basketPhoto',   'BasketballController@basketPhoto');        //篮球照片墙
Route::get('basketGirl',  	'BasketballController@basketGirl');        	//篮球宝贝
Route::get('basketFee',  	'BasketballController@basketFee');        	//篮球费用
Route::get('basketNotice',  'BasketballController@basketNotice');       //篮球赛程
Route::get('basketMeet',    'BasketballController@basketMeet');         //PAPA篮球-年会



# TODO: 管理
Route::get('articleAdd',    'ManagerController@articleAdd');            //添加
Route::post('articleAddDo', 'ManagerController@articleAddDo');          //执行添加

Route::get('imgAdd',    	'ManagerController@imgAdd');            	//添加
Route::post('imgAddDo',    	'ManagerController@imgAddDo');            	//执行添加
Route::post('imgAddAjax',   'ManagerController@imgAddAjax');            //执行添加

Route::get('basketAdd',    	'ManagerController@basketAdd');            	//添加
Route::post('basketAddDo',  'ManagerController@basketAddDo');           //执行添加

Route::get('basketAdd',    	'ManagerController@basketAdd');            	//添加
Route::post('basketAddDo',  'ManagerController@basketAddDo');           //执行添加

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
