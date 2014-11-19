<?php namespace Tradicion\Repositories;

use DB;
use Tradicion\Entities\Proceso;


class ProcesoRepo extends BaseRepo{

	public function getModel(){
		return new Proceso;
	}
}
