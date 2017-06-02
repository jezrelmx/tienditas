<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
  			CURLOPT_URL => "http://localhost/~jezrel_mx/prueba/api/index.php/articulos",
  			CURLOPT_RETURNTRANSFER => true,
  			CURLOPT_TIMEOUT => 30,
  			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  			CURLOPT_CUSTOMREQUEST => "GET",
  			CURLOPT_HTTPHEADER => array("cache-control: no-cache"),
		));

		$respuesta = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);
		$respuesta_arreglo = json_decode($respuesta, true);
		// echo "<pre>";
		// var_dump ($respuesta);
		// echo "</pre>";
		$datos['articulos'] = $respuesta_arreglo['response'];
		$this->load->view('tienda', $datos);
	}
}
