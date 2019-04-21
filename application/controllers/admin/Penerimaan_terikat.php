<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerimaan_terikat extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//Do your magic here
		$this->load->model('penerimaan_input_m');
	}
	public function index()
	{
		$this->load->view('admin/penerimaan_terikat/menu_penerimaan_terikat_v');
	}

	public function input(){
		//ambil kode dengan get
		$kode_sub = $this->input->get('kode');

		//ambil data dari database
		$data= $this->mod->GetTable('tr01_penerimaanterikat');
		$data2= $this->mod->GetTable('infotr01_penerimaanterikat');

		//pergi ke view input dengan bawa bungkusan
		$this->load->view('admin/penerimaan_terikat/input_penerimaan_terikat_v', array('data'=>$data, 'data2'=>$data2, 'kode_sub'=>$kode_sub));
	}

	public function proses(){
		//post dari form
		$kode_sub = $this->input->post('kode_sub');
		$tgl = $this->input->post('tanggal');
		$pemberi = $this->input->post('pemberi');
		$nominal = $this->input->post('nominal');
		$keterangan = $this->input->post('keterangan');

		//ambil informasi yang dibutuhkan
		$detailAkun = $this->kodeSubSwitcher($kode_sub);
		//buka bungkusan dan jadikan variabel
		$kode_akunD = $detailAkun['kode_akunD'];
		$kode_akunK = $detailAkun['kode_akunK'];
		$jenis = $detailAkun['jenis'];
		$p_jenis = $detailAkun['p_jenis'];

		//membuat ID-----------------------------------------------------------------------------------------------------------------------------------
		//ambil jumlah row dari database penerimaan terikat
		$query = $this->db->query('SELECT * FROM tr01_penerimaanterikat');
		$hasil = $query->num_rows();
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
		$data = array('id_tr'=>$id_tr, 'id_infotr'=>$id_infotr, 'kode_sub'=>$kode_sub,'kode_akun'=>$kode_akunD,'debit'=>$nominal); //debit
		$data2 = array('id_tr'=>$id_tr+1, 'id_infotr'=>$id_infotr, 'kode_sub'=>$kode_sub, 'kode_akun'=>$kode_akunK, 'kredit'=>$nominal);//kedit
		$info = array('id_infotr'=>$id_infotr, 'tanggal'=>$tgl, 'keterangan'=>$keterangan, 'jenis'=>$jenis, 'pemberi'=>$pemberi, 'p_jenis'=>$p_jenis);

		//masukkan ke dalam Database
		$this->penerimaan_input_m->InsertData('tr01_penerimaanterikat', $data);
		$this->penerimaan_input_m->InsertData('tr01_penerimaanterikat', $data2);
		$this->penerimaan_input_m->InsertData('infotr01_penerimaanterikat', $info);

		//redirect user ke halaman sebelumnya
		redirect('admin/penerimaan_terikat/input?kode='.$kode_sub);
	}

	public function kodeSubSwitcher($kode_sub){
		//siapkan variabel yng dibutuhkan, dan bungkus ke dalam array
		switch($kode_sub){
		//PENEIMAAN TERIKAT --------------------------------------------------------------------------------------------------------
			//Peribadatan	
				//Infaq Kotak Jumat
				case "1261":
					$data ['kode_akunD'] = "101";
					$data ['kode_akunK'] = "441";
					$data ['jenis'] = "Infaq Kotak Jumat";
					$data ['p_jenis'] = "Peribadatan";
					break;
				//Infaq Perayaan Hari Besar Islam
				case "1262":
					$data ['kode_akunD'] = "101";
					$data ['kode_akunK'] = "442";
					$data ['jenis'] = "Infaq Perayaan Hari Besar Islam";
					$data ['p_jenis'] = "Peribadatan";
					break;
					//Infaq Pengajian
				case "1263":
					$data ['kode_akunD'] = "101";
					$data ['kode_akunK'] = "443";
					$data ['jenis'] = "Infaq Pengajian";
					$data ['p_jenis'] = "Peribadatan";
					break;
					//Infaq Ramadhan
				case "1264":
					$data ['kode_akunD'] = "101";
					$data ['kode_akunK'] = "444";
					$data ['jenis'] = "Infaq Ramadhan";
					$data ['p_jenis'] = "Peribadatan";
					break;

			//Pendidikan
				//Infaq TPA dan Tahfidz
				case "1270":
					$data ['kode_akunD'] = "101";
					$data ['kode_akunK'] = "450";
					$data ['jenis'] = "Infaq TPA dan Tahfidz";
					$data ['p_jenis'] = "Pendidikan";
					break;

			//ZISWAF
				//Infaq dari Donatur
				case "1281":
					$data ['kode_akunD'] = "101";
					$data ['kode_akunK'] = "461";
					$data ['jenis'] = "Infaq dari Donatur";
					$data ['p_jenis'] = "ZISWAF";
					break;
				//Infaq Kotak Dana Operasional
				case "1282":
					$data ['kode_akunD'] = "101";
					$data ['kode_akunK'] = "462";
					$data ['jenis'] = "Infaq Kotak Dana Operasional";
					$data ['p_jenis'] = "ZISWAF";
					break;
				//Infaq Kotak Dana Sosial
				case "1283":
					$data ['kode_akunD'] = "101";
					$data ['kode_akunK'] = "463";
					$data ['jenis'] = "Infaq Kotak Dana Sosial";
					$data ['p_jenis'] = "ZISWAF";
					break;
				//Zakat Fitrah
				case "1284":
					$data ['kode_akunD'] = "101";
					$data ['kode_akunk'] = "464";
					$data ['jenis'] = "Zakat Fitrah";
					$data ['p_jenis'] = "ZISWAF";
					break;
				//Fidyah
				case "1285":
					$data ['kode_akunD'] = "101";
					$data ['kode_akunK'] = "465";
					$data ['jenis'] = "Fidyah";
					$data ['p_jenis'] = "ZISWAF";
					break;
				//Infaq untuk Baksos
				case "1286":
					$data ['kode_akunD'] = "101";
					$data ['kode_akunK'] = "466";
					$data ['jenis'] = "Infaq untuk Baksos";
					$data ['p_jenis'] = "ZISWAF";
					break;
				//Waqaf
				case "1287":
					$data ['kode_akunD'] = "101";
					$data ['kode_akunK'] = "467";
					$data ['jenis'] = "Waqaf";
					$data ['p_jenis'] = "ZISWAF";
					break;
		}

		return $data;
	}
}
