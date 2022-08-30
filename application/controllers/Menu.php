<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengaduan_model', 'pemo');
		$this->load->model('Landing_model', 'lamo');
		$this->load->model('Tanggapan_model', 'tamo');
	}

	public function checkLogin()
	{
		if ($this->session->userdata('id_masyarakat')) 
		{
			redirect('pelapor');		
		}
	}

	public function index()
	{
		$this->checkLogin();

		$data['pengaduan']	= $this->pemo->getPengaduan();
		$data['title'] = 'Zona Lapor';
		$this->load->view('templates/header', $data);
		$this->load->view('menu/index', $data);
		$this->load->view('templates/footer', $data);
	}
}
