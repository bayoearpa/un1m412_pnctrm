<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referral extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_registrasi');
    }

	public function index()
	{
		$this->load->view('referral/login');
	}
	public function login()
	{
	    // Load the form validation library
	    $this->load->library('form_validation');
	    
	    // Set validation rules for the login form fields
	    $this->form_validation->set_rules('username', 'Username', 'trim|required');
	    $this->form_validation->set_rules('password', 'Password', 'trim|required');
	    
	    // Check if the login form was submitted and is valid
	    if ($this->form_validation->run() == false) {
	        // Form validation failed, show login form
	        $this->load->view('referral/login');
	    } else {
	        // Form validation passed, attempt to log in user
	        $username = $this->input->post('username');
	        $password = $this->input->post('password');

	        $where= array(
            'ref' => $username,  
        	);

	        // Check if user exists and password is correct
	        $user = $this->m_registrasi->get_user_by_refcode('tbl_ref',$where);
	        if ($user && $user['password'] === md5($password)) {
	            // User exists and password is correct, set user session data and redirect to home page
	            $user_data = array(
	                'user_id' => $user['ref'],
	                'name' => $user['nama'],
	                'logged_in' => true
	            );
	            $this->session->set_userdata($user_data);
	            redirect('referral_home');
	        } else {
	            // User does not exist or password is incorrect, show error message
	            // $data['error'] = 'Invalid username or password';
	            $this->session->set_flashdata('error', "<b>Error, Kode Refferal ini tidak terdaftar</b>");
	            $this->load->view('referral/login');
	        }
	    }
	}
	public function home() {
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $ref = $this->session->userdata('user_id');
        $where = array(
            'gelombang' => $gelombang,
            'ref' => $ref
        );
        $data['ref_code'] = $ref;
        $data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2023')->result();
        // $data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2022')->result();
        // $data['catar'] = $this->m_registrasi->get_data_all('tbl_catar_2021')->result(); 
        $this->load->view('referral/header');
        $this->load->view('referral/index',$data);
        $this->load->view('referral/footer');
    }

}

/* End of file Referral.php */
/* Location: ./application/controllers/Referral.php */