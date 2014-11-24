<?php

$locale = Request::segment(1);

if (in_array($locale, Config::get('app.available_locales'))) {
    \App::setLocale($locale);
} else {
    $locale = null;
}

Route::group(array('prefix' => $locale), function()
{

	Route::get(Lang::get('routes.home'),['as'=>'home', 'uses'=>'HomeController@index']);
	Route::get(Lang::get('routes.salir'),['as'=>'salir', 'uses'=>'HomeController@salir']);
	Route::get(Lang::get('routes.SI'), ['as'=>'SI', 'uses'=>'HomeController@SI']);

	Route::group(array('before'=>'edad'), function(){

		//Route::get('inicio', ['as'=>'inicio', 'uses'=>'HomeController@inicio']);
		Route::get(Lang::get('routes.inicio') , ['as'=>'inicio', 'uses'=>'HomeController@inicio']);
		Route::get('productos', ['as'=>'productos', 'uses'=>'HomeController@productos']);



		Route::get('historia', ['as'=>'historia', 'uses'=>'HomeController@historia']);
		Route::get('proceso', ['as'=>'proceso', 'uses'=>'HomeController@proceso']);
		Route::get('productos', ['as'=>'productos', 'uses'=>'HomeController@productos']);
		Route::get('contacto', ['as'=>'contacto', 'uses'=>'HomeController@contacto']);

		//Route::post('gethistoria', ['uses'=>'HistoriaController@getHistoria']);
		Route::post('gethistoria', ['uses'=>'HistoriaController@getHistoria']);
		Route::post('getitem', ['uses'=>'ProductoController@getItem']);
		Route::post('getproceso', ['uses'=>'ProcesoController@getProceso']);

	});

});
