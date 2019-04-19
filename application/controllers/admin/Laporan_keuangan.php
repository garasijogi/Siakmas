<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_keuangan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('laporan_m');
	}

	public function index()
	{
		$this->load->view("admin/laporan_keuangan_v");
	}

	public function laporanAktivitas(){


		//peribadatan

		$data['infaqKotakJumat']=$this->laporan_m->getSumData("1211");
		$data['infaqPengajian']=$this->laporan_m->getSumData("1213");
		$data['infaqPhbi']=$this->laporan_m->getSumData("1212");
		$data['infaqRamadhan']=$this->laporan_m->getSumData("1214");
		//jumlah peribadatan
		$data['peribadatan']=$data['infaqKotakJumat']+$data['infaqPengajian']+$data['infaqPhbi']+$data['infaqRamadhan'];

		//pendidikan
		$data['infaqTpaTahfiz']=$this->laporan_m->getSumData("1221");

		//ziswaf
		$data['fidyah']=$this->laporan_m->getSumData("1235");
		$data['infaqBaksos']=$this->laporan_m->getSumData("1236");
		$data['infaqDansos']=$this->laporan_m->getSumData("1233");
		$data['infaqDonatur']=$this->laporan_m->getSumData("1231");
		$data['infaqOperasional']=$this->laporan_m->getSumData("1232");
		$data['waqaf']=$this->laporan_m->getSumData("1237");
		$data['zakat']=$this->laporan_m->getSumData("1234");
		//jumlah ziswaf
		$data['ziswaf']=$data['fidyah']+$data['infaqBaksos']+$data['infaqDansos']+$data['infaqDonatur']+$data['infaqOperasional']+$data['waqaf']+$data['zakat'];

		$konten['data']=$data;
		$this->load->view("admin/laporan_keuangan/laporan_aktivitas_v", $konten);
	}

}

/* End of file Laporan_keuangan.php */
/* Location: ./application/controllers/Laporan_keuangan.php */