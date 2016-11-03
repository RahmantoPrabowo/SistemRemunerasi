<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainControler extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->library('template');
	}
	public function index()
	{
		$this->template->view('template/content');
		
	}
	public function datadosen()
	{
		$this->template->view('template/dosen');
		
	}
	public function riwayatkegiatan()
	{

		$this->template->view('template/riwayatkegiatan');
	}
	public function riwayatgolongan()
	{

		$nip="09121402010";
		$table="";
		$data = $this->Db_model->get_RiwayatGolongan($nip);
		$idx=1;
		foreach ($data as $c) {
			# code...
			
			
			$table =$table."<tr class='gradeX'>";
            $table = $table."<td>".$idx."</td>";
            $table = $table."<td>".$c['tmt']."</td>";
        	$table = $table."<td>".$c['golongan']."</td>";
            $table = $table."<td>".$c['pph']."</td>";
           
        
            $table = $table."</tr>";
            $idx++;
		}
		//echo $table;
		$tableA['tampilTable'] = $table;
		


		$this->template->view('template/riwayatgolongan',$tableA);
	}
	public function riwayatpendidikan()
	{
		$nip="09121402010";
		$table="";
		$data = $this->Db_model->get_RiwayatPendidikan($nip);
		$idx=1;
		foreach ($data as $c) {
			# code...
			
			
			$table =$table."<tr class='gradeX'>";
            $table = $table."<td>".$idx."</td>";
            $table = $table."<td>".$c['tmt']."</td>";
        	$table = $table."<td>".$c['jenjangpendidikan']."</td>";
            $table = $table."<td>".$c['gelar']."</td>";
            $table = $table."<td>".$c['institusi']."</td>";
           
        
            $table = $table."</tr>";
            $idx++;
		}
		//echo $table;
		$tableA['tampilTable'] = $table;
		

		$this->template->view('template/riwayatpendidikan',$tableA);
	}
	public function riwayatfungsional()
	{

		$nip="09121402010";
		$table="";
		$data = $this->Db_model->get_RiwayatJabatanFungsional($nip);
		$idx=1;
		foreach ($data as $c) {
			# code...
			
			
			$table =$table."<tr class='gradeX'>";
            $table = $table."<td>".$idx."</td>";
            $table = $table."<td>".$c['tmt']."</td>";
        	$table = $table."<td>".$c['jabatan_fungsional']."</td>";
            
           
        
            $table = $table."</tr>";
            $idx++;
		}
		//echo $table;
		$tableA['tampilTable'] = $table;
		
		$this->template->view('template/riwayatfungsional',$tableA);
	}
	public function riwayatstruktural()
	{

		$nip="09121402010";
		$table="";
		$data = $this->Db_model->get_RiwayatJabatanStruktural($nip);
		$idx=1;
		foreach ($data as $c) {
			# code...
			
			
			$table =$table."<tr class='gradeX'>";
            $table = $table."<td>".$idx."</td>";
            $table = $table."<td>".$c['tmt']."</td>";
        	$table = $table."<td>".$c['jabatan_struktural']."</td>";
        	$table = $table."<td>".$c['deskripsi']."</td>";
            
           
        
            $table = $table."</tr>";
            $idx++;
		}
		//echo $table;
		$tableA['tampilTable'] = $table;
		
		$this->template->view('template/riwayatstruktural',$tableA);
	}
	public function rekapitulasikegiatan()
	{
		$this->template->view('template/rekapitulasikegiatan');
	}
}
