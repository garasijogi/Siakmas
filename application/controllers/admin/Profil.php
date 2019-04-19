<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/profil/profil_v');
	}

	public function bagan_akun(){
		$akun= $this->mod->GetTable('akun');
		$this->load->view('admin/profil/bagan_akun_v', array('akun'=>$akun));
	}

	public function edit_profil(){
		$profil= $this->mod->GetTable('profil');
		$this->load->view('admin/profil/edit_profil_v', array('profil'=>$profil));
	}

	public function update(){
		$query = $this->db->query('SELECT * FROM profil');

		$nama_masjid = $this->input->post('nama_masjid');

		$alamat = $this->input->post('alamat');

		$notelp = $this->input->post('notelp');

		$norek = $this->input->post('norek');

		$thn = $this->input->post('thn');

		$id = 1;

			$ep = array('id'=>$id, 'nama_masjid'=>$nama_masjid, 'alamat'=>$alamat, 'no_telepon'=>$notelp, 'no_rekening'=>$norek, 'tahun_berdiri'=>$thn);

			$this->mod->UpdateData('profil', $ep,'id',$id);
			redirect('admin/profil/edit_profil');
	}
}

/* End of file Profil.php */
/* Location: ./application/controllers/admin/Profil.php */