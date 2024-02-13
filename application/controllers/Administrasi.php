<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Administrasi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_registrasi');
    }

    function index() {
        $this->load->view('login');
    }
    function login()
    {
    	# code...
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run() != false){
			$where = array(
				'user' => $username,
				'password' => md5($password)			
			);
			$data = $this->m_registrasi->get_data($where,'tbl_catar_admin');
			$d = $this->m_registrasi->get_data($where,'tbl_catar_admin')->row();
			$cek = $data->num_rows();
			if($cek > 0){
				$session = array(
					'id_admin'=> $d->id_admin,
					'nama'=> $d->nama,
					'status' => 'login'
				);
				$this->session->set_userdata($session);
				if ($d->level=='1') {
						# code...
						redirect(base_url().'bau/index');
					}elseif ($d->level=='2') {
						# code...
						redirect(base_url().'baak/index');
					}elseif ($d->level=='3'){
						redirect(base_url().'umum/index');
					}elseif ($d->level=='4'){
						redirect(base_url().'dekan/index');
					}elseif ($d->level=='5'){
						redirect(base_url().'samapta/index');
					}elseif ($d->level=='6'){
						redirect(base_url().'wawancara/index');
					}elseif ($d->level=='7'){
						redirect(base_url().'tpa/index');
					}elseif ($d->level=='8'){
						redirect(base_url().'kepri/index');
					}elseif ($d->level=='9'){
						redirect(base_url().'koperasi/index');
					}


			}else{
				redirect(base_url().'administrasi?pesan=gagal');			
			}
		}else{
			$this->load->view('login');
		}
    }
}
        
/* End of file administrasi.php */
/* Location: ./application/controllers/administrasi.php */