<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Articulos extends REST_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Prueba_m');
	}

	public function index_get(){
		$articulos = $this->Prueba_m->obtener_articulos();

		$this->response(array("code" => 200,"response"=> $articulos));
	}

}

/* End of file Articulos.php */
/* Location: ./application/controllers/Articulos.php */