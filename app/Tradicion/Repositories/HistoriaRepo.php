<?php namespace Tradicion\Repositories;

use DB;
use Tradicion\Entities\Historia;


class HistoriaRepo extends BaseRepo{

	public function getModel(){
		return new Historia;
	}
}