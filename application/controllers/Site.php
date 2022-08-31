<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model', 'admo');
		$this->load->model('Site_model', 'kemo');

		$this->admo->checkLoginAdmin();
	}

	public function index()
	{
		$data['dataUser']	= $this->admo->getDataUserAdmin();
		$data['title']  	= 'Site';
		$data['site']	= $this->kemo->getSite();
		$this->load->view('templates/header-admin', $data);
		$this->load->view('site/index', $data);
		$this->load->view('templates/footer-admin', $data);
	}

	public function addSite()
	{
		$data['dataUser']	= $this->admo->getDataUserAdmin();
		$data['title'] 		= 'Tambah site';

		$this->form_validation->set_rules('site', 'site', 'required|trim');
		if ($this->form_validation->run() == false) {
		    $this->load->view('templates/header-admin', $data);
		    $this->load->view('site/add_site', $data);
		    $this->load->view('templates/footer-admin', $data);  
		} else {
		    $this->kemo->addSite();
		}
	}

	public function editSite($id_site)
	{
		$data['dataUser']	= $this->admo->getDataUserAdmin();
		$data['site']	= $this->kemo->getSiteById($id_site);
		$data['title'] 		= 'Ubah site - ' . $data['site']['site'];

		$this->form_validation->set_rules('site', 'site', 'required|trim');
		if ($this->form_validation->run() == false) {
		    $this->load->view('templates/header-admin', $data);
		    $this->load->view('site/edit_site', $data);
		    $this->load->view('templates/footer-admin', $data);  
		} else {
		    $this->kemo->editSite($id_site);
		}
	}

	public function removeSite($id_site)
	{
		$data['dataUser']	= $this->admo->getDataUserAdmin();
		$this->kemo->removeSite($id_site);
	}
}
