<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerimaan_terikat extends CI_Controller {

/*HOME*/
	public function index()
	{
		$this->load->view('admin/penerimaan_terikat_v');
	}

/*PERIBADATAN*/	
	public function input1211()
	{
		$data= $this->mod->GetTable('tr01_penerimaanterikat');
		$data2= $this->mod->GetTable('infotr01_penerimaanterikat');

		$this->load->view('admin/penerimaan_terikat/peribadatan/infaq_kotak_jumat_v', array('data'=>$data, 'data2'=>$data2));
	}

	public function input1212()
	{
		$data= $this->mod->GetTable('tr01_penerimaanterikat');
		$data2= $this->mod->GetTable('infotr01_penerimaanterikat');

		$this->load->view('admin/penerimaan_terikat/peribadatan/infaq_phbi_v', array('data'=>$data, 'data2'=>$data2));
	}

	public function input1213()
	{
		$data= $this->mod->GetTable('tr01_penerimaanterikat');
		$data2= $this->mod->GetTable('infotr01_penerimaanterikat');

		$this->load->view('admin/penerimaan_terikat/peribadatan/infaq_pengajian_v', array('data'=>$data, 'data2'=>$data2));
	}

	public function input1214()
	{
		$data= $this->mod->GetTable('tr01_penerimaanterikat');
		$data2= $this->mod->GetTable('infotr01_penerimaanterikat');

		$this->load->view('admin/penerimaan_terikat/peribadatan/infaq_ramadhan_v', array('data'=>$data, 'data2'=>$data2));
	}

/*PENDIDIKAN*/
	public function input1221()
	{
		$data= $this->mod->GetTable('tr01_penerimaanterikat');
		$data2= $this->mod->GetTable('infotr01_penerimaanterikat');

		$this->load->view('admin/penerimaan_terikat/pendidikan/infaq_tpaDanTahfidz_v', array('data'=>$data, 'data2'=>$data2));
	}

/*ZISWAF*/
	public function input1231()
	{
		$data= $this->mod->GetTable('tr01_penerimaanterikat');
		$data2= $this->mod->GetTable('infotr01_penerimaanterikat');

		$this->load->view('admin/penerimaan_terikat/ziswaf/infaq_donatur_v', array('data'=>$data, 'data2'=>$data2));
	}

	public function input1232()
	{
		$data= $this->mod->GetTable('tr01_penerimaanterikat');
		$data2= $this->mod->GetTable('infotr01_penerimaanterikat');

		$this->load->view('admin/penerimaan_terikat/ziswaf/infaq_operasional_v', array('data'=>$data, 'data2'=>$data2));
	}

	public function input1233()
	{
		$data= $this->mod->GetTable('tr01_penerimaanterikat');
		$data2= $this->mod->GetTable('infotr01_penerimaanterikat');

		$this->load->view('admin/penerimaan_terikat/ziswaf/infaq_dansos_v', array('data'=>$data, 'data2'=>$data2));
	}

	public function input1234()
	{
		$data= $this->mod->GetTable('tr01_penerimaanterikat');
		$data2= $this->mod->GetTable('infotr01_penerimaanterikat');

		$this->load->view('admin/penerimaan_terikat/ziswaf/zakat_v', array('data'=>$data, 'data2'=>$data2));
	}

	public function input1235()
	{
		$data= $this->mod->GetTable('tr01_penerimaanterikat');
		$data2= $this->mod->GetTable('infotr01_penerimaanterikat');

		$this->load->view('admin/penerimaan_terikat/ziswaf/fidyah_v', array('data'=>$data, 'data2'=>$data2));
	}

	public function input1236()
	{
		$data= $this->mod->GetTable('tr01_penerimaanterikat');
		$data2= $this->mod->GetTable('infotr01_penerimaanterikat');

		$this->load->view('admin/penerimaan_terikat/ziswaf/infaq_baksos_v', array('data'=>$data, 'data2'=>$data2));
	}

	public function input1237()
	{
		$data= $this->mod->GetTable('tr01_penerimaanterikat');
		$data2= $this->mod->GetTable('infotr01_penerimaanterikat');

		$this->load->view('admin/penerimaan_terikat/ziswaf/waqaf_v', array('data'=>$data, 'data2'=>$data2));
	}



/*INSERT*/
	public function insert()

	{	

//mengambil post dr form

		$query = $this->db->query('SELECT * FROM tr01_penerimaanterikat');
		$hasil = $query->num_rows();

		$tgl = $this->input->post('tanggal');

		$pemberi = $this->input->post('pemberi');

		$nominal = $this->input->post('nominal');

		$keterangan = $this->input->post('keterangan');

		$kode_sub = $this->input->post('kode_sub');

		$kode_akunD = $this->input->post('kode_akunD');

		$kode_akunK = $this->input->post('kode_akunK');

		$jenis = $this->input->post('jenis');

		$p_jenis = $this->input->post('p_jenis');

		$id_tr = $hasil+1;

		$id_infotr2 = $tgl.$kode_sub;

		//generate id
		$cari = $this->db->query("SELECT * FROM tr01_penerimaanterikat WHERE id_infotr LIKE '$id_infotr2%'");
		$hasil2 = $cari->num_rows();
		$hasil3 = $hasil2+1;
		$id_infotr = $id_infotr2.$hasil3;



			$data = array('id_tr'=>$id_tr, 'id_infotr'=>$id_infotr, 'kode_sub'=>$kode_sub,'kode_akun'=>$kode_akunD,'debit'=>$nominal); //data yang akan di insert
			$data2 = array('id_tr'=>$id_tr+1, 'id_infotr'=>$id_infotr, 'kode_sub'=>$kode_sub, 'kode_akun'=>$kode_akunK, 'kredit'=>$nominal);
			$info = array('id_infotr'=>$id_infotr, 'tanggal'=>$tgl, 'keterangan'=>$keterangan, 'jenis'=>$jenis, 'pemberi'=>$pemberi, 'p_jenis'=>$p_jenis);

			$this->mod->InsertData('tr01_penerimaanterikat', $data);
			$this->mod->InsertData('tr01_penerimaanterikat', $data2);
			$this->mod->InsertData('infotr01_penerimaanterikat', $info); //memasukan data melalui fungsi insertdata pad models mod.php

			redirect('admin/penerimaan_terikat/input'.$kode_sub);
		}

	}

	/* End of file DB.php */
/* Location: ./application/controllers/DB.php */