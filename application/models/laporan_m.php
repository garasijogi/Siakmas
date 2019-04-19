<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_m extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getSumData($akun){
		$hasil=array();
		//persiapan sql
		$where="kode_sub='$akun' AND debit!='0'";

		$this->db->select('debit');
		$this->db->from('tr01_penerimaanterikat');
		$this->db->where($where);
		$kueri=$this->db->get();

		if($kueri->num_rows() > 0){
		//record direturn
			//proses pengambilan data
			foreach($kueri->result() as $value){
				$data[] = $value;
			}
			array_push($hasil, $data);
		}else{
			//gaada record ditemukan
		}

		if(!empty($hasil)){
			//1. ubah stdclass jadi object array
			$dataDidapatkan=json_decode(json_encode($hasil), true);

			//2. data nested 2 array, harus dikeluarkan terlebih dahulu baru kemudian bisa diubah isi datanya
			foreach($dataDidapatkan as $innerArray){
				if(is_array($innerArray)){
					//loop kedua
					foreach($innerArray as $v){
						$displayable[]=$v['debit'];
					}
				}
			}

			//3. replace array
			$dataDidapatkan=$displayable;
		}else{
			$dataDidapatkan=array();
		}

		return array_sum($dataDidapatkan);
	}

}

/* End of file laporan_m.php */
/* Location: ./application/models/laporan_m.php */