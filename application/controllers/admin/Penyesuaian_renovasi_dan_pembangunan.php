<<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penyesuaian_renovasi_dan_pembangunan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view("admin/penyesuaian_renovasi_dan_pembangunan_v");
	}

}

/* End of file Penyesuaian_renovasi_dan_pembangunan.php */
/* Location: ./application/controllers/Penyesuaian_renovasi_dan_pembangunan.php */