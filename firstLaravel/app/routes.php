<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Route::get('/user/{id?}',function($id = 1){
//    echo "HELLO ->" . $id;
//});

Route::post('/contact','ContactController@store');
Route::get('/contact','ContactController@index');
Route::get('/about','AboutController@index');
Route::get('/services','ServicesController@index');
Route::get('/services/gallery','ServicesController@gallery');
Route::get('/services/advertising','ServicesController@advertising');
Route::get('/services/production','ServicesController@production');
Route::get('/services/press','ServicesController@press');
Route::get('/services/press/equipment','ServicesController@pressEquipment');
Route::get('/services/press/requirements','ServicesController@pressRequirement');
Route::get('/services/press/portfolio','ServicesController@pressPortfolio');
Route::get('/home','HomeController@welcome');
Route::get('/','HomeController@redirect');


//
//Route::get('/', function()
//{
//	return View::make('hello');
//});
