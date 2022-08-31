<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model', 'admo');
		$this->load->model('Log_model', 'lomo');
	}

	public function getSite()
	{
		$this->db->order_by('namasite', 'asc');
		return $this->db->get('namasite')->result_array();	
	}

	public function getsiteById($id_site)
	{
		return $this->db->get_where('namasite', ['id_site' => $id_site])->row_array();	
	}

	public function addSite()
	{
		$dataUser = $this->admo->getDataUserAdmin();
		$isi_log_2 = 'User ' . $dataUser['username'] . ' mencoba menambahkan site';
		$this->admo->userPrivilege('site', $isi_log_2);

		$data = [
			'site'		=> ucwords(strtolower($this->input->post('site', true)))
		];

		$this->db->insert('site', $data);

		$isi_log = 'site ' . $data['site'] . ' berhasil ditambahkan';
		$this->lomo->addLog($isi_log, $dataUser['id_user']);
		$this->session->set_flashdata('message-success', $isi_log);
		redirect('site');
	}

	public function editSite($id_site)
	{
		$dataUser = $this->admo->getDataUserAdmin();
		$isi_log_2 = 'User ' . $dataUser['username'] . ' mencoba mengubah site ber id ' . $id_site;
		$this->admo->userPrivilege('site', $isi_log_2);

		$data_site = $this->getSiteById($id_site);
		$site  = $data_site['site'];
		$data = [
			'site'		=> ucwords(strtolower($this->input->post('site', true)))
		];

		$this->db->update('site', $data, ['id_site' => $id_site]);

		$isi_log = 'site ' . $data['site'] . ' berhasil diubah';
		$this->lomo->addLog($isi_log, $dataUser['id_user']);
		$this->session->set_flashdata('message-success', $isi_log);
		redirect('site');
	}

	public function removeSite($id_site)
	{
		$dataUser = $this->admo->getDataUserAdmin();
		$isi_log_2 = 'User ' . $dataUser['username'] . ' mencoba menghapus site ber id ' . $id_site;
		$this->admo->userPrivilege('site', $isi_log_2);

		$data_site = $this->getSiteById($id_site);
		$site  = $data_site['site'];
		
		$this->db->delete('kelurahan', ['id_site' => $id_site]);
		$this->db->delete('site', ['id_site' => $id_site]);
		$isi_log = 'site ' . $site . ' berhasil dihapus';
		$this->lomo->addLog($isi_log, $dataUser['id_user']);
		$this->session->set_flashdata('message-success', $isi_log);
		redirect('site'); 
	}
}