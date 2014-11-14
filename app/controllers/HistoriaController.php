<?php

use Tradicion\Repositories\HistoriaRepo;


class HistoriaController extends BaseController {

	protected $historiaRepo;

	public function __construct(HistoriaRepo $historiaRepo){
		$this->historiaRepo = $historiaRepo;
	}

	public function getHistoria(){
		$id = $_POST['id'];
		return Response::json($this->historiaRepo->find($id));
	}
}
