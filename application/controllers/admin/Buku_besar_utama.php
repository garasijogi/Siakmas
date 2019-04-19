<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buku_besar_utama extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view("admin/buku_besar_utama_v");
	}

}

/* End of file Buku_besar_utama.php */
/* Location: ./application/controllers/Buku_besar_utama.php */