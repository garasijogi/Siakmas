<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pembelian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view("admin/pembelian_v");
	}

}

/* End of file Pembelian.php */
/* Location: ./application/controllers/Pembelian.php */