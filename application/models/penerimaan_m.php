<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class penerimaan_m extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getAktLogic($kode_sub, $select){
		$this->db->select($select);
		$this->db->where('kode_sub', $kode_sub);
		
		return $this->db->get('akt_logic')->result_array();
	}

	public function ambilTabelView($kode_sub, $tabelInfo, $tabelTr){
		$this->db->select('*');
		$this->db->from($tabelInfo);
		//join tabel infotr dan tr
		$this->db->join($tabelTr, $tabelTr.'.id_infotr = '.$tabelInfo.'.id_infotr');
		$this->db->where(array('kredit'=>'0', 'kode_sub'=>$kode_sub));

		return $this->db->get()->result_array();
	}

	public function InsertData($tabel, $data) {

		$res = $this->db->insert($tabel, $data);

		return $res;

	}

	public function UpdateData($tabel, $data, $pk, $id) {

		$this->db->where($pk,$id);

		$res = $this->db->update($tabel,$data);

		return $res;

	}

	public  function getByID($tabel,$pk,$id){

		$this->db->where($pk,$id);

		return $this->db->get($tabel);

	}

}

/* End of file penerimaan_input-m.php */
/* Location: ./application/models/penerimaan_input-m.php */