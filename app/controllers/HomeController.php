<?php

use Tradicion\Entities\Producto;

class HomeController extends BaseController {

	public function index()
	{
		return View::make('web/edad');
	}

    public function entrar(){
        return View::make('web/entrar');
    }

    public function salir(){
        return View::make('web/salir');
    }

    public function historia(){
        return View::make('web/historia');
    }

    public function productos(){
        return Producto::all();
    }

}
