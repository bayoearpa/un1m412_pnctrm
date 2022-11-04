<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Samapta extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if($this->session->userdata('status') != "login"){
			redirect(base_url().'welcome?pesan=belumlogin');
		}
		$this->load->model('m_registrasi');
        $this->load->helper('url');
	}
	public function index()
	{
		# code...
		$where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $where = array(
			'gelombang' => $gelombang,			       
        );
		$data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2022')->result();
		foreach ($data['catar'] as $row)
		{
        $prodi = $row->prodi;
		}
		$data['prodi'] = $this->prodi($prodi);
        $this->load->view('samapta/header');
        $this->load->view('samapta/index');
        $this->load->view('samapta/footer');
	}

}

/* End of file Samapta.php */
/* Location: ./application/controllers/Samapta.php */
