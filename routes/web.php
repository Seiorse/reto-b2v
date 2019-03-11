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

Route::get('/', 'HomeController@index');


Route::get('/dashboard', 'DashboardController@index');


Route::get('/questions/{id}/delete', 'QuestionsController@delete');


Route::get('/questions/{questions}/answers/create', 'AnswersController@create');


Route::post('/questions/{questions}/answers', 'AnswersController@store');


Route::resource('/questions', 'QuestionsController');


Route::resource('/answers', 'AnswersController');


Route::resource('/start', 'UserAnswersController');


Route::get('/test', function () {
	return 	[ 
				'saludo' => 'Hola',
				'nombre' => 'Reto'
			];
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
