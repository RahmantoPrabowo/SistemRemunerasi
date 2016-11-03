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
		$this->template->view('template/riwayatgolongan');
	}
	public function riwayatpendidikan()
	{
		$this->template->view('template/riwayatpendidikan');
	}
	public function riwayatfungsional()
	{
		$this->template->view('template/riwayatfungsional');
	}
	public function riwayatstruktural()
	{
		$this->template->view('template/riwayatstruktural');
	}
	public function rekapitulasikegiatan()
	{
		$this->template->view('template/rekapitulasikegiatan');
	}
}
