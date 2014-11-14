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

Route::get('/',['as'=>'home', 'uses'=>'HomeController@index']);

Route::get('productos', ['as'=>'productos', 'uses'=>'HomeController@productos']);

Route::get('inicio', ['as'=>'inicio', 'uses'=>'HomeController@inicio']);
Route::get('salir', ['as'=>'salir', 'uses'=>'HomeController@salir']);


Route::get('historia', ['as'=>'historia', 'uses'=>'HomeController@historia']);
Route::get('proceso', ['as'=>'proceso', 'uses'=>'HomeController@proceso']);
Route::get('productos', ['as'=>'productos', 'uses'=>'HomeController@productos']);
Route::get('contacto', ['as'=>'contacto', 'uses'=>'HomeController@contacto']);

//Route::post('gethistoria', ['uses'=>'HistoriaController@getHistoria']);
Route::post('gethistoria', ['uses'=>'HistoriaController@getHistoria']);

