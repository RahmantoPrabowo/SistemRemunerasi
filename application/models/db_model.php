<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_model extends CI_Model {

	 public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }
	public function get_Dosen()
	{
		$data = $this->db->query('select * from tbmengajar_dosen');
		return $data->result_array();
	}

	public function get_RiwayatGolongan($nip)
	{
		
		$data = $this->db->query('select * from riwayat_golongan where nip="'.$nip.'"');
		return $data->result_array();
	}

	public function get_RiwayatPendidikan($nip)
	{
		
		$data = $this->db->query('select * from pendidikan where nip="'.$nip.'"');
		return $data->result_array();
	}


	public function get_RiwayatJabatanFungsional($nip)
	{
		
		$data = $this->db->query('select * from jabatan_fungsional where nip="'.$nip.'"');
		return $data->result_array();
	}
	public function get_RiwayatJabatanStruktural($nip)
	{
		
		$data = $this->db->query('select * from jabatan_struktural where nip="'.$nip.'"');
		return $data->result_array();
	}
	public function InsertData($tabelName,$data)
	{
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}
	public function UpdateData()
	{
		
	}
	public function DeleteData()
	{
		
	}
}
