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
	 function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'referral?pesan=logout');
	}
	function prodi($id){
        switch ($id) {

            // registrasi
               case '1':
                    $pick = "D3 KETATALAKSANAAN PELAYARAN NIAGA DAN KEPELABUHAN";
                break;
                case '2' :
                    $pick = "D3 TEKNIKA";
                break;
                case '3' :
                    $pick = "D3 NAUTIKA";
                break;
                case '4' :
                    $pick = "S1 TRANSPORTASI";
                break;
                case '5':
                    $pick = "S1 TEKNIK TRANSPORTASI LAUT";
                break;
                case '6':
                    $pick = "S1 TEKNIK MESIN";
                break;
                case '7':
                    $pick = "S1 TEKNIK KESELAMATAN";
                break;
                case '8':
                    $pick = "S1 PERDAGANGAN INTERNASIONAL";
                break;
                case '9':
                    $pick = "D4 MANAJEMEN PELABUHAN DAN LOGISTIK MARITIM";
                break;
                 case '10':
                    $pick = "S1 BISNIS DIGITAL";
                break;
                default :
                    $pick = "Belum Pilih Prodi";
                
            }
            return $pick;
    }
    function periode($id){
        switch ($id) {

            // registrasi
               case '1':
                    $pick = "Januari";
                break;
                case '2' :
                    $pick = "Februari";
                break;
                case '3' :
                    $pick = "Maret";
                break;
                case '4' :
                    $pick = "April";
                break;
                case '5':
                    $pick = "Mei";
                break;
                case '6':
                    $pick = "Juni";
                break;
                case '7':
                    $pick = "Juli";
                break;
                case '8':
                    $pick = "Agustus";
                break;
                case '9':
                    $pick = "September";
                break;
                 case '10':
                    $pick = "Oktober";
                break;
                case '11':
                    $pick = "November";
                break;
                 case '12':
                    $pick = "Desember";
                break;
                default :
                    $pick = "Periode tidak ditemukan";
                
            }
            return $pick;
    }
	public function home() {
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $ref = $this->session->userdata('user_id');
        $where = array(
            'ref' => $ref
        );
        $data['ref_code'] = $ref;
        // $data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2023')->result();
        $data['referral'] = $this;
        $data['catar'] = $this->m_registrasi->get_data_join_2024_where($where)->result();
        // $data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2022')->result();
        // $data['catar'] = $this->m_registrasi->get_data_all('tbl_catar_2021')->result(); 
        $this->load->view('referral/header',$data);
        $this->load->view('referral/index',$data);
        $this->load->view('referral/footer');
    }

}

/* End of file Referral.php */
/* Location: ./application/controllers/Referral.php */