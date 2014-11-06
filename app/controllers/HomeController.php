<?php

use Tradicion\Entities\Producto;

class HomeController extends BaseController {

	public function index()
	{
		return View::make('web/edad');
	}

    public function productos(){
        return Producto::all();
    }

}
