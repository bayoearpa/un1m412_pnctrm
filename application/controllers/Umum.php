<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umum extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		 if($this->session->userdata('status') != "login"){
			redirect(base_url().'welcome?pesan=belumlogin');
		}
		$this->load->model('m_registrasi');
		$this->load->helper('url');
		$this->load->library('m_pdf');
	}

	public function index()
	{
	    $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $where= array(
            'gelombang' => $gelombang,  
        );
		$data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar')->result();
		$this->load->view('umum/header');
		$this->load->view('umum/index',$data);
		$this->load->view('umum/footer');
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'administrasi?pesan=logout');
	}
	function cetak($id)
	{
		# code...
		$where = array(
			'no' => $id		
		);
		$data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar')->result();
		$this->load->view('cetakReg',$data);

		//pdf
		$pdfFilePath="cetak.pdf";
		$html=$this->load->view('cetakReg',$data, TRUE);
		$pdf = $this->m_pdf->load();
 
        $pdf->AddPage('P');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
	}

}

/* End of file umum.php */
/* Location: ./application/controllers/umum.php */