<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beban_tidak_terikat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view("admin/beban_tidak_terikat_v");
	}

}

/* End of file Beban_tidak_terikat.php */
/* Location: ./application/controllers/Beban_tidak_terikat.php */