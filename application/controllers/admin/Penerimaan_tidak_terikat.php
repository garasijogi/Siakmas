<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penerimaan_tidak_terikat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view("admin/penerimaan_tidak_terikat_v");
	}

}

/* End of file Penerimaan_tidak_terikat.php */
/* Location: ./application/controllers/Penerimaan_tidak_terikat.php */