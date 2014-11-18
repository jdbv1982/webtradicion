<?php namespace Tradicion\Repositories;

use DB;
use Tradicion\Entities\Producto;


class ProductoRepo extends BaseRepo{

	public function getModel(){
		return new Producto;
	}
}