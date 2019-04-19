<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Renovasi_dan_pembangunan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view("admin/renovasi_dan_pembangunan_v");
	}

}

/* End of file Renovasi_dan_pembangunan.php */
/* Location: ./application/controllers/Renovasi_dan_pembangunan.php */