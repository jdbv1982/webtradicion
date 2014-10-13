<?php

use Tradicion\Entities\Producto;

class HomeController extends BaseController {

	public function showWelcome()
	{
		return View::make('hello');
	}

    public function productos(){
        return Producto::all();
    }

}
