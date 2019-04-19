<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view("admin/beranda_v");
	}

}

/* End of file Beranda.php */
/* Location: ./application/controllers/Beranda.php */