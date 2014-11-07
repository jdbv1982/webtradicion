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

Route::get('entrar', ['as'=>'entrar', 'uses'=>'HomeController@entrar']);
Route::get('salir', ['as'=>'salir', 'uses'=>'HomeController@salir']);


Route::get('historia', ['as'=>'historia', 'uses'=>'HomeController@historia']);

