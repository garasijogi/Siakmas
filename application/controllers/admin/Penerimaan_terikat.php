<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerimaan_terikat extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//Do your magic here
		$this->load->model('penerimaan_m');
	}
	public function index()
	{
		$this->load->view('admin/penerimaan_terikat/menu_penerimaan_terikat_v');
	}

	public function input(){
		//ambil kode dengan get
		$kode_sub = $this->input->get('kode');

		//ambil nama sub
		$aktLogic = $this->penerimaan_m->getAktLogic($kode_sub, 'nama_sub');
		foreach ($aktLogic as $v){
			$nama_sub = $v['nama_sub'];
		}

		//ambil data buat ditampilin di view
		$data = $this->penerimaan_m->ambilTabelView($kode_sub, 'infotr1_penerimaan', 'tr1_penerimaan');

		//pergi ke view input dengan bawa bungkusan
		$this->load->view('admin/penerimaan_terikat/input_penerimaan_terikat_v', array('data'=>$data, 'kode_sub'=>$kode_sub, 'nama_sub'=>$nama_sub));
	}

	public function proses(){
		//post dari form
		$kode_sub = $this->input->post('kode_sub');
		$tgl = $this->input->post('tanggal');
		$pemberi = $this->input->post('pemberi');
		$nominal = $this->input->post('nominal');
		$keterangan = $this->input->post('keterangan');

		//ambil informasi yang dibutuhkan dari database
		$detailAkun = $this->penerimaan_m->getAktLogic($kode_sub, 'debit_akun, kredit_akun');
		//ambil hasil yang ditemukan
		foreach ($detailAkun as $v){
			$debit_akun=$v['debit_akun'];
			$kredit_akun=$v['kredit_akun'];
		}

		// $detailAkun = $this->kodeSubSwitcher($kode_sub);
		//buka bungkusan dan jadikan variabel
		// $debit = $detailAkun['kode_akunD'];
		// $kode_akunK = $detailAkun['kode_akunK'];
		// $jenis = $detailAkun['jenis'];
		// $p_jenis = $detailAkun['p_jenis'];

		//membuat ID-----------------------------------------------------------------------------------------------------------------------------------
		//ambil jumlah row dari database penerimaan terikat
		$hasil = $this->db->query('SELECT * FROM tr01_penerimaanterikat')->num_rows();
		//buat id_tr
		$id_tr = $hasil+1;

		//hilangkan format tanggal
		$tgl_process=explode("-", $tgl);
		//masukkan kembali hasil explode ke $tgl
		$tgl_id=$tgl_process[0].$tgl_process[1].$tgl_process[2];
		//masukkan format tgl+kode_sub
		$id_infotr2 = $tgl_id.$kode_sub;
		//ambil jumlah row
		$cari = $this->db->query("SELECT * FROM infotr01_penerimaanterikat WHERE id_infotr LIKE '$id_infotr2%%%'");
		$hasil2 = $cari->num_rows();
		//generate id_infotr
		$hasil3 = $hasil2+1;
		//tambah prefix '0' ke increment
		//masukkan increment ke id_infotr
		$id_infotr = $id_infotr2.str_pad($hasil3, 3, '0', STR_PAD_LEFT);

		//data yang akan dimasukkan-----------------------------------------------------------------------------------------------
		$info = array('id_infotr'=>$id_infotr, 'tanggal'=>$tgl, 'keterangan'=>$keterangan, 'pemberi'=>$pemberi, 'kode_sub'=>$kode_sub);//infotr
		$data = array('id_tr'=>$id_tr, 'id_infotr'=>$id_infotr,'kode_akun'=>$debit_akun,'debit'=>$nominal); //debit
		$data2 = array('id_tr'=>$id_tr+1, 'id_infotr'=>$id_infotr, 'kode_akun'=>$kredit_akun, 'kredit'=>$nominal);//kedit

		//masukkan ke dalam Database
		$this->penerimaan_m->InsertData('infotr01_penerimaanterikat', $info);
		$this->penerimaan_m->InsertData('tr01_penerimaanterikat', $data);
		$this->penerimaan_m->InsertData('tr01_penerimaanterikat', $data2);

		//redirect user ke halaman sebelumnya
		redirect('admin/penerimaan_terikat/input?kode='.$kode_sub);
	}
}
