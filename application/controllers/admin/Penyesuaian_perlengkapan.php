<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penyesuaian_perlengkapan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view("admin/penyesuaian_perlengkapan_v");
	}

}

/* End of file Penyesuaian_perlengkapan.php */
/* Location: ./application/controllers/Penyesuaian_perlengkapan.php */