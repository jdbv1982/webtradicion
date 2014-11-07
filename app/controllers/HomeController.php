<?php

use Tradicion\Entities\Producto;

class HomeController extends BaseController {

	public function index()
	{
		return View::make('web/edad');
	}

    public function inicio(){
        return View::make('web/inicio');
    }

    public function salir(){
        return View::make('web/salir');
    }

    public function historia(){
        return View::make('web/historia');
    }

    public function proceso(){
        return View::make('web/proceso');
    }

    public function productos(){
        //return Producto::all();
        return View::make('web/productos');
    }

    public function contacto(){
        return View::make('web/contacto');
    }

}
