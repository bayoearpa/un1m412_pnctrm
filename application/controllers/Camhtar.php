<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Camhtar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_registrasi');
		$this->load->helper('url');
		$this->load->helper('captcha');
		$this->load->helper('download');
		$this->load->helper('judul_seo');
		$this->load->library('m_pdf');
	}

	public function index()
	{
		$this->load->view('camahatar/login');
	}
	public function daftar()
	{
		$this->load->view('camahatar/daftar');
		$this->load->view('camahatar/daftar_js');
	}
	public function cek_user()
	{
		# code...
		if ($this->input->post('username')) {
            $username = $this->input->post('username');
            $is_available = $this->m_registrasi->cek_user($username);

            if ($is_available) {
                echo "available"; // Username tersedia
            } else {
                echo "unavailable"; // Username sudah digunakan
            }
        }
	}

}

/* End of file camahatar.php */
/* Location: ./application/controllers/camahatar.php */