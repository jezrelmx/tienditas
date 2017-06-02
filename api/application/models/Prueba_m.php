<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prueba_m extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function obtener_articulos() {
		$custom_query = "SELECT * FROM ARTICULOS;";
		$res = $this->db->query($custom_query);

		return $res->result_array();
	}

}

/* End of file Prueba_m.php */
/* Location: ./application/models/Prueba_m.php */