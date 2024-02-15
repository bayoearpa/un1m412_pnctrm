<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koperasi extends CI_Controller {


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
                
            }
            return $pick;
    }

	public function index()
	{
		$this->load->view('koperasi/header');
        $this->load->view('koperasi/index');
        $this->load->view('koperasi/footer');
	}
	public function rekap()
	{
		# code...
		$where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $where = array(
			'tbl_catar_2024.gelombang' => $gelombang,			       
        );
		$data['catar'] = $this->m_registrasi->get_data_rekap_ukurpakaian($where)->result();
		foreach ($data['catar'] as $row)
		{
        $prodi = $row->prodi;
		}
		$data['prodi'] = $this->prodi($prodi);
		$data['koperasi'] = $this;
		$this->load->view('koperasi/header');
        $this->load->view('koperasi/rekap',$data);
        $this->load->view('koperasi/footer');
	}
	public function cetak()
	{
		# code...
		$this->load->view('koperasi/header');
        $this->load->view('koperasi/cetak');
        $this->load->view('koperasi/footer');
	}

}

/* End of file Koperasi.php */
/* Location: ./application/controllers/Koperasi.php */