<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'libraries/REST_Controller.php';
class Cliente extends REST_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('cliente_model');
	}
	public function index_get(){
		$clientes = $this->cliente_model->get();
		if (!is_null($clientes)) {
			$this->response(array('Respuesta' => $clientes), 200);
		} else {
			$this->response(array('Respuesta' => 'No se han ingresado clientes), 200);
		}
	}




}
