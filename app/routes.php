<?php

Route::get('/',['as'=>'home', 'uses'=>'HomeController@index']);
Route::get('salir', ['as'=>'salir', 'uses'=>'HomeController@salir']);
Route::get('SI', ['as'=>'SI', 'uses'=>'HomeController@SI']);

Route::group(array('before'=>'edad'), function(){


	Route::get('inicio', ['as'=>'inicio', 'uses'=>'HomeController@inicio']);
	Route::get('productos', ['as'=>'productos', 'uses'=>'HomeController@productos']);



	Route::get('historia', ['as'=>'historia', 'uses'=>'HomeController@historia']);
	Route::get('proceso', ['as'=>'proceso', 'uses'=>'HomeController@proceso']);
	Route::get('productos', ['as'=>'productos', 'uses'=>'HomeController@productos']);
	Route::get('contacto', ['as'=>'contacto', 'uses'=>'HomeController@contacto']);

	//Route::post('gethistoria', ['uses'=>'HistoriaController@getHistoria']);
	Route::post('gethistoria', ['uses'=>'HistoriaController@getHistoria']);
	Route::post('getitem', ['uses'=>'ProductoController@getItem']);

});
