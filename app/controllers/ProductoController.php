<?php use Tradicion\Repositories\ProductoRepo;


class ProductoController extends BaseController {

	protected $productoRepo;

	public function __construct(ProductoRepo $productoRepo){
		$this->productoRepo = $productoRepo;
	}

	public function getItem(){
		$id = $_POST['id'];
		return Response::json($this->productoRepo->find($id));
	}
}
