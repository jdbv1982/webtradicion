<?php use Tradicion\Repositories\ProcesoRepo;


class ProcesoController extends BaseController {

	protected $procesoRepo;

	public function __construct(ProcesoRepo $procesoRepo){
		$this->procesoRepo = $procesoRepo;
	}

	public function getProceso(){
		$id = $_POST['id'];
		return Response::json($this->procesoRepo->find($id));
	}
}
