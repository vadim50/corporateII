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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::resource('/','IndexController',[

	'only'=>['index'],
	'names'=>['index'=>'home']

]);

Route::resource('portfolios','PortfolioController',[

	'parameters'=>[
		'portfolios'=>'alias'
	]

]);

Route::resource('articles','ArticlesController',[

		'parameters'=>[
			'articles'=>'alias'
		]

]);

Route::match(['get','post'],'/contacts',['uses'=>'ContactsController@index','as'=>'contacts']);

Route::get('articles/cat/{cat_alias?}',['uses'=>'ArticlesController@index','as'=>'articlesCat'])
->where('cat_alias','[\w-]');

Route::resource('comment','CommentController',['only'=>['store']]);

//==========================================

// Маршруты регистрации...
Route::get('register', 'Auth\RegisterController@showRegistrationForm');
Route::post('register', 'Auth\RegisterController@register');

//============================================

Route::get('login','Auth\LoginController@showLoginForm');

Route::post('login','Auth\LoginController@login');

Route::get('logout','Auth\LoginController@logout');

//admin
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
	//admin
	Route::get('/',['uses'=>'Admin\IndexController@index','as'=>'adminIndex']);
	Route::resource('/articles','Admin\ArticlesController');

});